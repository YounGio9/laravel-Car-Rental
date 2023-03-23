<x-layout>

    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Créez un nouveau véhicule
            </h2>
            <p class="mb-4">Ajoutez un véhicule au garage</p>
        </header>

        <form action="/cars" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Nom du vehicule</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                    value="{{ old('name') }}" />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Marque</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="brand"
                    placeholder="Exemple: Toyota, BMW, Peugeot" value="{{ old('brand') }}" />

                @error('brand')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Prix de location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="price"
                    placeholder="90000" value="{{ old('price') }}" />
                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Image
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="picture" />
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
                    {{ old('description') }}
                </textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 flex items-center justify-between">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Créer le véhicule
                </button>

                <a href="/" class="text-black ml-4 bg-slate-500 py-2 px-4 rounded text-white "> Retour </a>
            </div>
        </form>
    </div>

</x-layout>
