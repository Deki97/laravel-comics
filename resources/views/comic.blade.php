@extends('layouts.app')


@section('main_classes')
{{-- Stili differenti nel main --}}

@endsection


@section('main_content')
    {{-- Sono il dettaglio del prodotto : {{ $comic_info['title'] }} --}}
    <div class="comic-intro">
        <img src="{{ $comic_info['thumb'] }}" alt="{{ $comic_info['title'] }}">
    </div>
@endsection