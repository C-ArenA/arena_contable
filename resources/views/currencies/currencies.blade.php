@extends('layouts.dashboard')
@section('title', 'Currencies')
@push('styles')

@endpush
@section('content')
<div class="curr">
    <header><a href="./">HOME</a></header>
    <h1>Monedas</h1>
    <button id="refresh">Refresh Rates</button>
    <h2>Monedas Activas</h2>

    <table>
        <tr>
            <th>Código de Moneda</th>
            <th>Valor relativo al BOB</th>
            <th>Símbolo</th>
        </tr>
        @foreach ($currencies as $currency)
        @if ($currency->being_used > 0)
        <tr>
            <td>{{$currency->code}}</td>
            <td>{{$currency->rate}}</td>
            <td>{{$currency->symbol}}</td>
        </tr>
        @endif
        @endforeach
    </table>
    <h2>Monedas inactivas</h2>
    <div style="width: 30vw; padding:10px;">
        <x-table :headerArray="['Código', 'Bs.', 'Símbolo']" :contentDBArray="$currencies"></x-table>
    </div>
</div>
@push('scripts')
    <script src="{{ asset('js/currencies/postRates.js') }}"></script>
@endpush
@endsection
