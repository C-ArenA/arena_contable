@extends('layouts.dashboard')
@section('title', 'Currencies')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/currencies/currencies.css')}}">
@endpush
@section('content')
<h1 class="curr-title">Monedas</h1>
<div class="curr">
    <x-card class="all-curr">
        <h2>Todas las monedas</h2>
        <x-table :headerArray="['Código', 'Bs.', 'Símbolo', 'En Uso']"
                :contentDBArray="$currencies"
                :toggleColumnsArray="['being_used']"
                style="width:30vw; min-height:60vh; max-height: calc(100% - 5rem); margin-bottom:1rem;"></x-table>
        <form action="./currencies" method="POST">
            @csrf
            @method("PUT")
            <x-button onclick="this.form.submit();">Actualizar Tipos de Cambio</x-button>
        </form>
    </x-card>
    <x-card class="check-curr">
        <h2>Monedas activas</h2>
        <x-table :headerArray="['Código', 'Bs.', 'Símbolo', 'En Uso']"
        :contentDBArray="$currencies"
        :toggleColumnsArray="['being_used']"
        :condition="['being_used'=>'1']"
        style="max-height: calc(100% - 2rem);"></x-table>
    </x-card>
    <x-card class="update-curr">
        <h2>Editar Moneda</h2>
        <form action="./currencies" method="post">
            @csrf
            @method('PUT')
            <input type="text" name="newSymbol" id="newSymbol">
        </form>
    </x-card>
</div>
@push('scripts')
    <script src="{{ asset('js/currencies/postRates.js') }}"></script>
@endpush
@endsection
