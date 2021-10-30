<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\RegisterUsers;
use Illuminate\Http\Request;
use DB;
use Session;
use Mail; 
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;




    public function registerUsers(Request $request) { 
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
           
            
        ]);

         $reg_users = new RegisterUsers;
        
         $check_email =  DB::select("select * FROM events_users WHERE email='$request->email'");
         $check_phone=  DB::select("select * FROM events_users WHERE phone='$request->phone'");
         if ($check_email) {
          // return back()->with('email_duplicate_error', 'Email already belong to another User!');
          return response()->json(['email_duplicate_error'=> 'Email already belong to another User!']);

          
         }
         if ($check_phone) {
          return back()->with('phone_duplicate_error', 'Phone Number already belong to another User!');
         }
        
        
  
        $reg_users->fname = $request->fname;
        $reg_users->lname = $request->lname;
        $reg_users->phone = $request->phone;
        $reg_users->email = $request->email;

        
        \Mail::send('message',
        array(
            'name' => $request->fname,
            'email' => $request->lname,
            'subject' => 'From Events',
            'phone' => $request->phone,
            'user_message' => 'Good',
        ), function($message) use ($request)
          {
             $message->from('joshuaoleru@yahoo.com');
             $message->to($request->email);
          });

    


        $reg_users->save();
        // return response()->json([ 'success'=> 'Registration Successful!']);

        
        // return back()->with('success', 'Registration Successful!');



        
        return back()->with('success2', $request->email);

       
        

        
     
           
       
       

    }

  
}
