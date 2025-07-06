@extends('layout')

@section('title', 'TEST')

@section('content')
    <h2 class="text-2xl font-semibold mb-4">Bienvenue sur mon site !</h2>
    <div id="spreadsheet" data-table="product/table-edit"></div>
@endsection

@push('scripts')
    @vite('resources/js/test.js')
    @vite('resources/modules/table-edit/js/index.js')
@endpush
