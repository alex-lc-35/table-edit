@extends('layout')

@section('title', 'TEST')

@section('content')
    <h2 class="text-2xl font-semibold mb-4">Bienvenue sur mon site !</h2>
    <div id="spreadsheet"></div>
@endsection

@push('scripts')
    @vite('resources/js/test.js')
    @vite('resources/js/spreadsheet.js')
@endpush
