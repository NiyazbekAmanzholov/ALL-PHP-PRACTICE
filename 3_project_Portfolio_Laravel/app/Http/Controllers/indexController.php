<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class indexController extends Controller
{
    public function index()
    {
    	$portfolio = Portfolio::get();
    	return view('index', compact('portfolio'));
    }
}
