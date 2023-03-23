<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            content: ["./src/**/*.{html,js,php}"],
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
            // screens: {
            //     'sm': {
            //         'min': '280px',
            //         'max': '767px'
            //     },
            //     // => @media (min-width: 640px and max-width: 767px) { ... }

            //     'md': {
            //         'min': '768px',
            //         'max': '1023px'
            //     },
            //     // => @media (min-width: 768px and max-width: 1023px) { ... }

            //     'lg': {
            //         'min': '1024px',
            //         'max': '1279px'
            //     },
            //     // => @media (min-width: 1024px and max-width: 1279px) { ... }

            //     'xl': {
            //         'min': '1280px',
            //         'max': '1535px'
            //     },
            //     // => @media (min-width: 1280px and max-width: 1535px) { ... }

            //     '2xl': {
            //         'min': '1536px'
            //     },
            //     // => @media (min-width: 1536px) { ... }
            // }
        };
    </script>
    <title>GiGi's Garage</title>
</head>

<body>
    <nav class="flex justify-between items-center mb-4">
        <a href="/"><img class="w-24 mr-6" src="{{ asset('images/logo.png') }}" alt=""
                class="logo" /></a>

        @auth
            <ul class="flex space-x-6 mr-6 text-lg w-full">
                <li>
                    <a href="/rentals" class="hover:text-slate-600"><i class="fa-solid fa-car"></i>
                        Mes locations</a>
                </li>
                <li>
                    <a href="/cars/manage" class="hover:text-slate-600"><i class="fa-solid fa-gear"></i>
                        Administrer les voitures</a>
                </li>
                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-door-open"></i> Deconnexion
                        </button>
                    </form>
                </li>
                <li class="grow text-right">
                    <span class="font-bold uppercase ">
                        Bienvenue {{ auth()->user()->name }}
                    </span>
                </li>
            </ul>
        @else
            <ul class="flex space-x-6 mr-6 text-lg">
                <li>
                    <a href="/register" class="hover:text-slate-600"><i class="fa-solid fa-user-plus"></i> Inscription</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-slate-600"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Connexion</a>
                </li>
            </ul>
        @endauth

    </nav>

    <main>
        {{ $slot }}
    </main>

    <footer
        class="relative bottom-0 left-0 w-full flex items-center justify-start font-bold bg-slate-500 text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2 w-56 md:w-auto lg:w-auto">Copyright &copy; 2022, All Rights reserved</p>

    </footer>
    <x-flash-message />
</body>

</html>
