<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Comment;
use App\User;

class PageController extends Controller
{

#cтраница товара
   public function one(Product $id)
   {

#выводим количество не забаненых комментарий  
  	$comments = Comment::where([
      ['product_id', $id->id],
      ['status', '1'],      
    ])->get(); 
    $comment = $comments->count();#выводим колличество комментарий

#добавляем просмотры 
    $id->update(['views' => $id->views+1,]);
    
   	return view('page', compact('comments', 'id', 'comment'));
   }



#добавляем комментарий
   public function postComment()
   {
   Comment::create([
        'name' => request('name'),
        'product_id' => request('product_id'), 
        'product_name' => request('product_name'),                    
        'description' => request('comment'),                 
    ]); 

    session()->flash('success', 'Коментарий добавлен!'); 
    return redirect()->back(); 

   }




}
