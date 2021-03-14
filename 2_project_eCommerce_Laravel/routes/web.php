<?php

Route::get('/', 'IndexController@index');

Route::get('/page/{id}', 'PageController@one');
Route::get('/postComment/', 'PageController@postComment');

#желания
Route::get('/wish/{id}', 'WishController@add');
Route::get('/wish/my/{id}', 'WishController@wishes')->name('wishes');
Route::get('/wish/delete/{id}', 'WishController@delete');
Route::get('/wish/delete/all/{id}', 'WishController@deleteAll');
Route::get('/disAuth', 'WishController@flash');

#mail
Route::get('/order/', 'MailController@order');
Route::get('/email/', 'MailController@send');
Route::get('/send/NoneAuth/', 'MailController@dataNoneAuth');
Route::get('/order/NoneAuth/', 'MailController@orderNoneAuth');

#payment
Route::get('/payment', 'PaymentController@index');
Route::post('/charge', 'PaymentController@charge');
Route::post('/charge/noPay', 'PaymentController@chargeNoPay');

#корзина для авторизированных пользователей


Route::get('/authBasket/{id}', 'BasketController@basketPlace')->name('basket');
Route::post('/indexAdd/{id}', 'BasketController@indexAdd');
Route::post('/basket/add/{id}', 'BasketController@add');
Route::post('/basket/minus/{id}', 'BasketController@minus');
Route::post('/basket/update/{id}', 'BasketController@update');
Route::get('/deleteBrand/{id}', 'BasketController@deleteBrand');
Route::get('/basket/destroy/', 'BasketController@destroy');

#корзина для не авторизированных пользователей
Route::get('/basketNoneAuth/', 'BasketNoneAuthController@basketPlace')->name('basketNoneAuth');
Route::get('/addToBasket/{id}', 'BasketNoneAuthController@indexAdd');
Route::post('/basket/add2/{id}', 'BasketNoneAuthController@add');
Route::post('/basket/minus2/{id}', 'BasketNoneAuthController@minus');
Route::post('/basket/update2/{id}', 'BasketNoneAuthController@update');
Route::get('/deleteBrand2/{id}', 'BasketNoneAuthController@deleteBrand');
Route::get('/basket/destroy2/', 'BasketNoneAuthController@destroy');

#profile
Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::post('/profile/edit/{id}', 'ProfileController@edit');
Route::post('/profile/edit/password/{id}', 'ProfileController@password');

Auth::routes();

#только для админа
Route::middleware(['auth', 'admin'])->group(function() {

Route::get('/admin', 'HomeController@admin')->name('admin');

Route::get('/admin/product/add/page', 'HomeController@productAdd')->name('productAdd');

Route::get('/admin/payments', 'HomeController@payments')->name('payments');

Route::get('/admin/payments/delete/{id}', 'HomeController@delete');

Route::get('/admin/category/destroy/{id}', 'HomeController@categoryDestroy')->name('categoryDestroy');

Route::post('/admin/product/createProduct', 'StoreController@createProduct')->name('createProduct');

Route::post('/admin/category/create', 'StoreController@create')->name('create');

Route::get('/admin/product/destroy/{id}', 'StoreController@destroy')->name('destroy');

Route::get('/admin/product/edit/page/{id}', 'StoreController@editPage')->name('editPage');

Route::post('/admin/product/edit/{id}', 'StoreController@edit')->name('edit');

Route::get('/admin/category/page', 'HomeController@categoryPage')->name('categoryPage');

Route::get('/admin/category/edit/page/{id}', 'StoreController@editCategoryPage')->name('editCategoryPage');

Route::post('/admin/category/edit/{id}', 'StoreController@editCategory')->name('editCategory');

Route::get('/admin/view/upload/{id}', 'StoreController@viewUpload');

#Отзывы
Route::get('/admin/comments', 'CommentsController@comment')->name('comment');

Route::get('/admin/comment/ban/{id}', 'CommentsController@ban');

Route::get('/admin/comment/active/{id}', 'CommentsController@active');

Route::get('/admin/comment/delete/{id}', 'CommentsController@delete');


#Зарегистрированые пользователи
Route::get('/admin/users', 'UserStoreController@page')->name('users');
Route::get('/admin/administrator/{id}', 'UserStoreController@administrator');
Route::get('/admin/client/{id}', 'UserStoreController@client');
Route::get('/admin/delete/{id}', 'UserStoreController@delete');

});

