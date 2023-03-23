@props(['listing', 'rent'])

<x-card>
    <div class="flex">
        <a href="/cars/{{ $listing->id }}">
            <img class="hidden w-48 mr-6 md:block"
                src="{{ $listing->picture ? asset('storage/' . $listing->picture) : asset('images/noimage.jpeg') }}"
                alt="" />
        </a>

        <div>
            <h3 class="text-2xl">
                <a href="/cars/{{ $listing->id }}">{{ $listing->name }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->brand }}</div>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-tag"></i> {{ $listing->price }} FCFA
            </div>
            @if (isset($rent))
            <form action="/leave/{{$listing->id}}" method="POST">
                @csrf
                <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Rendre le véhicule
                </button>
            </form>
                
            @endif

        </div>
    </div>
</x-card>
