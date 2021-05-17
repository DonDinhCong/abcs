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
            $table->id();
            $table->string('product_code');
            $table->unsignedBigInteger('brand_id');
            $table->string('product_title');
            $table->string('product_avatar');
            $table->string('product_gallery');
            $table->string('product_gender');
            $table->string('product_origin');
            $table->string('product_size');
            $table->string('product_color');
            $table->string('product_case');
            $table->string('product_glass');
            $table->string('product_content');
            $table->string('product_des');
            $table->timestamps();

            $table->foreign('brand_id')->references('id')->on('brands')->onUpdate('cascade')
            ->onDelete('cascade');
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
