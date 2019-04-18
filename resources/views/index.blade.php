<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>I Gear Geek</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

         <!-- bootstrap jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!-- js -->
        <script src="js/locker.js"></script>

        <!-- bootbox -->
        <script src="js/bootbox.all.min.js"></script>
        <!-- <script src="js/bootbox/bootbox.js"></script>
        <script src="js/bootbox/bootbox.locales.js"></script>
        <script src="js/bootbox/bootbox.locales.min.js"></script>
        <script src="js/bootbox/bootbox.min.js"></script> -->

    </head>
    <body>
        @extends('dashboard')
        @extends('nav')
    </body>
</html>
