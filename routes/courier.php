<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('courier')->user();

    //dd($users);

    return view('courier.home');
})->name('home');

