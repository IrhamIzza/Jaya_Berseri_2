@extends('layouts.app')
@section('title','Produk')
@section('content')
<div class="bg-gray-300 w-full h-full mt-4 p-6 lg:px-32">
    <div class="text-4xl md:text-5xl font-bold text-center py-4">PUPUK DAP</div>
    <div class="flex flex-col md:flex-row gap-4 lg:px-10">
        <div class="w-[35vh] max-w-[40vh] md:w-1/5 mx-auto object-cover hover:scale-110 duration-500 animate-all">
            <img src="../assets/img/Pupuk_DAP - Copy.jpeg" class="rounded-md" alt="">
        </div>
        <p class="md:w-4/5 lg:text-xl">
            Pupuk DAP adalah pupuk yang mengandung unsur lengkap baik mikro maupun non mikro yang dibutuhkan setiap tanaman. DAP
            tergolong mudah larus sehingga cepat diserap tanaman
            Salah satu jenis pupuk yang umum digunakan adalah diamonium fosfat atau pupuk DAP. Pupuk DAP adalah pupuk
            majemuk buatan dengan mengandung dua unsur hara Nitrogen (N) dan Fosfor (P2O5) dengan rumus kimia
            (NH4)2HPO4.
        </p>
    </div>
</div>
{{-- KANDUNGAN --}}
<div class="py-8 md:mt-6">
    <div class="text-xl font-bold text-center md:text-4xl lg:text-[44px]">UNSUR YANG TERKANDUNG DI DALAMNYA</div>
    <div class="grid grid-flow-col py-6 place-items-center place-content-evenly">
        <div class="grid grid-flow-col gap-5 md:gap-10">

            <div class="text-sm sm:text-base md:text-3xl ">
                <div class="text-produk-kandungan">N: 11%</div>
                <div class="text-produk-kandungan">P: 6,26%</div>
                <div class="text-produk-kandungan">S: 1,36%</div>
            </div>
            <div class="text-sm sm:text-base md:text-3xl">
                <div class="text-produk-kandungan">b : 78 PPM</div>
                <div class="text-produk-kandungan">Fe: 0,15%</div>
                <div class="text-produk-kandungan">Cn: 0,04%</div>
            </div>
            <div class="text-sm sm:text-base md:text-3xl">
                <div class="text-produk-kandungan">Cu: 1,59%</div>
                <div class="text-produk-kandungan">Mn: 0,18%</div>
            </div>
        </div>
        <div class="w-[10vh] md:w-full  ">
            <img class=" border-2 border-gray-300 rounded-full" src="../assets/img/DAP/butirDAP.jpeg" alt="">
        </div>
    </div>
</div>


<div class="p-6 bg-gray-300 lg:px-36">
    <div class="text-2xl md:text-4xl font-bold text-center">KEUNTUNGAN PUPUK DAP</div>
    <div class="mt-3 flex justify-between flex-col gap-2 ">
        <div class="relative pt-4 pl-4">
            <div class="icon-list  ">
                <span class="text-xl lg:text-2xl bottom-0 right-2 absolute">1</span>
            </div>
            <div class=" h-full w-full bg-white rounded-md py-2 px-7 lg:text-xl">
                Mudah larut sehingga mudah diserap tanaman
            </div>
        </div>
        <div class="relative pt-4 pl-4">
            <div class="icon-list  ">
                <span class="text-xl lg:text-2xl  bottom-0 right-2 absolute">2</span>
            </div>
            <div class=" h-full w-full bg-white rounded-md py-2 px-7 lg:text-xl">
                Terdapat unsur yang lengkap
            </div>
        </div>
        <div class="relative pt-4 pl-4">
            <div class="icon-list  ">
                <span class="text-xl lg:text-2xl bottom-0 right-2 absolute">3</span>
            </div>
            <div class=" h-full w-full bg-white rounded-md py-2 px-7 lg:text-xl">
                Dapat memperbaiki sifat fisik juga bioglogis tanah / Tanah menjadi gembur
            </div>
        </div>
        <div class="relative pt-4 pl-4">
            <div class="icon-list  ">
                <span class="text-xl lg:text-2xl bottom-0 right-2 absolute">4</span>
            </div>
            <div class=" h-full w-full bg-white rounded-md py-2 px-7 lg:text-xl">
                Dapat meningkatkan produksi hasil pertanian
            </div>
        </div>
    </div>
</div>

<div class="p-4 lg:px-40 md:px-10">
    <div class="text-2xl md:text-4xl font-bold text-center">JENIS JENIS TANAMAN </div>
    <div class="grid grid-flow-col grid-rows-4 md:grid-rows-3 py-6 lg:text-2xl gap-1 md:items-center ">
        <div class="relative pr-2 ">1. Tanamanan Pangan <span class="right-[2px] absolute">:</span></div>
        <div class="relative pr-2 self-start row-span-2 md:row-span-1">2. Tanamanan Palawija <span
                class="right-[2px] absolute">:</span></div>
        <div class="relative pr-2 ">3. Tanamanan Perkebunan <span class="right-[2px] absolute">:</span></div>
        <div class="relative ">Padi, Kedelai, Jagung</div>
        <div class="relative row-span-2 md:row-span-1"> Semangka, Cabe, Tomat, Melon, Bawang Merah/Putih, Kentang </div>
        <div class="relative "> Tebu, Kopi, Kelapa Sawit, Kako</div>
    </div>
</div>
<div class="p-4 lg:px-40 md:px-10">
    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 md:gap-6">
        <div><img class="aspect-[3/2] w-full object-cover border-[6px] border-green-500 rounded-md"
                src="../assets/img/NPK/npk1.jpeg" alt=""></div>
        <div><img class="aspect-[3/2] w-full object-cover border-[6px] border-green-500 rounded-md"
                src="../assets/img/NPK/npk2.jpeg" alt=""></div>
        <div><img class="aspect-[3/2] w-full object-cover border-[6px] border-green-500 rounded-md"
                src="../assets/img/NPK/npk3.jpeg" alt=""></div>
        <div><img class="aspect-[3/2] w-full object-cover border-[6px] border-green-500 rounded-md"
                src="../assets/img/NPK/npk4.jpeg" alt=""></div>
        <div><img class="aspect-[3/2] w-full object-cover border-[6px] border-green-500 rounded-md"
                src="../assets/img/NPK/npk5.jpeg" alt=""></div>
        <div><img class="aspect-[3/2] w-full object-cover border-[6px] border-green-500 rounded-md"
                src="../assets/img/NPK/npk6.jpeg" alt=""></div>
    </div>
    @endsection