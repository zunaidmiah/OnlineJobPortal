<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table ='candidates';
    protected $fillable = ['firstName','lastName','userName','email','DOB','phone','degree','imagePath','skill','city','password'];
}
