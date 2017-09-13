<?php

Auth::routes();



route::get('/threads' , function() {
	return view('threads.index');
});



route::get('/threads/create' , function() {
	return view('threads.create');
});

Route::get('/', 'GreetingController@show');

route::get('/greeting/{id}' , function($id) {
	$language = ["Bonjour","Ciao","Hallo","Hola","Salam"];
	return view('messages.greeting',["kalli" => $language[$id]]);
})->where(["id" => "[0-4]"]);
