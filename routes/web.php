<?php

use Illuminate\Support\Facades\Route;

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
// 127.0.0.1:8000/ ==> view welcome
Route::get('/', function () {
    return view('welcome');
});

// 127.0.0.1:8000/siswa ==> <h1>SAYA SISWA</h1>
Route::get('/', function () {
    return "<h1>SAYA SISWA</h1>";
});
