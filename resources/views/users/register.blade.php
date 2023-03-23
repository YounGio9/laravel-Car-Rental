<x-layout>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Inscription
            </h2>
            <p class="mb-4">Créez un compte pour louer des voitures</p>
        </header>

        <form method="POST" action="/users">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">
                    Nom
                </label>
                <input value="{{old('name')}}" type="text" class="border border-gray-200 rounded p-2 w-full" name="name" />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input value="{{old('email')}}" type="email" class="border border-gray-200 rounded p-2 w-full" name="email" />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    Mot de passe
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />

                @error('password')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password2" class="inline-block text-lg mb-2">
                    Confirmer mot de passe
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" />
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="font-bold block m-auto bg-blue-500 hover:opacity-80 text-white rounded py-2 px-4">
                    Inscription
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Vous avez deja un compte?
                    <a href="/login" class="text-bg-slate-500 font-bold">Connexion</a>
                </p>
            </div>
        </form>
    </div>
</x-layout>
