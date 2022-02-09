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

                <div class="comic-name">
                    {{ $comic['title'] }}
                </div>
            </div>
        @endforeach
    </div>

    <div class="load-more">
        <a href="">Load more</a>
    </div>
</div>
