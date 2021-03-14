<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\BasketNoneLogin;

class BasketNoneAuthController extends Controller
{
#выводим товары в корзине и общую цену и количество с прибавлением их друг на друга автор пользователя
    public function basketPlace()
    {
    
        $orders = BasketNoneLogin::where('ip_address', $_SERVER['REMOTE_ADDR'])->get();     

        $totalPrice = 0;
        $itogCount = 0;

        foreach ($orders as $itogprice){

        $totalPrice = $totalPrice + $itogprice->itogprice;  

        $itogCount = $itogCount + $itogprice->count;

        }
        return view('basket', compact('orders', 'totalPrice', 'itogCount'));
    }

#Добавляем товар с главной страницы
    public function indexAdd(Product $id)
    {

	$basket = BasketNoneLogin::where([
	    ['name', '=', $id->title],
	    ['ip_address', '=', $_SERVER['REMOTE_ADDR']],
        ['category_id', '=', $id->category_id],
        ['price', '=', $id->price] 
    ])->first();

    if($basket){#если у авторизированного пользователя товар есть просто редиректим
    session()->flash('success', 'Вы уже добавляли этот товар!');         
    return redirect()->back();  

    }elseif(!$basket){#ecли нету добавляем один товар

   BasketNoneLogin::create([
        'name' => $id->title,
        'image' => $id->image,             
        'price' => $id->price,            
        'itogprice' => $id->price,       
        'category_id' => $id->category_id,        
        'ip_address' => $_SERVER['REMOTE_ADDR'],                           
    ]); 

    session()->flash('success', 'Товар добавлен в корзину!'); 
    return redirect()->back(); 
}
    }


#Прибовляем количество товаров и цену для получения общей цены в корзине одного бренда
    public function add(BasketNoneLogin $id)
    {
        $id->update(array_merge(
            ['count' => $id->count+1,
            'itogprice' => $id->itogprice+$id->price,
        ]));

    return redirect()->back(); 

    }  



#если в корзине больше одного продукта отнимаем количество вместе с ценой, если меньше удоляем все данные этого товара
    public function minus(BasketNoneLogin $id)
    {
        if($id->count > 1)
    {
        $id->update(array_merge(
            ['count' => $id->count-1,
            'itogprice' => $id->itogprice - $id->price,
        ]));

        return redirect('/basket/');  

    }else
    {
        $id->delete();

        session()->flash('success', 'Товар удален!'); 

    return redirect()->back(); 
        }
    }

#Удаляем товар
    public function deleteBrand(BasketNoneLogin $id)
    {
        $id->delete();

        session()->flash('success', 'Товар удален!'); 

    return redirect()->back();       
    }



#обновляем количество и цену товаров до прежнего 
    public function update(BasketNoneLogin $id)
    {
        $id->update(array_merge(
            ['count' => $id->count-($id->count-1),
            'itogprice' => $id->price,
        ]));
        
        session()->flash('success', 'Количество товаров обновленно!'); 

    return redirect()->back();          
    }

#удаляем все товары
    public function destroy()
    {
        BasketNoneLogin::where('ip_address', '=', $_SERVER['REMOTE_ADDR'])->delete();

        session()->flash('success', 'Товар удален!'); 

    return redirect()->back();  
    }



}
