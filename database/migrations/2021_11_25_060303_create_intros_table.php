<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('intros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_message');
            $table->string('welcome_message');
            $table->string('short_description');
            $table->string('bg-video')->nullable();
            $table->string('bg-image-one')->nullable();
            $table->string('bg-image-two')->nullable();
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
        Schema::dropIfExists('intros');
    }
}
