<?php

namespace App\Http\Controllers;
use DB;
use App\Job_post;
use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=DB::table('job_posts')->get();
        if(count($data)>0)
        {
            return view('admin_see_company',$data);
        }
        else
        {
            return view('admin_see_company');
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
        $companyName=$request->input('company_name');
        $ownerName=$request->input('owner_name');
        $location=$request->input('area');
        $phone=$request->input('phone');
        $description=$request->input('message');
        $email=$request->input('email');
        $userEmail=session()->get('data');
        $value=array('CompanyName'=>$companyName,'CompanyOwner'=>$ownerName,'employee_email'=>$userEmail,'Location'=>$location,'Phone'=>$phone,'Email'=>$email,'Description'=>$description);
        DB :: table('companies')->insert($value);
        return view('employerCompany');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('employerCompany');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
