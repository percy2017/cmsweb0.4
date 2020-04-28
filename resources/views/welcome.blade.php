<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ setting('site.title') }}</title>
    <link href="{{ asset('resources/landingpage/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #4267B2;
        }
        h1 {
            color:#FFFFFF;
        }
        p {
            color:#FFFFFF;
        }
        a {
            color:#FFFFFF;
        }
    </style>
</head>
<body>
      <div class="container text-center">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1>{{ setting('site.title') }} - instalado correctamente</h1>
                <hr/>
                <p>ve a la direccion <a href="{{ url('admin/pages') }}" target="_blank"><< PAGINAS >></a> para establecer tu plantilla favorita.</p>
                <p>o a la direccion <a href="{{ url('admin/modules') }}" target="_blank"><< PAQUETES o MODULOS >></a> para realizar la instalacion del paquete de tu preferencia.</p>
                <p>tambien puedes visitar la documentacion oficial en <a href="https://loginweb.dev/docs" target="_blank"><< DOCUMENTACION >></a> para conocer mas del sistema.</p>
            </div>
        </div>
    </div>
</body>
</html>