<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWelcomeImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welcome_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('catchy_title')->nullable();
            $table->string('bold_short_Image_detail')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->unsignedInteger('categories_id')->nullable()->index('categories_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('welcome_images');
    }
}
