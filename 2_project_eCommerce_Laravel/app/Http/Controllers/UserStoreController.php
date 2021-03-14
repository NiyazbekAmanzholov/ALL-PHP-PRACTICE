<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserStoreController extends Controller
{
    public function page()
    {	
    	$users = User::get();
    	return view('admin.users', compact('users'));
    }


    public function administrator($id)
    {
    User::where('id', $id)->update([
            'role' => '1',
        ]);

    session()->flash('success', 'Роль одобрена!'); 
    return redirect()->back();    	
    }


    public function client($id)
    {
    User::where('id', $id)->update([
            'role' => '0',
        ]);

    session()->flash('success', 'Роль одобрена!'); 
    return redirect()->back();    	
    }



    public function delete(User $id)
    {
        $id->delete();

    session()->flash('success', 'Пользователь удален!'); 
    return redirect()->back();
    }



}
