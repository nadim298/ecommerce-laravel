<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{
   function user_login_register(){
        return view('frontend/login_register');
    }

    function user_register(Request $request){
      if($request->isMethod('post')){
        $data=$request->all();

        $check_email = User::where('email',$data['email'])->count();
               if($check_email>0){
                   return redirect()->back()->with('error_message','This email address is already exists!');
               }
               else{
                 $user = new User;
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->save();

                if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                  return redirect('/cart');
                }
               }
             }

    }
    function user_logout(){
      Auth::logout();
         return redirect('/');
     }
}
