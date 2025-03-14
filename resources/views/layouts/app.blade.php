<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <nav class="bg-gray-300 w-full fixed z-10 md:flex md:flex-row justify-between items-center">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <img class="h-14 w-14 rounded-r-lg" src="../assets/img/Logo.png" alt="">
            </div>

            <!-- Hamburger Button (Muncul di Mobile) -->   
            <button id="menu-btn"
                class="mx-4 p-2 w-10 md:hidden group flex flex-col space-y-[6px] justify-items-center ">
                <div
                    class="w-full transition-all group-[.active]:rotate-45 group-[.active]:origin-top-left border border-black">
                </div>
                <div class="w-full transition-all group-[.active]:scale-0 border border-black"></div>
                <div
                    class="w-full transition-all group-[.active]:-rotate-45 group-[.active]:origin-bottom-left border border-black">
                </div>
            </button>
        </div>
        
        <!-- Mobile Menu (Hidden by default) -->
        <div class="mr-[20vh]">
            <ul id="mobile-menu" class="md:static fixed translate-x-full md:translate-x-0 md:w-full right-0 flex flex-col md:flex-row w-[40vh] h-full gap-6
            text-center bg-gray-300 md:shadow-none shadow-md duration-400 transition-all z-10 md:items-center py-2 md:text-xl font-semibold">
                <li><a href="/home" class="text-gray-700 hover:text-blue-500">Home</a></li>
                {{-- <li><a href="/produk" class="text-gray-700 hover:text-blue-500">Produk</a></li> --}}
                <button id="dropdown-btn" class="text-gray-700 hover:text-blue-500 relative">
                    Produk ⬇
                    <div id="dropdown-menu" class="hidden absolute left-1/2 bg-white p-2 rounded-md">
                        <li><a href="/pupukNPK" class="text-gray-700 hover:text-blue-500 ">NPK</a></li>
                        <li><a href="/pupukDAP" class="text-gray-700 hover:text-blue-500">DAP</a></li>
                    </div>
                </button>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">About</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Contact</a></li>
                <li><a href="/admin" class="text-gray-700 hover:text-blue-500">Sign in</a></li>
            </ul>
        </div>
    </nav>
   {{-- About And Hero Section --}}
    <section>
        <section class="pt-14">
            @yield('content')
        </section>
    </section>
    {{-- Footer --}}
    <section>
        <div class="bg-slate-700 h-full w-full py-6 px-6 md:px-20 md:py-10">
            <div class="flex flex-col md:flex-row text-white gap-6">
                <div class="flex-1 ">
                    <p class="font-semibold py-2">PT JAYA BERSERI</p>
                    <p>
                        Kami adalah perusahaan pupuk pertanian dan perkebunan yang turut serta membantu petani dalam
                        mengatasi kelangkaan pupuk subsidi seiring di kuranginya kuota pupuk bersubsidi dari pemerintah.
                    </p>
                </div>
                <div class="flex-1">
                    <p class="font-semibold py-2">Products</p>
                    <a class="block underline w-fit" href="">Pupuk DAP</a>
                    <a class="block underline w-fit" href="">Pupuk NPK</a>
                </div>
                <div class="flex-1">
                    <p class="font-semibold py-2">Contact</p>
                    <p> Jl. raya bangsal no 107 Mojokerto</p>
                    <p>saifultalun40@gmail.com</p>
                    <a class="underline" href="https://wa.me/+6281334067463">
                        <p>081334067463</p>
                    </a>
                    
                    
                </div>
            </div>
        </div>
    </section>

</body>

</html>