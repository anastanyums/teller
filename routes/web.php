<?php

use App\Http\Controllers\mainlogincontroller;
use Symfony\Component\VarDumper\Cloner\Data;

Route::get('/admin', function () {
    return view('layouts.admin');
});
Route::get('/comp', function () {
    return view('layouts.newcomp');
});
Route::get('/over', function () {
    return view('layouts.over');
});
Route::get('/log', function () {
    return view('layouts.log');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/boos', function () {
    return view('boos');
});

Route::post('/complain2', 'mainlogincontroller@store');

Route::get('/complain', 'mainlogincontroller@complain');



Route::get('/newcomplain', 'mainlogincontroller@newcomplain');


Route::get('/secondarylogin', function () {
    return view ('secondarylogin');
});

Auth::routes();

