<?php
use Illuminate\Http\Request;
use App\Task;

Auth::routes();
Route::get("/", function(){
	return redirect('/threads');
});





Route::get("/threads", "ThreadsController@index");
Route::post("/threads", "ThreadsController@store");
Route::get("/threads/create", "ThreadsController@create");
Route::get("/threads/{id}", "ThreadsController@show");
Route::get('/profile/{id}', 'ProfileController@index');








