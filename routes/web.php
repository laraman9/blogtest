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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
   
   $num1=12;
   //return view('welcome');
   echo(gettype($num1));
    echo($num1."is".gettype($num1));
});
Route::get('/test2', function () {
   
    $num1=12;
    //return view('welcome');
    //echo(gettype($num1));
     echo('test2');
 });
