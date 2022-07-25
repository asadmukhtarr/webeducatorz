<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('cnic')->nullable();
            $table->string('email')->nullable();
            $table->string('fname')->nullable();
            $table->string('gender')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('guardian_contact')->nullable();
            $table->date('dob')->nullable();
            $table->string('religious')->nullable();
            $table->string('address')->nullable();
            $table->string('city_id')->nullable();
            $table->string('state_id')->nullable();
            $table->string('country_id')->nullable();
            $table->text('employment_information')->nullable();
            $table->text('reference')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('students');
    }
}
