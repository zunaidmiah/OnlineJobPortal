<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jobTitle',40);
            $table->string('companyName',40);
            $table->string('jobLocation',40);
            $table->string('employerEmail',40);
            $table->string('candidateEmail',40);
            $table->string('status',40);
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
        Schema::dropIfExists('apply_jobs');
    }
}
