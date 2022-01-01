<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading-image')->nullable();
            $table->string('slider_img')->nullable();
            $table->string('slider_title');
            $table->string('slider_description');
            $table->string('subtitle');
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('course_title');
            $table->string('description');
            $table->string('coursebox_subject');
            $table->string('coursebox_topic');
            $table->string('coursebox_students');
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
        Schema::dropIfExists('course_sliders');
    }
}
