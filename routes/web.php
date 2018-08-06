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


Route::get('/middleware/{age}', function($age){
	return view('age', array('age'=>$age));
})->middleware('age');


Route::get('/pages/contact', 'PagesController@contactPage');

Route::get('pages/middleware/{age}', 'PagesController@middlewareAgePage');

Route::get('/pages/shoutout/{text}','PagesController@shoutoutPage')->name('shoutout');

Route::get('/crushes','CrushesController@index')->name('crushes.index');

Route::get( '/crushes/create', 'CrushesController@create')->name( 'crushes.create');

Route::post('crushes/store', 'CrushesController@store')->name('crushes.store');

Route::get( '/crushes/{id}/edit', 'CrushesController@edit' )->name( 'crushes.id.edit' );

Route::post('/crushes/{id}/update', 'CrushesController@update')->name('crushes.id.update');

Route::get('/crushes/{id}/destroy', 'CrushesController@destroy')->name('crushes.id.destroy');

Route::get('/crushes',          'CrushesController@index')->name('crushes.index');