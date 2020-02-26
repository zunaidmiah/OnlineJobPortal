<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
   protected $table ='cvs';
    protected $fillable = ['name','phone','facebookLink','aboutCareer','DOB','workingCompany','workingDuration','Institution','background','skill1','skill2','skill3','fatherName','city','email'];
}
