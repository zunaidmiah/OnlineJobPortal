<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table ='employers';
    protected $fillable = ['CompanyName','CompanyOwner','employee_email','Location','Phone','Email','Description'];
}
