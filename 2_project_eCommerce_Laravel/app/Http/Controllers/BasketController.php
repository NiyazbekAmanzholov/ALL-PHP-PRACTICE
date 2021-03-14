<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Basket;

class BasketController extends Controller
{

    #выводим товары в корзине и общую цену и количество с прибавлением их друг на друга автор пользователя
    public function basketPlace($id)
    {
        $orders = auth()->user()->baskets()->get();  

        $totalPrice = 0;
        $itogCount = 0;

        foreach ($orders as $itogprice){

        $totalPrice = $totalPrice + $itogprice->itogprice;  

        $itogCount = $itogCount + $itogprice->count;

        }

        return view('authBasket', compact('orders', 'totalPrice', 'itogCount'));
    }
    

    public function indexAdd(Product $id)
    {
    $basket = auth()->user()->baskets()->where([
        ['name', '=', $id->title],
        ['ip_address', '=', $_SERVER['REMOTE_ADDR']],
        ['category_id', '=', $id->category_id],
        ['price', '=', $id->price]                
        ])->first();#ищем одинаковый товар, авторизированного пользователя    

    if($basket){#если у авторизированного пользователя товар есть c такими данными, то не добавляем товар и  редиректим

    session()->flash('success', 'Вы уже добавляли этот товар!'); 
    return redirect()->back();  

    }elseif(!$basket){#ecли нету добавляем только один товар

   auth()->user()->baskets()->create([
        'name' => $id->title,
        'image' => $id->image,             
        'price' => $id->price,            
        'itogprice' => $id->price,
        'category_id' => $id->category_id,
        'product_id' => $id->id,        
        'ip_address' => $_SERVER['REMOTE_ADDR'],                          
    ]); 

    session()->flash('success', 'Товар добавлен в корзину!'); 
    return redirect()->back(); 
}
    }


    #Прибовляем количество товаров и цену для получения общей цены в корзине одного бренда
    public function add(Basket $id)
    {
        $id->update(array_merge(
            ['count' => $id->count+1,
            'itogprice' => $id->itogprice+$id->price,
        ]));

return redirect('/authBasket/' . auth()->user()->id );

    }  



    #если в корзине больше одного продукта отнимаем количество вместе с ценой, если меньше удоляем все данные этого товара
    public function minus(Basket $id)
    {
        if($id->count > 1)
    {
        $id->update(array_merge(
            ['count' => $id->count-1,
            'itogprice' => $id->itogprice - $id->price,
        ]));

return redirect('/authBasket/' . auth()->user()->id );

    }else
    {
        $id->delete();

        session()->flash('emptyCart', 'Товар удален!'); 

return redirect('/authBasket/' . auth()->user()->id );
        }
    }


    public function deleteBrand(Basket $id)
    {
        $id->delete();

        session()->flash('success', 'Товар удален!'); 

return redirect('/authBasket/' . auth()->user()->id );        
    }



    #обновляем количество и цену товаров до прежнего 
    public function update(Basket $id)
    {
        $id->update(array_merge(
            ['count' => $id->count-($id->count-1),
            'itogprice' => $id->price,
        ]));
        
        session()->flash('success', 'Количество товаров обновленно!'); 

        return redirect('/authBasket/' . auth()->user()->id );          
    }


    public function destroy(/*$id*/)
    {
        #Basket::where('user_id', '=', $id)->delete();
        auth()->user()->baskets()->delete();                  

        session()->flash('success', 'Товар удален!'); 

        return redirect('/authBasket/' . auth()->user()->id );  
    }



}
