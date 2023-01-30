<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


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
            $table->id();
            // auther id
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            // product name
            $table->string('name');
            // product description
            $table->string('description');
            // product price
            $table->string('price');
            // product image
            $table->string('image');
            // product category
            $table->string('category');
            // product unique serial id
            $table->string('serial_id')->unique();
            // product status
            $table->string('status')->default('available');
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
        Schema::dropIfExists('products');
    }
}
