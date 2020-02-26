<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageControl@home');
Route::get('/adminHome', 'PageControl@adminHome');
Route::get('/adminLogin', 'PageControl@adminLogin');
Route::get('/candidateHome', 'PageControl@candidateHome');
Route::get('/candidateLogin', 'PageControl@candidateLogin');
Route::get('/candidateRegistration', 'PageControl@candidateRegistration');
Route::get('/employerHome', 'PageControl@employerHome');
Route::get('/employerLogin', 'PageControl@employerLogin');
Route::get('/employerRegistration', 'PageControl@employerRegistration');
Route::get('/us', 'PageControl@us');
Route::post('/employee_register', 'EmployerController@store');
Route::post('/employee_login', 'EmployerController@authenticate');
Route::post('/admin_login', 'AdminController@authenticate');
Route::get('/employerInfo', 'EmployerController@show');
Route::get('/employerCompany', 'CompanyController@show');
Route::get('/employee_job', 'JobPostController@index');
Route::get('/new_job_post', 'JobController@job_post');
Route::post('/job_post', 'JobController@store');
Route::get('/all_job', 'JobController@index');
Route::post('/companyInfo', 'CompanyController@store');
Route::get('/pending_job', 'JobController@index1');
Route::get('/admin_see_jobs', 'JobPostController@index1');
Route::get('/admin_see_employers', 'EmployerController@index');
Route::get('/admin_see_company', 'CompanyController@index');
Route::get('/admin_see_users', 'CandidateController@index');
Route::get('/delete/{id}', 'JobController@destroy1');
Route::get('/candidate_delete/{id}', 'CandidateController@destroy');
Route::get('/job_delete/{id}', 'JobPostController@destroy1');
Route::get('/employer_delete/{id}', 'EmployerController@destroy1');
Route::get('/jobs_delete/{id}', 'JobController@destroy');
Route::get('/jobss_delete/{id}', 'JobPostController@destroy');
Route::get('/accept/{id}', 'JobPostController@store');
Route::post('/updateEmployee', 'EmployerController@update');
Route::get('/live_job_delete/{id}', 'JobPostController@destroy2');
Route::get('/see_job_candidate', 'ApplyJobController@show1');

//Candidate Part
Route::post('/candidate_register', 'CandidateController@store');
Route::post('/candidate_login', 'CandidateController@authenticate');
Route::get('/candidateInfo', 'CandidateController@show');
Route::post('/updateCandidate', 'CandidateController@update');
Route::get('/cv', 'CvController@index');
Route::post('/createCV', 'CvController@store');
Route::get('/showCV', 'CvController@index1');
Route::get('/delete_cv/{id}', 'CvController@destroy');
Route::get('/search_job_catagory/{id}', 'JobPostController@search_catagory');
Route::get('/search_job_division/{id}', 'JobPostController@search_division');
Route::get('/search_job_type/{id}', 'JobPostController@search_type');
Route::get('/details_job/{id}', 'JobPostController@details_job');
Route::get('/apply_job/{id}', 'ApplyJobController@store');
Route::get('/see_applied_job', 'ApplyJobController@show');
Route::get('/see_all_job', 'JobPostController@show');

//Unregistered user
Route::get('/search_job_catagory_unregisterd/{id}', 'JobPostController@search_catagory_unregisterd');
Route::get('/search_job_division_unregisterd/{id}', 'JobPostController@search_division_unregisterd');
Route::get('/search_job_type_unregisterd/{id}', 'JobPostController@search_type_unregisterd');
Route::get('/details_job_unregisterd/{id}', 'JobPostController@details_job_unregisterd');
