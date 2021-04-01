@extends('layouts.dashboard')
@section('title', 'Home')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/home/home.css')}}">
@endpush
@section('content1')
<div class="home">
    <img class="home-logo" src="{{asset('img/logoBlack.png')}}" alt="">
    <h2 class="home-title">ArenA Contable</h2>
    <p class="home-text">Bienvenido</p>
    <p class="home-message">Selecciona la opción que quieras en la barra de navegación a la izquierda</p>
</div>
@endsection
