<!DOCTYPE html>
<html lang="es-419">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Metabuscador</title>
    </head>

    <body>
        <div class="col-auto">
            <h1>Metabuscador</h1>

            <form method="post" action="{{ url('buscarTermino') }}">
                @csrf
                <div class="form-group">
                    <label for="text">Ingrese el termino de búsqueda</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                        <input id="text" name="termino" type="text" required="required" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label>Seleccione el motor de búsqueda</label>
                    <div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="motor" id="radio_0" type="radio" required="required" class="custom-control-input" value="google" checked>
                            <label for="radio_0" class="custom-control-label">Google</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="motor" id="radio_1" type="radio" required="required" class="custom-control-input" value="bing">
                            <label for="radio_1" class="custom-control-label">Bing</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="motor" id="radio_2" type="radio" required="required" class="custom-control-input" value="yahoo">
                            <label for="radio_2" class="custom-control-label">Yahoo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="motor" id="radio_3" type="radio" required="required" class="custom-control-input" value="mLibre">
                            <label for="radio_3" class="custom-control-label">Mercado Libre</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="motor" id="radio_4" type="radio" required="required" class="custom-control-input" value="duck">
                            <label for="radio_4" class="custom-control-label">DuckDuckGo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="motor" id="radio_5" type="radio" required="required" class="custom-control-input" value="ask">
                            <label for="radio_5" class="custom-control-label">Ask</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="motor" id="radio_6" type="radio" required="required" class="custom-control-input" value="ecosia">
                            <label for="radio_6" class="custom-control-label">Ecosia</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="motor" id="radio_7" type="radio" required="required" class="custom-control-input" value="qwant">
                            <label for="radio_7" class="custom-control-label">Qwant</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="motor" id="radio_8" type="radio" required="required" class="custom-control-input" value="yandex">
                            <label for="radio_8" class="custom-control-label">Yandex</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="motor" id="radio_9" type="radio" required="required" class="custom-control-input" value="gibiru">
                            <label for="radio_9" class="custom-control-label">Gibiru</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
        </div>
    </body>
</html>
