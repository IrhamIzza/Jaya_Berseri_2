<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Hero Section --}}
    <section id='home' class="pt-32">
        <div class="flex flex-wrap">
            <div class=" relative border-t-2 border-black py-5 ">
                <div class="py-5 text-5xl font-bold text-center text-white lg:text-8xl">
                    PT JAYA BERSERI
                </div>
                <div class=" gap-8 px-10 lg:py-10 lg:grid lg:grid-flow-col">
                    <div class="text-white text-2xl ">
                        <span class="font-bold text-white">Kami membantu anda dalam menangani kelangkaan pupuk
                            subsidi.</span>
                        <p class="my-6 lg:my-10 text-justify">
                            Kami adalah perusahaan pupuk pertanian dan perkebunan yang turut
                            serta membantu petani dalam mengatasi kelangkaan pupuk subsidi
                            seiring di kuranginya kuota pupuk bersubsidi dari pemerintah.
                        </p>
                        <button class="rounded-full shadow-lg overflow-hidden border-[1px] border-white group flex mx-auto">
                            <div class="py-3 px-10 text-white text-sm font-bold group-hover:bg-green-400">Telusuri
                            </div>
                        </button>
                    </div>
                    <div class="hover:scale-125 duration-500 animate-all">
                        <img class="hidden lg:block max-h-96 max-w-48" src="../assets/img/icon2.png" alt="Pupuk NPK">
                    </div>
                    <div class="hover:scale-125 duration-500 animate-all">
                        <img class="hidden lg:block max-h-96 max-w-48" src="../assets/img/icon1.png " alt="Pupuk DAP">
                    </div>
                </div>
                <div class="bg-cover h-full w-full absolute top-0 -z-10 blur-[3px] brightness-[0.3]"
                    style="background-image: url(../assets/img/bg7.jpg)">
                </div>
            </div>
        </div>
    </section>
    {{-- About Section --}}
    {{-- <div class="w-1/3 hidden lg:flex lg:flex-wrap"> </div> --}}
    <section>
        <div class="flex flex-col lg:flex-row lg:gap-4 h-full w-full py-5 border-b-2 border-black relative">
            <div class="lg:w-1/3 w-4/5 md:w-3/4 mx-auto grid grid-flow-col gap-2 px-4">
                <div class="">
                    <img class="rounded-lg object-cover w-full h-full" src="../assets/img/vertical.jpg" alt="">
                </div>
                <div class="flex flex-wrap gap-2">
                    <img class="rounded-lg object-cover " src="../assets/img/hori1.jpg" alt="">
                    <img class="rounded-lg object-cover " src="../assets/img/hori2.jpg" alt="">
                </div>
            </div>
            <div class="lg:w-2/3 px-4">
                <p class="py-4 w-full text-white text-center font-bold text-4xl">TENTANG KAMI</p>
                <p class="w-full text-white">Kami adalah perusahaan pupuk pertanian dalam mengatasi kelangkaan
                    pupuk
                    subsidi dari pemerintah. Kami
                    menyediakan pupuk alternatif yang
                    berkualitas dengan harga yang terjangkau oleh masyarakat petani,Karakter pupuk
                    kami adalah mengandung unsur yang lengkap dan seimbang antara unsur makro dan
                    mikro sesuai dengan yang di butuhkan tanaman.</p>

                <p class="pt-5 text-white">
                    Produk kami sudah teruji sejak tahun 1988, Dari pengalaman kami di lapangan pupuk kami bisa
                    meningkat
                    hasil panen sekitar 20% . Tentu nya dengan standar dosis kami sesuai dengan jenis tanaman. Kami
                    berkomitmen memberikan kepuasan petani berupa kesehatan tanaman dan peningkatan hasil panen.
                    Kami
                    memberikan garansi mutu yang bisa di tuangkan dalam perjanjian tertulis dengan petani/konsumen.
                    Dengan
                    catatan bukan di atas tanah yang selalu mengeluarkan air dan tidak bisa mengering ( bahasa Jawa
                    tanah
                    becer)
                </p>
            </div>
            <div class="bg-cover h-full w-full absolute top-0 -z-10 brightness-[0.3]"
                style="background-image: url(../assets/img/bg9.jpg)">
            </div>
        </div>
        {{-- Kelebihan --}}
        <div class="bg-gray-300 w-full h-full px-5 py-8 lg:px-14">
            <div class="font-bold text-5xl text-center mb-4">
                Kelebihan
            </div>
            <div class="flex flex-col md:flex-row gap-3 lg:gap-8">
                <div class="mx-auto border bg-white py-7 flex-1">
                    <img class="w-24 h-24 mb-2 mx-auto rounded-full object-cover " src="../assets/img/serap.png" alt="">
                    <p class="text-center text-2xl font-bold">
                        Mudah Larut
                    </p>
                    <p class="px-8 py-3 text-center">
                        Mudah larut sehingga mudah di serap oleh tanaman sehingga bisa maximal
                        penyerapan tanaman
                    </p>
                </div>
                <div class="mx-auto border bg-white py-7 flex-1">
                    <img class="w-24 h-24  mb-2 mx-auto rounded-full object-cover " src="../assets/img/meningkatkan.png"
                        alt="">
                    <p class="text-center text-2xl font-bold">
                        Meningkatkan Hasil
                    </p>
                    <p class="px-8 py-3 text-center">
                        Meningkatkan hasil panen karena seluruh bulir terisi penuh dan tidak ada
                        bulir yang hampa/ kosong
                    </p>
                </div>
                <div class="mx-auto border bg-white py-7 flex-1">
                    <img class="w-24 h-24 mb-2 mx-auto rounded-full object-cover " src="../assets/img/kandungan.png"
                        alt="">
                    <p class="text-center text-2xl font-bold">
                        Kandungan Seimbang
                    </p>
                    <p class="px-8 py-3 text-center">
                        Seimbang antara unsur makro dan mikro
                        membuat tanah menjadi gembur sehingga oksigen bisa leluasa masuk dan
                        pernafasan tanaman bisa maksimal
                    </p>
                </div>
            </div>
        </div>
        {{-- Produk --}}
        <div class="w-full h-full max-h-[400px] gap-4 py-10 px-4 flex md:px-16 md:gap:10">
            <div class="w-2/3 md:w-9/12 lg:w-3/4">
                <p class="font-bold text-5xl sm:text-center lg:mt-4">PUPUK DAP</p>
                <p class="pb-6 mt-5 items-center md:text-base lg:text-lg ">
                    Pupuk DAP (Diammonium Phosphate) adalah pupuk anorganik yang mengandung dua unsur hara utama,
                    Mengandung 18% Nitrogen (N) untuk pertumbuhan daun & batang
                    <span class="hidden md:inline">, serta 46% Fosfor (P) untuk
                        mempercepat perkembangan akar, bunga, dan buah. Pupuk DAP juga gampang larut dalam air
                        memberikan hasil yang lebih cepat. </span>
                </p>
                <button class="flex mx-auto rounded-full shadow-lg overflow-hidden border-[1px] border-black group">
                    <div class="py-3 px-10 text-black text-sm font-bold group-hover:bg-green-400">Telusuri
                    </div>
                </button>
            </div>
            <div class="mt-8 w-1/3 md:w-3/12 lg:w-1/4 hover:scale-110 animate-all duration-500 ">
                <img class="w-full h-full" src="../assets/img/icon1.png" alt="Pupuk DAP">
            </div>
        </div>

        <div class="w-full h-full max-h-[400px] bg-gray-300 gap-4 py-10 px-4 flex md:px-16 md:gap:10">
            <div class="mt-8 w-1/3 md:w-3/12 lg:w-1/4 hover:scale-110 animate-all duration-500 ">
                <img class="w-full h-full" src="../assets/img/icon2.png" alt="Pupuk NPK">
            </div>
            <div class="w-2/3 md:w-9/12 lg:w-3/4">
                <p class="font-bold text-5xl sm:text-center lg:mt-4">PUPUK NAP</p>
                <p class="pb-6 mt-5 items-center md:text-base lg:text-lg ">
                    Pupuk NAP (Nitrogen Ammonium Phosphate) adalah jenis pupuk majemuk yang mengandung dua unsur hara
                    utama, yaitu Nitrogen (N) dan Fosfor (P). Pupuk ini digunakan untuk meningkatkan pertumbuhan tanaman
                    <span class="hidden md:inline">dengan memberikan nutrisi esensial yang dibutuhkan selama masa
                        pertumbuhan. Dengan pupuk NAP, hasil panen lebih berkualitas dan melimpah.</span>
                </p>
                <button class="flex mx-auto rounded-full shadow-lg overflow-hidden border-[1px] border-black group">
                    <div class="py-3 px-10 text-black text-sm font-bold group-hover:bg-green-400">Telusuri
                    </div>
                </button>
            </div>
        </div>
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
                    <a class="block underline" href="">Pupuk DAP</a>
                    <a class="block underline" href="">Pupuk NPK</a>
                </div>
                <div class="flex-1">
                    <p class="font-semibold py-2">Contact</p>
                    <p> Jl. raya bangsal no 107 Mojokerto</p>
                    <p>saifultalun40@gmail.com</p>
                    <p>081334067463</p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>