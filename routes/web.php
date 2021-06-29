<?php

    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });


    Route::get('variable', function()
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
            ],
            'España' => [
                'capital'=>'Madrir',
                'moneda'=>'Euro',
                'poblacion'=>'46.94 Millones'
            ]
        ];

        // Retorna la vista con el arreglo de paises
        return view('paises')->with("paises", $paises);


        // Recorrer el arreglo de paises con un ciclo.
        // foreach ($paises as $indice => $pais)
        // {
        //     echo '<h1>' . $indice . '</h1>';

        //     echo '<pre>';
        //     print_r($pais['capital']);
        //     echo '</pre><hr/>';
        // }
    });

    // Ruta para mostrar el formulario
    Route::get('mostrarFormulario', 'MetabuscadorController@mostrarFormulario');

    // Ruta para buscar el termino dado en el formulario
    Route::post('buscarTermino', 'MetabuscadorController@buscarTermino');


    Route::resource('artista', 'ArtistaController');
