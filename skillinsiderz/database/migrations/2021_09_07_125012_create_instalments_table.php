<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstalmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instalments', function (Blueprint $table) {
            $table->id();
            $table->integer('fee_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('amount')->nullable();
            $table->integer('instalment_no')->nullable();
            $table->string('last_day')->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('badge_id')->nullable();
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
        Schema::dropIfExists('instalments');
    }
}
