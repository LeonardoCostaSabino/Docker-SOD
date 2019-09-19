
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sod Unisuam</title>
<?php
    $url = url()->current();
    $url = explode('/',$url);
?>
@if($url[count($url)-1]=="login")
    <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css">
@endif
<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>

