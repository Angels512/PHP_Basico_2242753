<!DOCTYPE html>
<html lang="es-419">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
        <title>Arreglo Paises</title>
    </head>

    <body>
        <header>
            <br><h1 align="center" style="color: #49515a">PAISES</h1><br>
        </header>

        <section align="center">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Capital</th>
                        <th>Moneda</th>
                        <th>Poblacion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paises as $nombre => $pais)
                        <tr>
                            <td> {{ $nombre }} </td>
                            <td> {{ $pais['capital'] }} </td>
                            <td> {{ $pais['moneda'] }} </td>
                            <td> {{ $pais['poblacion'] }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </body>
</html>
