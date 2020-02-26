<?php

namespace App\Http\Controllers;
use DB;
use App\Job_post;
use App\applyJob;
use Illuminate\Http\Request;

class ApplyJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request,$id)
    {
        $username=session()->get('data');
        $apply_job=Job_post :: find($id);
        if ($username==null)
        {
            return view('candidateLogin');
        }
        else
        {
            $data['data']=DB::table('apply_jobs')->where (['jobTitle'=>$request->input('jobTitle'),'candidateEmail'=>$username,'companyName'=>$request->input('companyName')])->get();
            if(count($data)>0)
            {
                echo "Already You applied for this job";
                return view('candidateHomepage');

            }
            else
            {
            $post_job = new applyJob();
            $post_job->jobTitle=$apply_job->jobTitle;
            $post_job->companyName=$apply_job->companyName;
            $post_job->jobLocation=$apply_job->jobLocation;
            $post_job->employerEmail=$apply_job->userEmail;
            $post_job->candidateEmail=$username;
            $post_job->status='Applied';
            $post_job->save();
            echo "Applied Succesfully";
            return view('candidateHomepage');
        }
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\applyJob  $applyJob
     * @return \Illuminate\Http\Response
     */
    public function show(applyJob $applyJob)
    {
        $username=session()->get('data');
        $jobInfo['jobInfo']=DB :: table('apply_jobs')->where (['candidateEmail'=>$username])->get();
        return view('applied_job',$jobInfo);
    }


    public function show1(applyJob $applyJob)
    {
        $username=session()->get('data');
        $jobInfo['jobInfo']=DB :: table('apply_jobs')->where (['employerEmail'=>$username])->get();
        return view('candidate_applied_job',$jobInfo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\applyJob  $applyJob
     * @return \Illuminate\Http\Response
     */
    public function edit(applyJob $applyJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\applyJob  $applyJob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, applyJob $applyJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\applyJob  $applyJob
     * @return \Illuminate\Http\Response
     */
    public function destroy(applyJob $applyJob)
    {
        //
    }
}
