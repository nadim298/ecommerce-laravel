<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    function login_register(Request $request){
      if($request->isMethod('post')){
        $data=$request->all();

        $check_email = User::where('email',$data['email'])->count();
               if($check_email>0){
                   return redirect()->back()->with('error_message','This email address is already exists!');
               }
               else{

               }

      }
      return view('frontend/login_register');
    }
}
