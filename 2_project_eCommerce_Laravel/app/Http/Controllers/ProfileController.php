<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
	#Страница профиля
    public function profile()
    {
    	return view('profile');
    }

#редактируем профиль
    public function edit($id)
    {
    $image = User::where('id', $id)->first();

#если грузим с фото
if(!is_null(request('image'))){
    Storage::delete($image->image);#Удаляем картинку из дериктории
    $filename = request('image')->store('uploads');#грузим новую 
    
	User::where('id', $id)->update([
		'name' => request('name'),
		'email' => request('email'),
		'number' => request('number'),
		'image' => $filename,      		
	]);       
}

#если грузим без
	User::where('id', $id)->update([
		'name' => request('name'),
		'email' => request('email'),
		'number' => request('number'),   		
	]);

    session()->flash('success', 'Профиль успешно обновлен!'); 
    return redirect()->back();  
    }

#меняем пароль если соответствует текущему
    public function password($id)
    {
    $user = User::where('id', $id)->first();    	
	
    if(!password_verify(request('current'), $user->password))
    {	
		session()->flash('success', 'Неверно указан текущий пароль!');       	
    	return redirect()->back();

    }elseif(request('password') != request('password_confirmation'))
    {
		session()->flash('success', 'Пароли не соответствуют!');       	
    	return redirect()->back();
    }elseif(strlen(request('password')) < 7)
    {
		session()->flash('success', 'Пароль должен содержать не меньше 7 символа!');
    	return redirect()->back();
	}else
	{
	$password = password_hash(request('password'), PASSWORD_DEFAULT);

	auth()->user()->update(
	    ['password' => $password]
	);

	session()->flash('success', 'Пароль обнавлен!');      
    	return redirect()->back();  	            
	}

}

}
