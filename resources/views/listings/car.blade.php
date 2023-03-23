<x-layout>
    <div class="mx-4">
        <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
        </a>
        <x-card class="md:flex">
            <div class="flex flex-col items-center justify-center text-center">
                <img
                    src="{{ $listing->picture ? asset('storage/' . $listing->picture) : asset('images/noimage.jpeg') }}"
                    alt="">
                <h3 class="text-2xl mb-2">{{ $listing->name }}</h3>
                <div class="text-xl font-bold mb-4">{{ $listing->brand }}</div>
                <div class="text-lg my-4">
                    <i class="fa-solid fa-tag"></i> {{ $listing->price }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                
            </div>
            <div class="p-6 md:w-2/3">
                <h3 class="text-3xl font-bold mb-4">
                    Description
                </h3>
                <div class="text-lg space-y-6">
                    <p class="font-sans md:text-2xl md:w-full h-auto">
                        {{ $listing->description }}
                    </p>

                    <div class="w-full" x-data="{ rent: false, items: [1, 2, 3, 4, 5, 6], active: 1 }">
                        <a @click="rent = true"
                        href="/rental/{{$listing->id}}"
                            class="w-1/2 text-center block md:w-[35%] mx-auto bg-slate-600 text-white py-2 font-bold rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-tag"></i>
                            Louer </a>
                        <div class="py-6" x-show="rent">
                            {{-- <template x-for="item in items">
                                <div x-data="{
                                    get comp() {
                                        return active == item
                                    }
                                }">
                                    <div :class="{ '!bg-red-500 text-white': comp }">
                                        <x-card @click="active = item" class="!bg-transparent font-bold"
                                            x-text="item"></x-card>
                                    </div>


                                </div>
                            </template> --}}

                            {{-- <p class="py-6" x-text="'Louer pour: ' + active + ' jours'"></p> --}}
                                

                                <button type="submit"
                                class="w-1/2 text-center block md:w-[35%] mx-auto bg-slate-600 text-white py-2 font-bold rounded-xl hover:opacity-80">
                                    <i class="fa-solid fa-tag"></i>
                                    Payer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </x-card>

        @auth
            <div x-data="{ show: {{ auth()->user()->isAdmin == 1 }} }">
                <x-card x-show="show" class="flex space-x-6 justify-center w-3/4 lg:w-1/2 m-auto mt-8">
                    <a href="/cars/{{ $listing->id }}/edit">
                        <i class="fa-solid fa-pencil"></i> Edit
                    </a>

                    <form action="/cars/{{ $listing->id }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="text-red-500">
                            <i class="fa-solid fa-trash"></i> Delete
                        </button>
                    </form>
                </x-card>
            </div>

        @endauth
    </div>
</x-layout>
