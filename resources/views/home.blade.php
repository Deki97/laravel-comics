@extends('layouts.app')

@section('page_title')
    DC Comics Home
@endsection

@section('main_classes')
comics-background
@endsection

@section('main_content')
    <div class="container">
        
        @include('components.comics-list');

    </div>
@endsection