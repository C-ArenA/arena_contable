<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monedas</title>
    <style>
        th, td{
            margin: 10px;
            padding: 10px;
            outline-style: solid;
            outline-width: 2px;
            outline-color: #c7c7c7;
        }

    </style>
</head>
<body>
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
    <table>
        <tr>
            <th>Código de Moneda</th>
            <th>Valor relativo al BOB</th>
        </tr>
        @foreach ($currencies as $currency)
        @if ($currency->being_used == 0)
        <tr>
            <td>{{$currency->code}}</td>
            <td>{{$currency->rate}}</td>
        </tr>
        @endif
        @endforeach
    </table>
    <script src="{{ asset('js/currencies/postRates.js') }}"></script>
</body>
</html>
