<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/admintemp', function (){
	$data=array('hooray'=>'hooray');
	return view('backendtemp',$data); 
});
Route::get('/','Amaincore@index');
Route::get('/login','Amaincore@login');
Route::get('auth/login', 'Amaincore@login');
Route::post('auth/login', 'Amaincore@authenticate');
Route::get('/logout','Amaincore@logout');
Route::get('auth/logout', 'Amaincore@logout');

// Registration routes...
Route::post('/register', 'Amaincore@register');

Route::get('/hr-home', [
    'middleware' => 'auth',
    'uses' => 'Amaincore@rusers_home'
]);
Route::get('/about','Amaincore@about_us');
Route::get('/developer_partners','Amaincore@dev_partners');
Route::get('/gallery','Amaincore@gallery');
Route::get('/contact','Amaincore@contact_us');

