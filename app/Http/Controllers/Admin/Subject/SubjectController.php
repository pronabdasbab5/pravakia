<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use File;
use Image;
use Str;
$flag;
class SubjectController extends Controller
{
    public function showAddSubjectForm(){
      
         
        $all_subject_records =DB::table('subjects')
            ->leftjoin('class','subjects.class_id','=','class.id')
            ->leftjoin('stream_type','subjects.stream_id', '=' , 'stream_type.id')
           
            
            ->select('subjects.*', 'class.class_name', 'stream_type.stream', 'subjects.subject_name')
            ->distinct()
            ->get();
      

        
        return view('admin.subjects.add_subject_form',['all_subject_records'=>$all_subject_records]);

    	
    }

    public function addSubjects(Request $request){          
        if($request->input('stream_type_id')==2){            
            $request->validate([
                'stream_name_id'=>'required',
                'banner_id'=>'required',
                'subject_id'=>'required',
                'class_id'=>'required',

            ]);
        }

        else{
             $request->validate([
                'banner_id'=>'required',
                'subject_id'=>'required',
                'class_id'=>'required',

            ]);
        }
      if($request->hasFile('banner_id')) {
            $image = $request->file('banner_id');
            $file   = time().'.'.$image->getClientOriginalExtension();
         
            $destinationPath = public_path('/admin/subject/banner');
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath.'/'.$file);

        }


        

            $count = DB::table('subjects')
                        ->where('subject_name',strtolower($request->input('subject_id')))
                        ->where('class_id',$request->input('class_id'))
                        ->where('stream_id',$request->input('stream_name_id'))
                        ->count();
            if($count>0){
            	$message = 'Subject already added';
            }
            else{

            	$subject = DB::table('subjects')
            	   ->insert([
                  
            	   	'subject_name'=>strtolower($request->input('subject_id')),
                    'class_id' =>$request->input('class_id'),
                    'stream_id'=>$request->input('stream_name_id'),
                    'banner'=>$file
            	   ]);
               
            	$message = "Subject added succesfully";
            }
            return redirect()->back()->with('msg',$message);


    }

   

    
    public function showEditSubjectForm(Request $request,$id,$class_id){
            $subject_record = DB::table('subjects')
                ->where('id',$id)
                ->where('class_id',$class_id)
                ->first();
        return view('admin.subjects.edit_subject_form',['subject_record'=>$subject_record]);
    }

    public function updateSubject(Request $request,$id,$class_id){
        $request->validate([

            'subject'=>'required|alpha'
        ]);
        $count = DB::table('subjects')
                 ->where('class_id',$class_id)
                 ->where('subject_name',strtolower($request->input('subject')))
                 ->count();
        if($count>0){
            $msg = "Subject already added in class";
        }
        else{
        DB::table('subjects')
           ->where('id',$id)
           ->update([
            'subject_name'=>strtolower($request->input('subject'))
           ]);
           $msg = "Subject updated succesfully";
       }
        return redirect()->back()->with('msg',$msg);
    }

  public function retriveClass(Request $request){


     
        $class_record = DB::table('class')
                           ->where('stream_type',$request->input('stream_type_id'))
                           ->get();
        $stream_record = DB::table('stream_type')
                             ->get();
                           
        $data = "<option value=\"\" disabled selected>Choose Class</option>";
        foreach($class_record as $key=>$value)
            if($value->status==2)
             $data = $data."<option value=\"".$value->id."\">".$value->class_name."</option>";
         $dataone="";
        if($request->input('stream_type_id')==2){
          foreach($stream_record as $key=>$value)
        
             $dataone = $dataone."<option  value=\"".$value->id."\">".$value->stream."</option>";
     }
     else{
        $dataone = $dataone."<option disabled value=\"\">disabled</option>";

     }

        print $data.','.$dataone;

    }
   
    

public function retriveSubject(Request $request){
      if($request->input('stream_type_id')==2){
         $stream_record= DB::table('stream_type')
                        
                           ->get();
        $subject_record = DB::table('subjects')
                           ->where('class_id',$request->input('class_id'))
                           ->get();
         $data = "<option value=\"\" disabled selected>Choose Subject</option>";
        foreach($stream_record as $key=>$value)
             $data = $data."<option value=\"".$value->id."\">".ucwords($value->stream)."</option>";
                           
        $dataone = "<option value=\"\" disabled selected>Choose Subject</option>";
        foreach($subject_record as $key=>$value)
             $dataone = $dataone."<option value=\"".$value->id."\">".ucwords($value->subject_name)."</option>";

        print $data.','.$dataone;


    }
    else{
         $subject_record = DB::table('subjects')
                           ->where('class_id',$request->input('class_id'))

                           ->get();
         $data = "<option disabled value=\"\">disabled</option>";
        $dataone = "<option value=\"\" disabled selected>Choose Subject</option>";
        foreach($subject_record as $key=>$value)
             $dataone = $dataone."<option value=\"".$value->id."\">".ucwords($value->subject_name)."</option>";

        print $data.','.$dataone;
    }
}

public function retriveSubjectForStreams(Request $request){
        $subject_record = DB::table('subjects')
                           ->where('stream_id',$request->input('stream_name_id'))
                           ->where('class_id',$request->input('class_id'))
                        
                           ->get();
      $data = "<option value=\"\" disabled selected>Choose Subject</option>";
        foreach($subject_record as $key=>$value)
        $data =$data."<option value=\"".$value->id."\">".ucwords($value->subject_name)."</option>";
        print $data;

    }



    

public function retriveChapterNo(Request $request){
     
        $chapter_record = DB::table('chapter')
                           ->where('subject_id',$request->input('subject_id'))
                           ->get();
                           
        
         $dataone = "<option value=\"\" disabled selected>Choose Chapter No</option>";
        foreach ($chapter_record as $key => $value) {
              $dataone = $dataone."<option value=\"".$value->id."\">".$value->chapter_no."</option>";
        }

         print $dataone;

    }
    public function retriveChapterName(Request $request){
     
        $chapter_record = DB::table('chapter')
                           ->where('id',$request->input('chapter_no_id'))
                           ->get();

                           
        $data = "<option value=\"\" disabled selected>Choose Chapter Name</option>";
        foreach($chapter_record as $key=>$value)
             $data = $data."<option value=\"".$value->id."\">".ucwords($value->chapter_name)."</option>";
        print $data;


    
         
         }
  


    
  }

    
     
