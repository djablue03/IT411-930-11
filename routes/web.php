<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);*/

Route::get('/', function(){
	return view ('welcome');
})->name('were');
    


Route::get('/home', function(){
	return view ('home');
});


Route::get('/foo', function(){
	return view('foo');
})->name('foo');

Route::get('/bar', function(){
	return view('bar');
})->name('bar');


Route::get('/shoutout/{text}', function($text){
	$colors = array("red" => "means passion",
					"green" => "color of nature",
					"blue" => "it is the color of the sky",
					"grey"=> "authentic",
					"white" => "pureness");
	return view('shoutout', array('text' => $text, 'colors' => $colors));
})->name('shoutout');


Route::get('/basic-arithmetic/{basica}/{number1}/{number2}', function ($basica,$number1,$number2) {



    return view('basic-arithmetic',array('basica' => $basica, 'number1' => $number1, 'number2' => $number2));
})->name('basic-arithmetic');