@extends('layouts.dashboard')
@section('title', 'Currencies')
@push('styles')
    <style>
        .curr {
            display: grid;
            grid-template-columns: .8fr 1.2fr;
            grid-template-rows: 1fr 1fr;
            gap: 15px 15px;
            margin: 20px 0 10px 0;
        }
        .card {
            background-color: var(--col-arena-cards);
            /* width: fit-content; */
            padding: 20px;
            text-align: center;
            box-shadow: 0px 1px 20px -1px #31445190;

        }
        .card input {
            display: block;
            width: 80%;
            margin: 10px auto;
            font-family: var(--font-main);
            background-color: var(--col-arena-back);
            color: var(--col-arena-heavy);
            border-width: 1px;
            padding: 10px;
            border-radius: 8px;

        }
        .card h2 {
            font-family: var(--font-main);
            font-weight: 700;
            margin: 0 0 20px 0;
        }
        .all-curr { grid-area: 1 / 1 / 3 / 2; }
        .check-curr { grid-area: 1 / 2 / 2 / 3; }
        .update-curr { grid-area: 2 / 2 / 3 / 3; }
    </style>

@endpush
@section('content')
<h1>Monedas</h1>
<div class="curr">
    <div class="card all-curr">
    <h2>Todas las monedas</h2>
    <x-table :headerArray="['Código', 'Bs.', 'Símbolo', 'En Uso']"
            :contentDBArray="$currencies"
            style="width:30vw; height:60vh;"></x-table>
    <form action="./currencies" method="post">
        @csrf
        @method("PUT")
        <input type="text" name="access_key" id="accessKey" placeholder="API Key data.fixer.io" required value={{$_ENV['API_KEY_DATA_FIXER']}}>
        <x-button id="refreshButton">Actualizar Monedas en Base a: 'BOB'</x-button>
        <input type="hidden" name="newCurrencies" id="newCurrenciesField">
    </form>
    </div>
    <div class="card check-curr">
        <h2>Monedas activas</h2>
        <x-table></x-table>
    </div>
    <div class="card update-curr">
        <h2>Editar Moneda</h2>
        <form action="./currencies" method="post">
            @csrf
            @method('PUT')
            <input type="text" name="newSymbol" id="newSymbol">
        </form>
    </div>
</div>
@push('scripts')
    <script src="{{ asset('js/currencies/postRates.js') }}"></script>
@endpush
@endsection
