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
        {
            Schema::create('product', function (Blueprint $table) {
                $table->increments('product_id');
                $table->string('product_name');
                $table->string('product_price');
                $table->string('product_description');
                $table->integer('category_id')->length(10)->unsigned();
                $table->foreign('category_id')->references('category_id')->on('category');
                $table->string('audio');
                $table->string('lyric');
                $table->string('product_image');
                $table->timestamps();   
    
    
                
    
                   
    
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
