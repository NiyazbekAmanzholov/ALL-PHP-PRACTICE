<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function comment()
    {	
    	$comments = Comment::paginate(4);
    	return view('admin.comment', compact('comments'));
    }


    public function ban($id)
    {
    	Comment::where('id', $id)->update([
    		'status' => '0',
    	]);

    session()->flash('success', 'Отзыв забанен!'); 
    return redirect()->back();
    }


    public function active($id)
    {
        Comment::where('id', $id)->update([
            'status' => '1',
        ]);

    session()->flash('success', 'Отзыв одобрен!'); 
    return redirect()->back();
    }


    public function delete(Comment $id)
    {
        $id->delete();

    session()->flash('success', 'Отзыв удален!'); 
    return redirect()->back();
    }

}
