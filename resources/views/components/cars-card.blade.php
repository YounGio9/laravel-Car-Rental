@props(['listing'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{$listing->picture ? asset('storage/' . $listing->picture) : asset('images/noimage.jpeg') }}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/cars/{{ $listing->id }}">{{ $listing->name }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->brand }}</div>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-tag"></i> {{ $listing->price }} FCFA
            </div>
        </div>
    </div>
</x-card>