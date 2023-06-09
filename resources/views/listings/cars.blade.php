<x-layout>

    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid min-h-[40vh] lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4 lg:p-12">

        @if (count($listings) === 0)
            <h2>Aucune voiture trouvée. Essayez autre chose </h2>
        @else
            @foreach ($listings as $listing)
                <x-cars-card :listing="$listing" />
            @endforeach
        @endif

    </div>

    <div class="mt-6 p-4 lg:px-16">
        {{$listings->links()}}
    </div>

</x-layout>
