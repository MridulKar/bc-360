<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id');
            
            $table->string('heading_image')->nullable();
            $table->string('image')->nullable();
            $table->string('subtitle');
            $table->string('title');
            $table->string('description');
            $table->string('bdetail_image')->nullable();
            $table->string('bdetail_subtitle',);
            $table->string('bdetail_title');
            $table->string('bdetail_blog_title');
            $table->string('bdetail_location');
            $table->string('bdetail_description');
            $table->string('bdetail_time');
            $table->string('bdetail_phone_number');
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
        Schema::dropIfExists('blogs');
    }
}
