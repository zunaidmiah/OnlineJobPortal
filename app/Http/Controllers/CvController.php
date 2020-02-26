<?php

namespace App\Http\Controllers;
use DB;
use App\cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('cv');
    }
    public function index1()
    {
        $username=session()->get('data');
        $data['data']=DB::table('cvs')->where (['email'=>$username])->get();
        if(count($data)>0)
        {
            return view ('showCV',$data);
        }
        else
        {
            echo "Firstly You Need to Make CV";
            return view ('cv');
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

        $username=session()->get('data');


            $cv = new cv();
            $cv->name=$request->input('name');
            $cv->phone=$request->input('phone');
            $cv->facebookLink=$request->input('socialLink');
            $cv->aboutCareer=$request->input('description');
            $cv->DOB=$request->input('date');
            $cv->workingCompany=$request->input('companyName');
            $cv->workingDuration=$request->input('experience');
            $cv->Institution=$request->input('institution');
            $cv->background=$request->input('department');
            $cv->skill1=$request->input('skill1');
            $cv->skill2=$request->input('skill2');
            $cv->skill3=$request->input('skill3');
            $cv->fatherName=$request->input('fatherName');
            $cv->city=$request->input('city');
            $cv->email=$username;
            $cv->save();
            $data['data']=DB::table('cvs')->where (['email'=>$username])->get();
            return view ('showCV',$data);

        /*$data['data']=DB::table('cvs')->where (['email'=>$username])->get();
        if(count($data)>0)
        {
            echo data;
            echo "You already created a CV";
            return view ('showCV',$data);
        }
        else
        {
            $data = new cv();
            $data->name=$request->input('name');
            $data->phone=$request->input('phone');
            $data->facebookLink=$request->input('socialLink');
            $data->aboutCareer=$request->input('description');
            $data->DOB=$request->input('date');
            $data->workingCompany=$request->input('companyName');
            $data->workingDuration=$request->input('experience');
            $data->Institution=$request->input('institution');
            $data->background=$request->input('experience');
            $data->skill1=$request->input('skill1');
            $data->skill2=$request->input('skill2');
            $data->skill3=$request->input('skill3');
            $data->fatherName=$request->input('fatherName');
            $data->city=$request->input('city');
            $data->email=$username;
            $data->save();
            echo "hi";
            return view ('showCV',$data);
            
        }*/
        
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function show(cv $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function edit(cv $cv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cv $cv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cv=cv :: find($id);
        $cv->delete();
        return view('candidateHomepage');
    }
}
