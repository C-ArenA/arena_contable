@extends('layouts.dashboard')
@section('title', 'Libro Diario ')
@push('styles')
    <style>
        .card{
            width: 60vw;
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
