<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToWelcomeImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('welcome_images', function (Blueprint $table) {
            $table->foreign(['categories_id'], 'welcome_images_ibfk_1')->references(['id'])->on('categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('welcome_images', function (Blueprint $table) {
            $table->dropForeign('welcome_images_ibfk_1');
        });
    }
}
