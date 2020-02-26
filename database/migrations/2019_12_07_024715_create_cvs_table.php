<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',30);
            $table->string('phone',20);
            $table->string('facebookLink',30);
            $table->string('aboutCareer',100);
            $table->date('DOB',30);
            $table->string('workingCompany',20);
            $table->string('workingDuration',40);
            $table->string('Institution',40);
            $table->string('background',40);
            $table->string('skill1',40);
            $table->string('skill2',40);
            $table->string('skill3',40);
            $table->string('fatherName',20);
            $table->string('city',40);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvs');
    }
}
