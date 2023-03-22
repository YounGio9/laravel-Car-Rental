<x-layout>
    <div class="mx-4">
        <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
        </a>
        <x-card>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="lg:w-1/2"
                    src="{{ $listing->picture ? asset('storage/' . $listing->picture) : asset('images/noimage.jpeg') }}"
                    alt="">
                <h3 class="text-2xl mb-2">{{ $listing->name }}</h3>
                <div class="text-xl font-bold mb-4">{{ $listing->brand }}</div>
                <div class="text-lg my-4">
                    <i class="fa-solid fa-tag"></i> {{ $listing->price }}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{ $listing->description }}
                        </p>

                        <div x-data="{ rent: false, items: [1, 2, 3, 4, 5, 6], active: 1 }">
                            <a @click="rent = true"
                                class="inline-block md:w-[70%] md:m-auto bg-slate-600 text-white mx-6 py-2 font-bold rounded-xl hover:opacity-80"><i
                                    class="fa-solid fa-tag"></i>
                                Louer </a>
                                <div class="py-6" x-show="rent">
                                     <template x-for="item in items">
                                <div x-data="{
                                    get comp() {
                                        return active == item 
                                    }
                                }">
                                <div :class="{'!bg-red-500 text-white' : comp}">
                                    <x-card @click="active = item" class="!bg-transparent font-bold"  x-text="item"></x-card>
                                </div>
                                    

                                </div>
                            </template>

                            <p class="py-6" x-text="'Louer pour: ' + active + ' jours'"></p>
                            <form action="/rent/{{$listing->id}}" method="POST">
                                @csrf
                                <div class="mb-6">
                                    <label for="fin_location" class="inline-block text-lg mb-2">
                                        Date de remise
                                    </label>
                                    <input type="datetime-local" class="md:w-1/2 border border-gray-200 rounded p-2 w-full" id="fin_location" name="fin_location">
                    
                                    @error('fin_location')
                                        <p class="text-red-500 text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <button type="submit" class="inline-block md:w-[70%] md:m-auto bg-slate-600 text-white mx-6 py-2 font-bold rounded-xl hover:opacity-80">
                                   <i class="fa-solid fa-tag"></i>
                            Payer
                                </button>
                            </form>
                            

                        

                                </div>
                           




                        </div>


                    </div>
                </div>
            </div>
        </x-card>
        
        @auth
        <div x-data="{show: {{auth()->user()->isAdmin == 1 }}}">
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
