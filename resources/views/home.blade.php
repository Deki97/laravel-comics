@extends('layouts.app')

@section('page_title')
    DC Comics Home
@endsection

@section('main_content')
    <div class="container">
        <div class="comics">

            <div class="current-series">
                Current Series
            </div>

            <div class="comics-list">
                @foreach ($comics_cards as $comic)
                    <div class="single-comic">
                        <div class="comic-image">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
        
                        <h3 class="comic-name">
                            {{ $comic['title'] }}
                        </h3>
                    </div>
                @endforeach
            </div>

            <div class="load-more">
                Load more
            </div>
        </div>
    </div>
@endsection