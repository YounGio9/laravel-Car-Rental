<x-layout>
    <div class="min-h-[65vh] bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Connexion
            </h2>
            <p class="mb-4">Connectez vous a votre compte</p>
        </header>

        <form method="POST" action="/users/auth">
            @csrf

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
                <button type="submit" class="block m-auto font-bold bg-green-500 text-white rounded py-2 px-4 hover:opacity-80">
                    Connexion
                </button>
            </div>

            <div class="mt-8">
                <p>
                   Vous n'avez pas de compte ?
                    <a href="/register" class="text-bg-slate-500">Inscription</a>
                </p>
            </div>
        </form>
    </div>
</x-layout>
