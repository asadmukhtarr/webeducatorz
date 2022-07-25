<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('code')->nullable();
            $table->string('description')->nullable();
            $table->string('duration')->nullable();
            $table->string('noc')->nullable();
            $table->integer('schedual')->nullable();
            $table->integer('regular_fee')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('fee')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('video')->nullable();
            $table->integer('category_id')->unsigned();
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
        Schema::dropIfExists('courses');
    }
}
