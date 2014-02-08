<?php

Route::get('/', ['as' => 'index', 'do' =>  function() {return View::make('index')->with('products', Product::all());}]);
Route::get('login', function() {return View::make('admin.login');});
Route::post('login', function() {
	$userdata = ['username' => Input::get('username'), 'password' => Input::get('password')];
	if ( Auth::attempt($userdata) )	{ return View::make('admin.index')->with('categories', Category::all())->with('products', Product::all())->with('shops', Shop::all())->with('user', User::all());}
	else { return Redirect::to('login')->with('login_errors', true)->withInput(); }
});

// Kembalikan semua route dalam group ke halaman login sebelum akun terverifikasi
Route::group(array('before' => 'auth'), function() {
	Route::get('administrator', ['as'=>'admin.index', 'uses'=>'AdminController@index']);
	Route::resource('users', 'UsersController');
	Route::resource('shops', 'ShopsController');
	Route::resource('products', 'ProductsController');
	Route::resource('categories', 'CategoriesController');
	Route::get('logout', ['as'=>'logout', 'do' => function() { Auth::logout(); return Redirect::to('login');}]);
});