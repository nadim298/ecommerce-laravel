<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
  function login(Request $request){
    if($request->isMethod('post')){
      $data=$request->input();
      if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin_status'=>'1'])){
        return redirect('/admin/dashboard');
      }
      else {
        return redirect('/admin')->with('error_message', 'Invalid Username or Password!');
      }

    }
    return view('backend/admin_login');
  }
    function dashboard(){
      return view('backend/dashboard');
    }
    function logout(){
      Session::flush();
      return redirect('/admin');
    }
    function change_password(){
      return view('backend/change_password');
    }
    function check_current_password(Request $request){
      $data=$request->all();
      $current_password=$data['current_password'];
      $db_password=User::where(['admin_status'=>'1'])->first();
      if(Hash::check($current_password,$db_password->password)){
        echo "true"; die;
      }else {
        echo "false"; die;
      }
    }
    function update_password(Request $request){
      if($request->isMethod('post')){
        $data=$request->all();
        $current_password=$data['current_password'];
        $user_details=User::where(['email'=>Auth::user()->email])->first();
        if(Hash::check($current_password,$user_details->password)){
          $new_password=bcrypt($data['new_password']);
          User::find($user_details->id)->update(['password'=>$new_password]);
          return redirect('/admin/change_password')->with('success_message', 'Password successfully changed!');
        }else {
          return redirect('/admin/change_password')->with('error_message', 'Failed to change password!');
        }
      }
    }

}
