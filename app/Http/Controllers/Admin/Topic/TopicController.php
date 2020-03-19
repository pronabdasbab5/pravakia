<?php

namespace App\Http\Controllers\Admin\Topic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;

class TopicController extends Controller
{
    public function showAddCategoryForm(){
   	$document_record = DB::table('document_category')->get();
   	return view('admin.topic.add_document_category',['document_record'=>$document_record]);

   }
   public function addCategory(Request $request){
   	$request->validate(['category'=>'required']);
   	$count = DB::table('document_category')
   	   ->where('category_name',strtolower($request->input('category')))
   	   ->count();
   	if($count>0){

   		$msg = "Category already present";
   	}
   	else{

   	DB::table('document_category')
   	   ->insert(['category_name'=>strtolower($request->input('category'))]);
   	   
   	$msg ="Category added successfully";
   }
   return redirect()->back()->with('msg',$msg);
 }
  public function showEditCategoryForm($id){
    $document_record = DB::table('document_category')->where('id',$id)->first();
    return view('admin.topic.show_edit_category_form',['document_record'=>$document_record]);

  }

  public function updateCategory(Request $request,$id){
     $count = DB::table('document_category')->where('category_name',strtolower($request->input('category')))->count();
     if($count>0){
      $msg = "Record already exist";
     }
     else{
      DB::table('document_category')->where('id',$id)
         ->update([
        'category_name'=>strtolower($request->input('category'))
      ]);
         $msg="Category added successfully";
   }

      return redirect()->back()->with('msg',$msg);
  }


   public function showAddTopicForm(){
      $category_record = DB::table('document_category')->get();

   return view('admin.topic.show_add_topic_form',['category_record'=>$category_record]);
   

   }
   public function addTopic(Request $request){
    if($request->input('stream_type_id')==2){
      $request->validate([
         'chapter_name_id'=>'required',
         'stream_type_id'=>'required',
         'class_id'=>'required',
         'stream_name_id'=>'required',
         'subject_id'=>'required',
         'topic_name'=>'required',
         'category_id'=>'required',
         'upload_file'=>'required|mimes:pdf,docx,doc'

      ]);
}
else{

        $request->validate([
         'chapter_name_id'=>'required',
         'stream_type_id'=>'required',
         'class_id'=>'required',
        
         'subject_id'=>'required',
         'topic_name'=>'required',
         'category_id'=>'required',
         'upload_file'=>'required|mimes:pdf,docx,doc'

      ]);

}
       if(!File::isdirectory('admin/docs')){
         File::makeDirectory('admin/docs',0777,true,true);
      }
       if ($request->hasFile('upload_file')) {
            $file_upload = $request->file('upload_file');
            $file   = time().'.'.$file_upload->getClientOriginalExtension();

         
            
            $path = $request->file('upload_file')->move('admin/docs/',$file);



      DB::table('topic')->insert([
          'chapter_id'=>$request->input('chapter_name_id'),
          'document_type_id'=>$request->input('category_id'),
          'name'=>strtolower($request->input('topic_name')),
          'file'=>basename($path),
          'year'=>$request->input('year')
      ]);
  
   

   }
    return redirect()->back()->with('msg','document uploaded successfully');


}

  public function listAllFiles(){
    $all_file_records = DB::table('topic')
                            ->leftjoin('chapter','topic.chapter_id','=','chapter.id')
                            ->leftjoin('document_category','topic.document_type_id','=','document_category.id')
                            ->select('topic.*','chapter.chapter_name','document_category.category_name','chapter.chapter_no')
                            ->get();
    

  
    
    return view('admin.topic.list_all_files',['all_file_records'=>$all_file_records]);

   }

   
   public function deleteFile($id){

   
    $file_details = DB::table('topic')->where('id',$id)->first();
    File::delete(public_path('admin/docs/'.$file_details->file));
     DB::table('topic')->where('id',$id)->delete();
   return redirect()->back();


}

}
