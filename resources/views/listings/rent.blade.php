<x-layout>
    <div class="min-h-[65vh] bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center mb-12">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Louer {{ $listing->name }}
            </h2>
            <p class="mb-4">Marque: {{$listing->brand}}</p>
        </header>

        <form action="/rent/{{ $listing->id }}" method="POST" class="grid gap-12">
            @csrf

            <div class="mb-6">
                <label for="fin_location" class="inline-block text-lg mb-2">Date de fin de location</label>
                <input value="{{ old('fin_location') }}" type="datetime-local" name="fin_location"
                    class="border border-gray-200 rounded p-2 w-full" />

                @error('fin_location')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            <div class="mb-6">
                <button type="submit" class="block font-bold m-auto bg-green-500 text-white rounded py-2 px-4 hover:bg-black">
                    Payer
                </button>
            </div>
        </form>
    </div>
</x-layout>
