<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class applyJob extends Model
{
    protected $table ='apply_jobs';
    protected $fillable = ['jobTitle','companyName','jobLocation','employerEmail','candidateEmail','status'];
}
