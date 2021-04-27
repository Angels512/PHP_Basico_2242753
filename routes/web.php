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


Route::get('vphp arariable', function()
{
    $mensaje = 20;
});


Route::get('array', function()
{
    $amigos = array
    (
        array('Miguel', 17),
        array('Alejandro', 19),
        array('Manuel', 22)
    );
});


Route::get('paises', function()
{
    $paises =
    [
        'Colombia' => [
            'capital'=>'Bogota',
            'moneda'=>'Peso COP',
            'poblacion'=>'51 Millones'
        ],

        'Peru' => [
            'capital'=>'Lima',
            'moneda'=>'Sol',
            'poblacion'=>'33 Millones'
        ],

        'Paraguay' => [
            'capital'=>'Asunción',
            'moneda'=>'Guaraní paraguayo',
            'poblacion'=>'7 Millones'
        ]
    ];


    // Recorrer el arreglo de paises con un ciclo.
    foreach ($paises as $indice => $pais)
    {
        echo '<h1>' . $indice . '</h1>';

        echo '<pre>';
        print_r($pais['capital']);
        echo '</pre><hr/>';
    }
});
