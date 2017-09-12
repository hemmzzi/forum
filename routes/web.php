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

route::get('/greeting/{id}/{count}' , function($id,$count) {
	return view('messages.greeting',compact('id', 'count'));
});

