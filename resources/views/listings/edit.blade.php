<x-layout>

    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Modifier un véhicule
            </h2>
            <p class="mb-4">Modifier {{$listing->name}}</p>
        </header>

        <form action="/cars/{{$listing->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Nom du vehicule</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                    value="{{ $listing->name }}" />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Marque</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="brand"
                    placeholder="Exemple: Toyota, BMW, Peugeot" value="{{ $listing->brand }}" />

                @error('brand')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Prix de location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="price"
                    placeholder="90000" value="{{ $listing->price }}" />
                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Image du véhicule
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="picture" />
                <img class="hidden w-48 mr-6 md:block" src="{{$listing->picture ? asset('storage/' . $listing->picture) : asset('images/noimage.jpeg') }}" />
                @error('picture')
                    {{ $message }}
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Description du véhicule
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Incluez les caractéristiques, la vitesse et autres">
                    {{ $listing->description }}
                </textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 flex items-center justify-between">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Créer le véhicule
                </button>

                <a href="/" class="text-black ml-4 bg-slate-500 py-2 px-4 rounded text-white "> Back </a>
            </div>
        </form>
    </div>

</x-layout>
