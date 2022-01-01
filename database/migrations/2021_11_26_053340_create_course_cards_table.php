<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_detail_id');
            $table->string('coursecard_subject_one');
            $table->string('coursecard_topic_one');
            $table->string('coursecard_students_one');
            $table->string('coursecard_subject_two');
            $table->string('coursecard_topic_two');
            $table->string('coursecard_students_two');
            $table->string('coursecard_subject_three');
            $table->string('coursecard_topic_three');
            $table->string('coursecard_students_three');
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
        Schema::dropIfExists('course_cards');
    }
}
