@extends('layouts.app')


@section('main_classes')
{{-- Stili differenti nel main --}}

@endsection


@section('main_content')
    {{-- Sono il dettaglio del prodotto : {{ $comic_info['title'] }} --}}
    <section class="single-comic-detail">
        <div class="container">
            <div class="comic-intro">
                <img src="{{ $comic_info['thumb'] }}" alt="{{ $comic_info['title'] }}">
            </div>

            <div class="comic-main-description">
                <div class="left-comic">
                    <div class="comic-title">
                        <h2>{{ $comic_info['title'] }}</h2>
                    </div>

                    <div class="comic-buy">
                        <div class="comic-price">
                            U.S. Price: {{ $comic_info['price'] }}
                        </div>

                        <div class="availability">
                            Available
                        </div>

                        <div class="check-availability">
                            <a href="">Check Availability</a>
                        </div>
                    </div>

                    <div class="comic-description">
                        <p>{{ $comic_info['description'] }}</p>
                    </div>
                </div>

                <div class="right-comic">
                    <div class="ads-text">
                        Advertisement
                    </div>

                    <div class="ads-image">
                        <img src="{{ asset('images/adv.jpg ') }}" alt="Ads Image">
                    </div>
                </div>
            </div>

            <div class="comic-footer-info">
                <div class="talent">
                    <div class="title">
                        Talent
                    </div>

                    <div class="art-by">
                        <div class="label">
                            Art by:
                        </div>

                        <div class="list">
                            <ul>
                                <li>
                                    Item1, Item2
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="written-by">
                        <div class="label">
                            Written by:
                        </div>

                        <div class="list">
                            <ul>
                                <li>
                                    Item1, Item2
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="specs">
                    <div class="title">
                        Specs
                    </div>

                    <div class="series">
                        <div class="label">
                            Series:
                        </div>

                        <div class="detail">
                            {{ $comic_info['series'] }}
                        </div>
                    </div>

                    <div class="price">
                        <div class="label">
                            U.S. Price:
                        </div>

                        <div class="detail">
                            {{ $comic_info['price'] }}
                        </div>
                    </div>

                    <div class="sale">
                        <div class="label">
                            On Sale Date:
                        </div>

                        <div class="detail">
                            {{ $comic_info['sale_date']}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection