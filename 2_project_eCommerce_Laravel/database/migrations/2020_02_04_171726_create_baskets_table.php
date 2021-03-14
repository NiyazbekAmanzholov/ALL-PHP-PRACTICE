<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baskets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->default(0); 
            $table->integer('product_id')->default(0);                     
            $table->string('name')->nullable();          
            $table->string('category_id')->nullable(); 
            $table->string('ip_address')->nullable();                           
            $table->string('image')->nullable();
            $table->integer('count')->default(1);            
            $table->double('price')->default(0);
            $table->double('itogprice')->default(0);                       
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baskets');
    }
}
