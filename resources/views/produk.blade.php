@extends('layouts.app')
@section('title','Produk')
@section('content')
<div class="bg-gray-300 w-full h-full mt-4 p-6">
    <div class="text-4xl md:text-5xl font-bold text-center py-4">PUPUK NPK</div>
    <div class="flex flex-col md:flex-row gap-4 lg:px-10">
        <div class="w-[35vh] max-w-[40vh] md:w-1/5 mx-auto object-cover hover:scale-110 duration-500 animate-all">
            <img src="../assets/img/Pupuk_NPK_Produk.jpeg" class="rounded-md" alt="">
        </div>
        <p class="md:w-4/5 lg:text-xl">
            Pupuk NPK adalah adalah pupuk majemuk yang mengandung tiga unsur sekaligus. Unsur ini merupakan gabungan
            dari pupuk tunggal, yaitu N (Nitrogen), P (Phospat), dan, K (Kalium). Gabungan dari ketiga unsur inilah yang
            membuat pupuk ini disebut NPK.
            Selain ketiga unsur hara makro, pupuk NPK juga mengandung 2 unsur hara mikro.
            Unsur-unsur yang terdapat dalam pupuk NPK dapat membantu pertumbuhan vegetatif, pertumbuhan akar, dan
            pembungaan. Pupuk NPK menjadi pupuk favorit dari para petani. Pupuk NPK yang ada di pasaran, sudah dibuat
            sesuai dengan kadar dan kombinasi yang beraneka ragam.
        </p>
    </div>
</div>
{{-- KANDUNGAN --}}
<div class="py-8 md:mt-6">
    <div class="text-xl font-bold text-center md:text-4xl lg:text-[44px]">UNSUR YANG TERKANDUNG DI DALAMNYA</div>
    <div class="grid grid-flow-col py-6 place-items-center place-content-evenly">
        <div class="grid grid-flow-col gap-5 md:gap-10">
            
            <div class="md:text-3xl ">
                <div class="text-produk-kandungan">N: 14,46 %</div>
                <div class="text-produk-kandungan">P: 14,74 %</div>
                <div class="text-produk-kandungan">S: 3.50 %</div>
            </div>
            <div  class="md:text-3xl">
                <div class="text-produk-kandungan">Cu: 9,80 PPM</div>
                <div class="text-produk-kandungan">B: 30,01 PPM</div>
                <div class="text-produk-kandungan">Mo: 0,15 PPM</div>
            </div>
            <div  class="md:text-3xl">
                <div class="text-produk-kandungan">K: 17,10 %</div>
            </div>
        </div>
        <div class="w-[15vh] md:w-full">
            <img src="../assets/img/Butir_NPK.PNG" alt="">
        </div>
    </div>
</div>


<div class="p-6 bg-gray-300 ">
    <div class="text-2xl font-bold">MISSION, VISION & VALUES</div>
    <div class="flex justify-between flex-col">
        <div class="relative">
            <div class="bg-red-500 absolute ">1.</div>
            <div class=" h-full w-full bg-white rounded-md py-2 px-5">
                Mudah larut sehingga mudah diserap tanah
            </div>
        </div>
        <div class="">
            <div>
                2. Terdapat unsur yang lengkap
            </div>
        </div>
        <div class="">
            <div>
                3. Dapat memperbaiki sifat fisik juga bioglogis tanah / Tanah menjadi gembur
            </div>
        </div>
        <div class="">
            <div>
                4. Dapat meningkatkan produksi hasil pertanian
            </div>
        </div>
    </div>
</div>
@endsection