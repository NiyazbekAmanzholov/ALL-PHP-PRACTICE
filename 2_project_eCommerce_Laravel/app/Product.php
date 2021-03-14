<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $guarded = [];//ввод всех полей в бд


	public function cat()
	{
		return $this->belongsTo(Cat::class);
	}


	public function comments()
	{
		return $this->hasMany(Comment::class);
	}	

#выводим количество товаров в корзине в шапку
    public static function productCount()
    {   
        #выводим данные если зарегистрированны
        if(auth()->user()){
        $products = auth()->user()->baskets()->get();     
        }else{
        #выводим данные если не зарегистрированны        
        $products = BasketNoneLogin::where('ip_address', $_SERVER['REMOTE_ADDR'])->get(); 
        }

        $itogCount = 0;

        foreach ($products as $product){

        $itogCount = $itogCount + $product->count;
        }

        return $itogCount;
        
    }

#выводим общую цену товаров из корзины в шапку
    public static function productTotalPriceCount()
    {
        if(auth()->user()){        
        $products = auth()->user()->baskets()->get();     
        }else{
        $products = BasketNoneLogin::where('ip_address', $_SERVER['REMOTE_ADDR'])->get(); 
        }

        $totalPrice = 0;

        foreach ($products as $product){

        $totalPrice = $totalPrice + $product->itogprice;
        }

        return $totalPrice;
        }
    

}