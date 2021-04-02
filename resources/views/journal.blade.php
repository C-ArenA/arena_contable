@extends('layouts.dashboard')
@section('title', 'Libro Diario ')
@push('styles')
    <style>
        .card{
            width: 40vw;
            padding: 20px
        }
    </style>
@endpush
@section('content')
<div class="card">
    <x-table ></x-table>
</div>
@endsection
@push('scripts')
    <script src="{{ asset('js/currencies/postRates.js') }}"></script>
@endpush
