<?php

Auth::routes();
Route::get("/", function(){
	return redirect("/threads");
});

Route::get("/threads", "ThreadsController@index");
Route::post("/threads", "ThreadsController@store");
Route::get("/threads/create", "ThreadsController@create")->middleware("auth");
Route::get("/threads/{id}", "ThreadsController@show");
Route::get('/profile/{id}', 'ProfileController@index');
route::get('/comments', 'CommentController@index');
route::get('/comments/3', 'CommentController@show')->middleware('auth');
route::post('/comments', 'CommentController@store')->middleware('auth');










