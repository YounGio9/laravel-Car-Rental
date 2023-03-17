@extends('layout')

@section('content')

    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4 lg:p-12">

        @if (count($listings) === 0)
            <h2>No Cars found</h2>
        @else
            @foreach ($listings as $listing)
                <x-cars-card :listing="$listing" />
            @endforeach
        @endif

    </div>

@endsection
