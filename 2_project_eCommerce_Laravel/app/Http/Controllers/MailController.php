<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

use App\Basket;
use App\BasketNoneLogin;

class MailController extends Controller
{
	public function send()
	{
       
    	    Mail::to('kunaev993amanzholov@yandex.kz')->send(new WelcomeMail());
    if(auth()->user()){
    	    Basket::where('user_id', '=', auth()->user()->id)->delete(); 
            	    
    		#return new WelcomeMail();
    		session()->flash('success', 'Заказ отправлен!');
    		return redirect('/authBasket/' . auth()->user()->id );
    }else{
            BasketNoneLogin::where('ip_address', '=', $_SERVER['REMOTE_ADDR'])->delete(); 
            #return new WelcomeMail();
            session()->flash('success', 'Заказ отправлен!');
            return redirect('/basketNoneAuth/');        
    }

	}


	public function order()
	{

        $orders = auth()->user()->baskets()->get();         

        $total = 0;
        $itogCount = 0;

        foreach ($orders as $itogprice){

        $total = $total + $itogprice->itogprice;  

        $itogCount = $itogCount + $itogprice->count;

}
    
        return view('order', compact('orders', 'total', 'itogCount'));		

}

#NoneAuth

    public function orderNoneAuth()
    {
        $orders = BasketNoneLogin::where('ip_address', '=', $_SERVER['REMOTE_ADDR'])->get();

        $total = 0;
        $itogCount = 0;

        foreach ($orders as $itogprice){

        $total = $total + $itogprice->itogprice;  

        $itogCount = $itogCount + $itogprice->count;     
}        
        return view('orderNoneAuth', compact('orders', 'total', 'itogCount'));      
}

}
