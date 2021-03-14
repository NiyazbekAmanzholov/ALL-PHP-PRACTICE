<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasketNoneLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket_none_logins', function (Blueprint $table) {
            $table->increments('id');    
            $table->string('name')->nullable();
            $table->string('ip_address')->nullable();            
            $table->string('category_id')->nullable();             
            $table->string('image')->nullable();
            $table->integer('count')->default(1);            
            $table->double('price')->default(0);
            $table->double('itogprice')->default(0);                       
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
        Schema::dropIfExists('basket_none_logins');
    }
}
