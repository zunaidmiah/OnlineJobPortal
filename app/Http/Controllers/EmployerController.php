<?php

namespace App\Http\Controllers;

use App\Employer;
use Illuminate\Http\Request;
use DB;
use image;

class EmployerController extends Controller
{

    public function index()
    {
        $data['data']=DB::table('employers')->get();
        if(count($data)>0)
        {
            return view('admin_see_employers',$data);
        }
        else
        {
            return view('admin_see_employers');
        }
    }


    public function authenticate(Request $request)
    {
        $userName=$request->input('userName');
        $password=$request->input('password');
        $loginData=DB :: table('employers')->where (['email'=>$userName,'password'=>$password])->get();
        if (count($loginData)>0)
        {
            $request->session()->put('data',$userName);
            echo("Log in succesfully");
            return view('employerHomepage');
        }
        else 
        {
            echo "oops!!! Try Again";
            return view('employerLogin');
        }

    }

    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        $firstName=$request->input('firstName');
        $lastName=$request->input('lastName');
        $userName=$request->input('userName');
        $email=$request->input('email');
        
        if($request->hasFile('image'))
        {
          $pic=$request->file('image');
          $image='banner_'.$insert.'_'.time().'.'.$pic->getClientOriginalExtension();
          Image::make($pic)->resize(100,100)->save('images/employer/'.$image);
        }
        else 
        {
           $image='null';
        }

        $DOB=$request->input('birthDate');
        $phone=$request->input('phoneNumber');
        $companyName=$request->input('companyName');
        $password=$request->input('password');
        $value=array('firstName'=>$firstName,'lastName'=>$lastName,'userName'=>$userName,'email'=>$email,'imagePath'=>$image,'DOB'=>$DOB,'phone'=>$phone,'companyName'=>$companyName,'password'=>$password);
        DB :: table('employers')->insert($value);
        echo "Registration done succesfully";
        return view('employerLogin');



        //another way to insert value in DB

       // $Employer = new Employer();
        //$Employer->firstName=$request->input('firstName');
        //$Employer->astName=$request->input('lastName');
        //$Employer->userName=$request->input('userName');
        //$Employer->email=$request->input('email');
        
        //if($request->hasfile('image'))
       // {
           // $file=$request->file('image');
           // $extension=$file->getClientOriginalExtension();
           // $filename=time().'.'.$extension;
           // $file->move('images/employer/',$filename);
           // $Employer->image=$filename;
        //}
        //else 
        //{
         //   return $request;
        //   $Employer->image='';
       // }

       // $Employer->DOB=$request->input('birthDate');
        //$Employer->phone=$request->input('phoneNumber');
        //$Employer->companyName=$request->input('companyName');
        //$Employer->password=$request->input('password');
        //$Employer->save();

        

    }

 
    public function show(Employer $employer)
    {
        $data=session()->get('data');
        $userInfo['userInfo']=DB :: table('employers')->where (['email'=>$data])->get();
        return view('employerInfo',$userInfo);
    }

 
    public function edit(Employer $employer)
    {
        //
    }

 
    public function update(Request $request)
    {
        /*$firstName=$request->input('first_name');
        $lastName=$request->input('last_name');
        $userName=$request->input('user_name');
        $email=$request->input('email');
        $DOB=$request->input('DOB');
        $phone=$request->input('phone');
        $companyName=$request->input('company_name');*/
        return view ('employerHomepage');
        
    }

   
    public function destroy(Employer $employer)
    {
        //
    }

    public function destroy1($id)
    {
         $employee=Employer :: find($id);
        $employee->delete();
        $data['data']=DB::table('employers')->get();
        if(count($data)>0)
        {
            return view('admin_see_employers',$data);
        }
        else
        {
            return view('admin_see_employers');
        }
    }
}
