<section class="relative h-72 bg-slate-500 flex flex-col justify-center align-center text-center space-y-4 mb-4">
    <div class="absolute top-0 left-0 w-full h-full opacity-20 bg-no-repeat bg-center"
        style="background-image: url('images/voitureluxe.jpg')"></div>

    <div class="z-10">
        <h1 class="text-5xl font-bold text-white">
            GiGi's <span class="text-black">GARAGE</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4">
            The bests cars you ever seen
        </p>
        @auth
        <div></div>
        @else
            <div>
                <a href="/register"
                    class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Créez
                    un compte pour louer une voiture</a>
            </div>
        @endauth
    </div>
</section>
