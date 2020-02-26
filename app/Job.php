<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table ='jobs';
    protected $fillable = ['CompanyName','jobTitle','vacancy','jobType','educationalRequirement','jobLocation','jobCatagory','experience','salary','description','email','userEmail'];
}
