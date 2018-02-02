<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('shopadmin')->user();

    //dd($users);

    return view('shopadmin.home');
})->name('home');

Route::get('/ok',function(){
 return "It worked";
});
