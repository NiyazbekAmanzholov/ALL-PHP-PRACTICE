<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Product;
use App\Cat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    #выводим все данные сайта
    public function admin()
    {   
        $products = Product::paginate(4);       
        return view('admin.admin', compact('products'));
    }

#Cтраница заказов
    public function payments()
    {   
        $payments = Payment::paginate(4);
        return view('admin.payments', compact('payments'));
    }


#Выводим категории для добавления
    public function productAdd()
    {   
        $categories = Cat::get();
        return view('admin.addProduct', compact('categories'));
    }


#Cтраница добавления товара
    public function categoryPage()
    {  
        $categories = Cat::paginate(4);      
        return view('admin.category', compact('categories'));
    }


#Удаляем категорию и ее твары
    public function categoryDestroy(Cat $id)
    {
        Product::where('category_id', '=', $id->id)->delete();

        $id->delete();        

        session()->flash('success', 'Категория удалена и товары принадлежащие этой категории!');         

        return redirect()->back(); 
    }

#Удаляем заказ на странице payments
    public function delete(Payment $id)
    {
        $id->delete();

        session()->flash('success', 'Заказ удален!');         

        return redirect()->back();         
    }

}
