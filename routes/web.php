<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/CapsDrogas', function () {
    return view('CapsDrogas');
});
Route::get('/CapsAdulto', function () {
    return view('CapsAdulto');
});
Route::get('/CapsInf', function () {
    return view('CapsInf');
});
Route::get('/outros', function () {
    return view('outros');
});
