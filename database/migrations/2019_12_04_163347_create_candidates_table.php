<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName',30);
            $table->string('lastName',20);
            $table->string('userName',30)->unique();
            $table->string('email',40)->unique();
            $table->date('DOB',30);
            $table->string('phone',20);
            $table->string('degree',40);
            $table->string('imagePath',40);
            $table->string('skill',40);
            $table->string('city',40);
            $table->string('password',20);
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
        Schema::dropIfExists('candidates');
    }
}
