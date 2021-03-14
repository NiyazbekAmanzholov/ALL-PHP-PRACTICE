<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Product;
use App\Baskets;
use App\BasketNoneLogin;
use App\Payment;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if(auth()->user()){

        $orders = auth()->user()->baskets()->get();         

        $total = 0;
        $itogCount = 0;

        foreach ($orders as $itogprice){

        $total = $total + $itogprice->itogprice;  

        $itogCount = $itogCount + $itogprice->count;

        $customerData = Payment::latest()->where('payer_email', auth()->user()->email)->first();
        }

        }else{

        $orders = BasketNoneLogin::where('ip_address', '=', $_SERVER['REMOTE_ADDR'])->get();

        $total = 0;
        $itogCount = 0;

        foreach ($orders as $itogprice){

        $total = $total + $itogprice->itogprice;  

        $itogCount = $itogCount + $itogprice->count;
        }
        
        $customerData = Payment::latest()->where('ip_address', $_SERVER['REMOTE_ADDR'])->first();
        }



        return $this->markdown('emails.welcome', compact('orders', 'total', 'itogCount', 'customerData'));
    }
}
