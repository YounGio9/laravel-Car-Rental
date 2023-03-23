<x-layout>
    <x-card class="min-h-[69vh]">
        <form action="/cars/manage">
            <div class="relative border-2 border-gray-100 m-4 rounded-lg">
                <div class="absolute top-4 left-3">
                    <i
                        class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
                    ></i>
                </div>
                <input
                    type="text"
                    name="search"
                    class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                    placeholder="Search Laravel Gigs..."
                />
                <div class="absolute top-2 right-2">
                    <button
                        type="submit"
                        class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600"
                    >
                        Search
                    </button>
                </div>
            </div>
        </form>

        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Gerer les voitures <a href="/cars/create" class="bg-black text-white py-2 px-3 hover:bg-red-500">Ajouter une voiture</a>
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">

            <tbody>
                @foreach ($listings as $listing)
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <a href="/cars/{{$listing->id}}">
                                {{$listing->name}}
                            </a>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <a href="/cars/{{$listing->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                                    class="fa-solid fa-pen-to-square"></i>
                                Modifier</a>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <form action="/cars/{{$listing->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600">
                                    <i class="fa-solid fa-trash-can"></i>
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <div class="mt-6 p-4 lg:px-16">
            {{$listings->links()}}
        </div>

    </x-card>

</x-layout>
