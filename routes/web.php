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


Route::get('Variable', function()
{
    $mensaje = 20;
});


Route::get('Array', function()
{
    $amigos = array
    (
        array('Miguel', 17),
        array('Alejandro', 19),
        array('Manuel', 22)
    );
});
