<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('favicon.png')}}" type="image/x-icon">
    <title>ArenA - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/layouts/dashboard.css')}}">
    @stack('styles')
</head>
<body>

    <header class="dashboard-title">
        <a href="./">
        <img class="dashboard-title__logo" src="{{asset('img/logoLight.png')}}" alt="">
        <h1 class="dashboard-title__text">ArenA <br> Contable</h1>
        </a>
    </header>

    <nav class="dashboard-nav">
        <ul class="dashboard-nav__main">
            <li class="dashboard-nav__link"><a href="#" >Editar Cuentas</a></li>
            <li class="dashboard-nav__link"><a href="./currencies" >Editar Monedas</a></li>
            <li class="dashboard-nav__link"><a href="./journal" >Ver Libro Diario</a></li>
            <li class="dashboard-nav__link"><a href="#" >Ver Libro Mayor</a></li>
        </ul>

        <a class="dashboard-nav__button" href="#">Transacciones</a>

        <ul class="dashboard-nav__accounts">
            <li class="dashboard-nav__link"><a href="#" >Caja Losetas</a></li>
            <li class="dashboard-nav__link"><a href="#" >Caja Ladrillería</a></li>
            <li class="dashboard-nav__link"><a href="#" >Caja Obras</a></li>
            <li class="dashboard-nav__link"><a href="#" >Caja Terrenos</a></li>
            <li class="dashboard-nav__link"><a href="#" >Caja Losetas</a></li>
            <li class="dashboard-nav__link"><a href="#" >Caja Ladrillería</a></li>
            <li class="dashboard-nav__link"><a href="#" >Caja Obras</a></li>
            <li class="dashboard-nav__link"><a href="#" >Caja Terrenos</a></li>
        </ul>

    </nav>
    <main class="dash-main">
        <div class="dash-content">
        @section('content')
            <p>Pon algo aquí</p>
        @show
        </div>
    </main>

    @stack('scripts')
</body>
</html>
