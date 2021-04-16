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
<x-card><x-table ></x-table></x-card>
@endsection
@push('scripts')
    <script src="{{ asset('js/currencies/postRates.js') }}"></script>
@endpush
