<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControl extends Controller
{
    public  function home()
    {
    	return view('homepage');
    }


     public  function adminHome()
    {
    	return view('adminHomepage');
    }


     public  function adminLogin()
    {
    	return view('adminLogin');
    }


     public  function candidateHome()
    {
    	return view('candidateHomepage');
    }


      public  function candidateLogin()
    {
    	return view('candidateLogin');
    }


       public  function candidateRegistration()
    {
    	return view('candidateRegistration');
    }


 		public  function employerHome()
    {
    	return view('employerHomepage');
    }


    	public  function employerLogin()
    {
    	return view('employerLogin');
    }


    	public  function employerRegistration()
    {
    	return view('employerRegistration');
    }


        public  function us()
    {
        return view('contactUs');
    }


   public  function home1()
    {
        return view('employerHomepage');
    }
}

