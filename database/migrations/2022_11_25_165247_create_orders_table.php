<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->decimal('total', 10, 2)->default(0);
            $table->enum('status', ['ordered', 'paid', 'recieved', 'cancel', 'incart'])->default('incart');
            $table->string('payment_reference')->unique()->nullable();
            $table->string('street_address')->nullable();
            $table->string('city_town')->nullable();
            $table->string('locality')->nullable();
            $table->string('region')->nullable();
            $table->string('delivery_address')->nullable();
            $table->string('gps_address')->nullable();
            $table->float('rating')->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
