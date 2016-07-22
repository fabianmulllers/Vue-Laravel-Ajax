
    <!DOCTYPE HTML>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta id="token" name="token" value="{{ csrf_token() }}">
        <title>Vueify</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    </head>

    <style>

        body{

            padding: 2em 0;
        }
        .errors{

            color: red;
        }

    </style>

    <body>
   <h1>Este es vuify Bienvenido</h1>
            <div id="app">
                <alert type="success"> Hello world</alert>

            </div>

    </body>

    <script src="{{asset('js/vueify.js')}}"></script>

    </html>