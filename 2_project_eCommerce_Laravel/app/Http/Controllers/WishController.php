<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Wish;

class WishController extends Controller
{
    public function add(Product $id)
    {

    $basket = auth()->user()->wishes()->where([
        ['name', '=', $id->title],
        ['ip_address', '=', $_SERVER['REMOTE_ADDR']],
        ['category_id', '=', $id->category_id],
        ['price', '=', $id->price]                
        ])->first();#ищем одинаковый товар, авторизированного пользователя    

    if($basket){#если у авторизированного пользователя товар есть c такими данными, то не добавляем товар и  редиректим

    session()->flash('success', 'Вы уже добавляли этот товар!'); 
    return redirect()->back();  

    }elseif(!$basket){#ecли нету добавляем только один товар

   auth()->user()->wishes()->create([
        'product_id' => $id->id,
        'name' => $id->title,
        'image' => $id->image,        
        'price' => $id->price,            
        'category_id' => $id->category_id,
        'ip_address' => $_SERVER['REMOTE_ADDR'],                            
    ]); 
    session()->flash('success', 'Товар добавлен в ваши желания!'); 
    return redirect()->back(); 
}    	
    }


    public function wishes($id)
    {
        $wishes = auth()->user()->wishes()->get();

        return view('wishes', compact('wishes'));
    }


    public function delete(Wish $id)
    {
        $id->delete();

        session()->flash('success', 'Товар удален!');      

        return redirect()->back();         
    }


    public function deleteAll($id)
    {
        Wish::where('user_id', '=', $id)->delete();    

        session()->flash('success', 'Желания удалены!');             

        return redirect()->back();           
    }


    public function flash()
    {
        session()->flash('success', 'Для того чтобы добавить в желания, пожалуйста авторизируйтесь!');             

        return redirect()->back();         
    }


}
