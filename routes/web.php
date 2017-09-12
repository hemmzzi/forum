<?php

Auth::routes();



route::get('/threads' , function() {
	return view('threads.index');
});



route::get('/threads/create' , function() {
	return view('threads.create');
});

route::get('/' , function() {
	$name = "Hermann";
	return view('messages.hello', compact("name"));
});

route::get('/greeting/{id}' , function($id) {
	$language = ["Bonjour","Ciao","Hallo","Hola","Salam"];
	return view('messages.greeting',["kalli" => $language[$id]]);
})->where(["id" => "[0-4]"]);

