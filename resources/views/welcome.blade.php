<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sod Unisuam</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <example-component>


        </example-component>
    </div>
    <script>
        window.Laravel = <?php echo json_encode([
        S1st3m@SOD    'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
