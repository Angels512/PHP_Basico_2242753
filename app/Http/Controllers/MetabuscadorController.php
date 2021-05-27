<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    public function mostrarFormulario()
    {
        // Mostrar la vista de Metabuscador
        return view('metabuscador');
    }


    // Mostrar la busqueda
    public function buscarTermino()
    {
        // Realizar la busqueda
        $termino = $_POST['termino'];
        $motor = $_POST['motor'];


        // La busqueda se realiza de acuerdo al motor seleccionado
        switch ($motor) {
            case 'google':
                return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            
            case 'bing':
                return redirect()->to("https://www.bing.com/search?q=$termino");
                break;

            case 'yahoo':
                return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;

            case 'mLibre':
                return redirect()->to("https://listado.mercadolibre.com.co/$termino");
                break;

            case 'duck':
                return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;

            case 'ask':
                return redirect()->to("https://es.ask.com/web?q=$termino");
                break;

            case 'ecosia':
                return redirect()->to("https://www.ecosia.org/search?q=$termino");
                break;

            case 'qwant':
                return redirect()->to("https://www.qwant.com/?l=es&q=$termino");
                break;
            
            case 'yandex':
                return redirect()->to("https://yandex.com/search/?text=$termino");
                break;

            case 'gibiru':
                return redirect()->to("https://gibiru.com/results.html?q=$termino");
                break;
        }
    }
}
