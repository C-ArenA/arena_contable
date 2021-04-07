@extends('layouts.dashboard')
@section('title', 'Currencies')
@push('styles')

@endpush
@section('content')
<div class="curr">
    <h1>Monedas</h1>
    <x-table :headerArray="['Código', 'Bs.', 'Símbolo', 'En Uso']"
            :contentDBArray="$currencies"
            style="width:30vw; height:80vh;"></x-table>
    <form action="./currencies" method="post">
        @csrf
        @method("PUT")
        <input type="text" name="access_key" id="accessKey" placeholder="API Key data.fixer.io" required value={{$_ENV['API_KEY_DATA_FIXER']}}>
        <x-button id="refreshButton">Actualizar Monedas en Base a: 'BOB'</x-button>
        <input type="hidden" name="newCurrencies" id="newCurrenciesField">
    </form>

</div>
@push('scripts')
    <script src="{{ asset('js/currencies/postRates.js') }}"></script>
@endpush
@endsection
