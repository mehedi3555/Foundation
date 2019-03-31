<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin | @yield('title')</title>
        <link rel="shortcut icon" href=" {{ asset('FrontEnd/images/roya.ico') }} ">
        <link href=" {{ asset('BackEnd/plugins/jquery-ui-1.12.1/jquery-ui.min.css') }} " rel="stylesheet" type="text/css" />
        <link href=" {{ asset('BackEnd/plugins/materialize/css/materialize.min.css') }} " rel="stylesheet">
        <link href=" {{ asset('BackEnd/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
        <link href=" {{ asset('BackEnd/plugins/animate/animate.css') }} " rel="stylesheet" />
        <link href=" {{ asset('BackEnd/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet" type="text/css" />
        @stack('style')
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href=" {{ asset('BackEnd/plugins/monthly/monthly.css') }} " rel="stylesheet" type="text/css" />
        <link href=" {{ asset('BackEnd/plugins/simplebar/dist/simplebar.css') }} " rel="stylesheet" type="text/css" />
        <link href=" {{ asset('BackEnd/plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.css') }} " rel="stylesheet" type="text/css" />
        <link href=" {{ asset('BackEnd/dist/css/stylematerial.css') }} " rel="stylesheet">
    </head>

    <body>
        <div id="wrapper">