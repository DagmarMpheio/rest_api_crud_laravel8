<?php
/**
 * Created by PhpStorm.
 * User: Dagmar Mpheio
 * Date: 12/7/2020
 * Time: 8:24 PM
 */ ?>
        <!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 8 & MySQL CRUD Tutorial</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
</head>
<body>
<div class="container">
    <ul>
        <li><a href="{{url('/register')}}">Registar</a></li>
		 <li><a href="{{url('/login')}}">Login</a></li>
    </ul>
    @yield('main')
</div>
<script src="{{asset('js/app/js')}}" type="text/javascript"></script>
</body>
</html>
