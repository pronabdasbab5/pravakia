<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use File;
use Response;

class TestController extends Controller
{
    public function showAllSubjects($id, $stream_id){
        $subject_record = DB::table('subjects')
        ->where('class_id',$id)
        ->where('stream_id', $stream_id)
        ->get();
        
        
    	return view('web.subject.subject',['subject_record'=>$subject_record]);
    }

	public function showMaterialCategory($subject_id){
      
        $material_record = DB::table('document_category')->get();

    	return view('web.material.material',['material_record'=>$material_record, 'subject_id' => $subject_id]);
    }


    public function showAllMaterials($document_id, $subject_id){

        $chapters = DB::table('chapter')
            ->where('subject_id', $subject_id)
            ->distinct()
            ->get();

        $data = [];
        foreach ($chapters as $key => $item) {
        	
        	$topics = DB::table('topic')
        		->where('chapter_id', $item->id)
        		->where('document_type_id', $document_id)
        		->get();

        	$data [] = [
        		'chapter_id' => $item->id,
        		'chapter_no' => $item->chapter_no,
        		'chapter_name' => $item->chapter_name,
        		'subject_id' => $item->subject_id,
        		'topic' => $topics
        	];
        }
      
        $document_record = DB::table('document_category')->where('id',$document_id)->get();
                                  
    	return view('web.chapter.chapter',['data'=>$data,'document_record'=>$document_record]);
    }

    public function fileDownload ($topic_id) 
    {

        try {
            $topic_id = decrypt($topic_id);
        }catch(DecryptException $e) {
            return redirect()->back();
        }

        $file = DB::table('topic')
            ->where('id', $topic_id)
            ->first();

        $path = public_path('admin/docs/'.$file->file);

        return response()->file($path);
    }
}
