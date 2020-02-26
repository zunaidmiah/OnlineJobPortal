<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $table ='employers';
    protected $fillable = ['firstName','lastName','userName','email','imagePath','DOB','phone','companyName','password'];
}
