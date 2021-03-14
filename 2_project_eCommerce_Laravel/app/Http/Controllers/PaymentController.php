<?php
 #https://www.youtube.com/watch?v=9CJD4EMvYqE
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Payment;
 
class PaymentController extends Controller
{
    public function index()
    {
        return view('payment');
    }
 
    public function charge(Request $request)
    {
        if ($request->input('stripeToken')) {
  
            $gateway = Omnipay::create('Stripe');
            $gateway->setApiKey(env('STRIPE_SECRET_KEY'));
          
            $token = $request->input('stripeToken');
          
            $response = $gateway->purchase([
                'amount' => $request->input('amount'),                                
                'currency' => env('STRIPE_CURRENCY'),
                'token' => $token,
            ])->send();
          
            if ($response->isSuccessful()) {
                // payment was successful: insert transaction data into the database
                $arr_payment_data = $response->getData();
                 
                $isPaymentExist = Payment::where('payment_id', $arr_payment_data['id'])->first();
          
                if(!$isPaymentExist)
                {
                    $payment = new Payment;
                    $payment->payment_id = $arr_payment_data['id'];
                    $payment->payer_email = $request->input('email');
                    $payment->number = $request->input('number');
                    $payment->ip_address = $request->input('ip_address');
                    $payment->address = $request->input('address');                                       
                    $payment->amount = $arr_payment_data['amount']/100;
                    $payment->currency = env('STRIPE_CURRENCY');
                    $payment->payment_status = $arr_payment_data['status'];
                    $payment->save();
                }
 
#return "Payment is successful. Your payment id is: ". $arr_payment_data['id'];
                return redirect('/email/'); 

            } else {
                // payment failed: display message to customer
                return $response->getMessage();
            }
        }
    }



    public function chargeNoPay()
    {
        Payment::create([
        'payer_email' => request('email'),
        'number' => request('number'),            
        'ip_address' => request('ip_address'),
        'address' => request('address'),        
        'amount' => request('amount'),
        'currency' => env('STRIPE_CURRENCY'),     
        'payment_status' => 'не оплоченно',
    ]);


    return redirect('/email/'); 

    }



}