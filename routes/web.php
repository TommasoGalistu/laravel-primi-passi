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



    $data = [
       'title' => 'Home Page',
       'phrase' => 'Hello World',
       'colors' => ['giallo', 'rosso', 'blu', 'viola'],

    ];

    return view('home', $data);
});
