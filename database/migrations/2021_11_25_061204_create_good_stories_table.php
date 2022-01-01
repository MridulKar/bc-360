<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('good_stories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('success_rate');
            $table->integer('happy_students');
            $table->integer('project_done');
            $table->integer('awards');
            $table->string('video_image')->nullable();
            $table->string('video_link');
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
        Schema::dropIfExists('good_stories');
    }
}
