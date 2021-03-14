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
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('category_id')->nullable();
            $table->integer('price')->default(0);  
            $table->string('image')->nullable(); 
            $table->string('image2')->nullable();             
            $table->text('description')->nullable();
            $table->string('field')->nullable();
            $table->string('views')->default(0);  

            $table->timestamps();

            $table->index('category_id');            
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


