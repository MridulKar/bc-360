<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link');
            $table->string('course_page_heading_image');
            $table->string('course_page_subtitle');
            $table->string('course_page_title');
            $table->string('course_image')->nullable();
            $table->string('course_title');
            $table->longText('course_description');
            $table->longText('course_description_more');
            $table->string('coursecard_subject');
            $table->string('coursecard_topic');
            $table->string('coursecard_others');
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
        Schema::dropIfExists('course_details');
    }
}
