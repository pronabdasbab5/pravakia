<?php

namespace App\Http\Controllers\Admin\Account;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\User\User;
use Illuminate\Mail\Mailer;
use App\Mail\CreateAccount;
use Image;
use File;
use Auth;
use Hash;


class AccountController extends Controller
{
    public function showCreateAccountForm(){
        $class_record = DB::table('class')->get();
        $stream_record = DB::table('stream_type')->get();
    	return view('admin.account.show_create_account_form',['class_record'=>$class_record,'stream_record'=>$stream_record]);
    }

    public function createAccount(Request $request){

           $request->validate([

           'full_name'=>'required',
           'email'=>'required|email',
           'mobile'=>'required|numeric',
           'class_id'=>'required',
           'city'=>'required',
           'state'=>'required',
           'address'=>'required',
           'pin'=>'required|numeric',
           'stream_id'=>'required',
           'gender'=>'required',
           'dob'=>'required',
           'password'=>'required|required_with:retype_password|same:retype_password',
           'retype_password'=>'required|min:6',


           ]);
        
         if(!File::isdirectory('admin/profile')){
         File::makeDirectory('admin/profile',0777,true,true);
      }
       $file="";

       if ($request->hasFile('file')) {
            $image = $request->file('file');
            $file = microtime().'.'.$image->getClientOriginalExtension();
         
            $destinationPath = public_path('/admin/profile');
            $img = Image::make($image->getRealPath());
            $img->save($destinationPath.'/'.$file);

  }

        $count = DB::table('users')
    		->where('email', strtolower($request->input('email')))
    		->count();


        
  
    	if ($count> 0){
            
    		$msg ="User already registered";
        }
        else{
         $user = DB::table('users')->insert([
          'name' => ucwords(strtolower($request['full_name'])),
    
            'email' => strtolower($request['email']),
            'mobile'=>$request['mobile'],

             'class_id'=>$request['class_id'],
             'dob'=>$request['dob'],
             'city'=>$request['city'],
             'state'=>$request['state'],
             'address'=>$request['address'],
             'pin'=>$request['pin'],
             'gender'=>$request['gender'],
             'stream_id'=>$request['stream_id'],
             'image'=>$file,
            
           
            'password' => Hash::make($request['password']),
            
        ]);
        $msg = "User created successfully and credentials have been  sent";
    
    
    
    
     $name =  $request->input('full_name');
     $email = $request->input('email');
   
     $password = $request->input('password');





     $html = '<center><h2>Hello' . $name . 'Your password is generated successfully</h2></center>
            <table border=1 style="border-collapse: collapse;width:90%;border: 1px solid #999;text-align:center; margin: auto;">
            <tbody>
            <tr>
            <th style="padding:10px;background:#f9d776">Name</th>
            <th style="padding:10px;background:#f9d776">LoginId</th>
            <th style="padding:10px;background:#f9d776">Password</th>
            
            </tr>
            <tr>
            <td style="padding:10px;background:#d1fdff">'.$name.'</td>
            <td style="padding:10px;background:#d1fdff"><a href="mailto:'.$email.'">'.$email.'</a></td>
           
            <td style="padding:10px;background:#d1fdff">'.$password.'</td>
            </tr>

            </tbody>
            </table>';

    $data = [
        'message' => $html
    ];

      
     Mail::to($email)->send(new CreateAccount($data));

   
}
        return redirect()->back()->with('msg',$msg);
    }

}
