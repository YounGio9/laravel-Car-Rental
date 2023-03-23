<x-layout>

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4 lg:p-12 border min-h-[69vh]">

        @if (count($listings) === 0)
            <h2>Vous n'avez loué aucune voiture</h2>
        @else
            @foreach ($listings as $listing)
                <x-cars-card :listing="$listing" :rent="true" />
            @endforeach
        @endif

    </div>

</x-layout>