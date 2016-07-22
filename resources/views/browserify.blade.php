<!DOCTYPE html>
<html >
<head>
    <title>Laravel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script   src="http://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>


    <script src="{{asset('js/vue-resource.min.js')}}"></script>
</head>
<body>
<div class="container">


    <div id="app">
        @{{message | reverse}}
        @{{message2 | reverse}}
    </div>


</div>

</body>

<script src="{{asset('js/main.js')}}"></script>
</html>
