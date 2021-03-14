<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Comment;
use App\Cat;

class IndexController extends Controller
{
    public function index()
    {
      $productsQuery = Product::query();

         if(request('price_from')) {
        $productsQuery->where('price', '>=', request('price_from'));            
        }

        if(request('price_to')) {
        $productsQuery->where('price', '<=', request('price_to'));            
        }

        if(request('list')) {#вид распродажи           
        $productsQuery->where('field', '=', request('list'));
        }

        if(request('category')) {#категории
        $productsQuery->where('category_id', '=', request('category'));            
        }

        if(request('brand')) {
        $productsQuery->where('title', 'like', '%' .request('brand'). '%');            
        }         

        if(request('title')) {
        $productsQuery->where('title', '=', request('title'))
        ->orWhere('price', '=', request('title'))
        ->orWhere('description', 'like', '%' .request('title'). '%');                  
        }     

        #
        if(request('PriceSort') == 'По убыванию') {         
        $productsQuery->orderBy('price', 'desc');
        }
        elseif(request('PriceSort') == 'По возростанию') {         
        $productsQuery->orderBy('price', 'asc');
        }


        if(request('DateSort') == "По убыванию") {          
        $productsQuery->orderBy('created_at', 'desc');
        }
        elseif(request('DateSort') == 'По возростанию') {         
        $productsQuery->orderBy('created_at', 'asc');
        }


        $products = $productsQuery->paginate(6);

        if ($products->count() == 0) {
        session()->flash('have', 'Такого товара нет!'); 
        }

        $categories = Cat::get();        


        return view('index', compact('products', 'categories'));
    }

}


