<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->float('price', 10, 0);
            $table->string('status')->default('1');
            $table->json('tags')->nullable();
            $table->string('estimated_delivery_time')->nullable();
            $table->string('primary_image')->nullable();
            $table->string('image_1')->nullable();
            $table->string('video_description')->nullable();
            $table->string('comments')->nullable();
            $table->timestamps();
            $table->string('supplier_name')->nullable();
            $table->integer('available_quantity')->nullable();
            $table->json('colors')->nullable();
            $table->string('supplier_phone')->nullable();
            $table->string('image_2')->nullable();
            $table->unsignedInteger('categories_id')->nullable()->index('products_relation_1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
