<?php

namespace App\Http\Controllers;
use DB;
use App\Job_post;
use App\Job;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function index()
    {
        $username=session()->get('data');
        $data['data']=DB::table('job_posts')->where (['userEmail'=>$username])->get();
        if(count($data)>0)
        {
            return view('employee_job',$data);
        }
        else
        {
            return view('employee_job');
        }
    }
    public function index1()
    {
        $data['data']=DB::table('job_posts')->get();
        if(count($data)>0)
        {
            return view('approve_job',$data);
        }
        else
        {
            return view('approve_job');
        }
    }


    public function destroy($id)
    {
         $job=Job_post :: find($id);
        $job->delete();
        $username=session()->get('data');
        $data['data']=DB::table('job_posts')->where (['userEmail'=>$username])->get();
        if(count($data)>0)
        {
            return view('employee_job',$data);
        }
        else
        {
            return view('employee_job');
        }
    }


    public function destroy1($id)
    {
         $job=Job_post :: find($id);
        $job->delete();
        $data['data']=DB::table('job_posts')->get();
        if(count($data)>0)
        {
            return view('approve_job',$data);
        }
        else
        {
            return view('approve_job');
        }
    }


    public function destroy2($id)
    {
         $job=Job_post :: find($id);
        $job->delete();
        $data['data']=DB::table('job_posts')->get();
        if(count($data)>0)
        {
            return view('approve_job',$data);
        }
        else
        {
            return view('approve_job');
        }
    }


    public function store($id)
    {
        $job=Job :: find($id);
        $post_job = new Job_post();
        $job_data['job_data']=DB::table('jobs')->where (['id'=>$id])->get();
        $post_job->companyName=$job->companyName;
        $post_job->jobTitle=$job->jobTitle;
        $post_job->vacancy=$job->vacancy;
        $post_job->jobType=$job->jobType;
        $post_job->educationalRequirement=$job->educationalRequirement;
        $post_job->jobLocation=$job->jobLocation;
        $post_job->jobCatagory=$job->jobCatagory;
        $post_job->experience=$job->experience;
        $post_job->salary=$job->salary;
        $post_job->description=$job->description;
        $post_job->email=$job->email;
        $post_job->userEmail=$job->userEmail;
        


        $post_job->save();
        $job->delete();
        $data['data']=DB::table('job_posts')->get();
        if(count($data)>0)
        {
            echo "Accepted! Job Is Live Now..";
            return view('approve_job',$data);
        }
        else
        {
            return view('approve_job');
        }
    }

    public function search_catagory($id)
    {
        $job['job']=DB::table('job_posts')->where('jobCatagory','like','%'.$id.'%')->get();
        if(count($job)>0)
        {
            return view ('searched_job',$job);
        }
        else
        {
            echo "oops sorry! this catagory job not available";
            return view ('searched_job');
        }
    }
    public function search_catagory_unregisterd($id)
    {
        $job['job']=DB::table('job_posts')->where('jobCatagory','like','%'.$id.'%')->get();
        if(count($job)>0)
        {
            return view ('searched_job_unregisterd',$job);
        }
        else
        {
            echo "oops sorry! this catagory job not available";
            return view ('searched_job_unregisterd');
        }
    }

    public function search_division($id)
    {
        $job['job']=DB::table('job_posts')->where('jobLocation','like','%'.$id.'%')->get();
        if(count($job)>0)
        {
            return view ('searched_job',$job);
        }
        else
        {
            echo "oops sorry! this catagory job not available";
            return view ('searched_job');
        }
    }

    public function search_division_unregisterd($id)
    {
        $job['job']=DB::table('job_posts')->where('jobLocation','like','%'.$id.'%')->get();
        if(count($job)>0)
        {
            return view ('searched_job_unregisterd',$job);
        }
        else
        {
            echo "oops sorry! this catagory job not available";
            return view ('searched_job_unregisterd');
        }
    }

    public function show()
    {
        $job['job']=DB :: table('job_posts')->get();
        return view('searched_job',$job);
    }

    public function search_type($id)
    {
        $job['job']=DB::table('job_posts')->where('jobType','like','%'.$id.'%')->get();
        if(count($job)>0)
        {
            return view ('searched_job',$job);
        }
        else
        {
            echo "oops sorry! this catagory job not available";
            return view ('searched_job');
        }
    }

    public function search_type_unregisterd($id)
    {
        $job['job']=DB::table('job_posts')->where('jobType','like','%'.$id.'%')->get();
        if(count($job)>0)
        {
            return view ('searched_job_unregisterd',$job);
        }
        else
        {
            echo "oops sorry! this catagory job not available";
            return view ('searched_job_unregisterd');
        }
    }


    public function details_job($id)
    {
        $job['job']=DB::table('job_posts')->where(['id'=>$id])->get();
        if(count($job)>0)
        {
            return view ('details_job',$job);
        }
        else
        {
            echo "Opps! Something Went wrong...!";
            return view ('candidateHomepage');
        }
    }


    public function details_job_unregisterd($id)
    {
        $job['job']=DB::table('job_posts')->where(['id'=>$id])->get();
        if(count($job)>0)
        {
            return view ('details_job',$job);
        }
        else
        {
            echo "Opps! Something Went wrong...!";
            return view ('homepage');
        }
    }
}
