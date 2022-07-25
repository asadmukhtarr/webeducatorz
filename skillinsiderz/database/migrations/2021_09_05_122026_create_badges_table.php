<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBadgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('badges', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id')->unsigned()->nullable();
            $table->string('description')->nullable();
            $table->text('code')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->integer('trainer_id')->unsigned()->nullable();
            $table->string('thumbnail')->nullable();
            $table->integer('fee');
            $table->integer('status');
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
        Schema::dropIfExists('badges');
    }
}
