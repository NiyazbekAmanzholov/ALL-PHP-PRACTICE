<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class messageController extends Controller
{
    public function send()
    {

    	if(auth()->user()){

    	Message::create([
    		'name' => auth()->user()->name,
    		'email' => auth()->user()->email,
    		'description' => request('description')
    	]);

    	}else{

    	Message::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'description' => request('description')
    	]);
    	}

		session()->flash('success', 'Сообщение отправленно!'); 
    	return redirect()->back();
    }
}
