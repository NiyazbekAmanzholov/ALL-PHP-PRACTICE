<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use App\Portfolio;

class adminController extends Controller
{
    public function index()
    {	
    	$message = Message::get();
    	return view('admin.index', compact('message'));
    }

    public function page()
    {
    	$portfolio = Portfolio::get();
    	return view('admin.portfolioPage', compact('portfolio'));
    }

    public function add()
    {
    	return view('admin.addPortfolio');
    }

    public function create()
    {
        $image = request('image');#берем фото
        $filename = $image->store('uploads');#грузим в эту папку

    	Portfolio::create([
    		'title' => request('title'),
    		'mini_desc' => request('mini_desc'),
    		'description' => request('description'),
    		'link' => request('link'),    		
    		'image' => $filename,
    	]);
    session()->flash('success', 'Сайт добавлен!');
    return redirect()->back();
    }

    public function editPage($id)
    {
        $portfolio = Portfolio::where('id', $id)->first();
        return view('admin.edit', compact('portfolio'));
    }

    public function update($id)
    {
        $image = Portfolio::where('id', $id)->first();
        Storage::delete($image->image);#Удаляем картинку из дериктории        
        $filename = request('image')->store('uploads');#грузим новую

        Portfolio::where('id', $id)->update([
            'title' => request('title'),
            'mini_desc' => request('mini_desc'),
            'description' => request('description'),
            'link' => request('link'),
            'image' => $filename,            
        ]);

        session()->flash('success', 'Сайт обнавлен!'); 

        return redirect()->back();         
    }
}
