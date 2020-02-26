<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('companyName',30);
            $table->string('jobTitle',30);
            $table->string('vacancy',5);
            $table->string('jobType',10);
            $table->String('educationalRequirement',10);
            $table->string('jobLocation',15);
            $table->string('jobCatagory',50);
            $table->string('experience',10);
            $table->string('salary',5);
            $table->string('description',150);
            $table->string('email',30);
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
        Schema::dropIfExists('jobs');
    }
}
