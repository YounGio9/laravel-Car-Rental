@extends('layout')

@section('content')
    <div class="mx-4">
        <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
        </a>
        <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6" src="images/acme.png" alt="" />
                <img class="lg:w-1/2" src="{{ asset('images/noimage.jpeg') }}" alt="">
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
                        <p>
                            Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Quaerat praesentium eos
                            consequuntur ex voluptatum necessitatibus
                            odio quos cupiditate iste similique rem in,
                            voluptates quod maxime animi veritatis illum
                            quo sapiente.
                        </p>

                        <a href="mailto:test@test.com"
                            class="block bg-slate-600 text-white mt-6 py-2 font-bold rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-tag"></i>
                            Rent car</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
