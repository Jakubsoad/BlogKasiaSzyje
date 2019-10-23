<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Kasia szyje @yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
    <link rel="stylesheet" href="{{asset('/css/Pretty-Footer.css')}}">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

</head>

<body>
{{--TODO: Wyszukiwarka--}}
<nav class="navbar navbar-light navbar-expand-md">
    <div class="container-fluid"><a class="navbar-brand" href="/" style="font-family: Montserrat, sans-serif;font-style: normal;"><strong>Kasia</strong><em> </em>szyje<img class="logo" src="{{asset('/img/sewingMachine.png')}}"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
                class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="/blog">Blog</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/sklep">Sklep</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/kontakt">Kontakt</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="/o-mnie">O mnie</a></li>
            </ul>
        </div>
    </div>
</nav>