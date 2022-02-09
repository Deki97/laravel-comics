@extends('layouts.app')

@section('page_title')
    DC Comics Home
@endsection

@section('main_content')
    <h1>Homepage</h1>

    {{ dd($comics_cards) }}
@endsection