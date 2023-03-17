@extends('layout')

@section('content')
    <h2>{{ $listing['name'] }}</h2>

    <p>{{ $listing['description'] }}</p>
@endsection
