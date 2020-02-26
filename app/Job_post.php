<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_post extends Model
{
     protected $table ='Job_posts';
    protected $fillable = ['companyName','jobTitle','vacancy','jobType','educationalRequirement','jobLocation','jobCatagory','experience','salary','description','email','userEmail'];
}
