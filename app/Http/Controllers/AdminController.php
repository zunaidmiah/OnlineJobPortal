<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdminController extends Controller
{
    public function authenticate(Request $request)
    {
    	$userName=$request->input('userName');
        $password=$request->input('password');
        $loginData=DB :: table('admins')->where (['userName'=>$userName,'password'=>$password])->get();
        if (count($loginData)>0)
        {
            $request->session()->put('data',$userName);
            echo("Log in succesfully");
            return view('adminHomepage');
        }
        else 
        {
            echo "oops!!! Try Again";
            return view('adminLogin');
        }
    }
}
