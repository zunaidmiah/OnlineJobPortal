<?php

namespace App\Http\Controllers;
use DB;
use App\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=DB::table('candidates')->get();
        if(count($data)>0)
        {
            return view('admin_see_users',$data);
        }
        else
        {
            return view('admin_see_users');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = new Candidate();
        $user->firstName=$request->input('firstName');
        $user->lastName=$request->input('lastName');
        $user->userName=$request->input('userName');
        $user->email=$request->input('email');
        $user->DOB=$request->input('birthDate');
        $user->phone=$request->input('phoneNumber');
        $user->degree=$request->input('education');
        $user->skill=$request->input('category');
        $user->city=$request->input('location');
        $user->password=$request->input('password');
        $user->imagePath="";
        $user->save();
        echo "Registration Succesfully";
        return view('candidateLogin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        $data=session()->get('data');
        $userInfo['userInfo']=DB :: table('candidates')->where (['email'=>$data])->get();
        return view('candidateInfo',$userInfo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }



    public function authenticate(Request $request)
    {
        $userName=$request->input('userName');
        $password=$request->input('password');
        $loginData=DB :: table('candidates')->where (['email'=>$userName,'password'=>$password])->get();
        if (count($loginData)>0)
        {
            $request->session()->put('data',$userName);
            echo("Log in succesfully");
            return view('candidateHomepage');
        }
        else 
        {
            echo "oops!!! Try Again";
            return view('candidateLogin');
        }

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        return view ('candidateHomepage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidate=Candidate :: find($id);
        $candidate->delete();
        $data['data']=DB::table('candidates')->get();
        if(count($data)>0)
        {
            return view('admin_see_users',$data);
        }
        else
        {
            return view('admin_see_users');
        }
    }
}
