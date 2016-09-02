<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/*
Route::get('/', function () {
	
	$people=['Ze','Maria','Laurinda'];

    return view('welcome', compact('people'));
});
*/
Route::get('/','PagesController@home');

Route::get('about', function(){

	return view('pages/about');
});