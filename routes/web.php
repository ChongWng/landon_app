<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>Hello World!</h1>';
});

Route::get('/home', function () {
    $data = [];
    $data['version'] = '0.1.1';
    return view('welcome', $data);
});

//the basis of how restful API works
Route::get('/us', function () {
    $arr = [];
    $arr['id'] = '1';
    $arr['name'] = 'Kitty';
    $arr['gender'] = 'male';
    return $arr;
});