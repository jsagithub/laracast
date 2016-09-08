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

/*Route::get('about', function(){

	return view('pages/about');
}); */
Route::get('about','PagesController@about');


Route::get('cards', 'CardsController@index');

Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes','NotesController@store');


Route::get('/notes/{note}/edit', 'NotesController@edit');

Route::patch('/notes/{note}', 'NotesController@update');