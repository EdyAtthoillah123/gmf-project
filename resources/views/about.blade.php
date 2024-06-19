<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

    <title>Gumukmas Multifarm - Kemitraan Domba dan Pakan Ternak Berkualitas</title>
    <meta property="og:title" content="Gumukmas Multifarm - Kemitraan Domba dan Pakan Ternak Berkualitas">
    <meta property="og:description"
        content="Bergabunglah dengan Gumukmas Multifarm untuk kemitraan domba, pakan ternak berkualitas, dan layanan terbaik di Jember, Jawa Timur.">
    <meta name="description"
        content="Gumukmas Multifarm menyediakan kemitraan domba, domba pejantan & indukan unggul, pengadaan bahan baku pakan ternak, dan produksi pakan ternak ruminansia di Jember, Jawa Timur. Hubungi kami untuk kemitraan sukses.">
    <meta name="keywords"
        content="Gumukmas Multifarm, kemitraan domba, domba pejantan, indukan unggul, pakan ternak, ruminansia, Jember, Jawa Timur, peternakan domba, kemitraan ternak, pakan ternak berkualitas, pengadaan pakan ternak, produksi pakan ternak, domba unggul, domba berkualitas, pakan ternak ruminansia, kemitraan sukses, peternak lokal, dukungan peternak, bimbingan kemitraan, ternak produktif, domba sehat, bahan baku pakan, pakan ruminansia, domba Jember, ternak Jember, domba Jawa Timur, ternak Jawa Timur, peternak Jawa Timur, supplier pakan ternak, distributor pakan ternak, penyedia pakan ternak, pakan ternak alami, pakan ternak sehat, pakan ternak efisien, produksi pakan berkualitas, ternak sehat, ternak unggul, ternak berkualitas, peternak unggul, peternakan modern, peternakan berkelanjutan, bisnis peternakan, investasi peternakan, usaha peternakan, pakan ternak murah, pakan ternak terbaik, nutrisi ternak, kebutuhan ternak, pakan ternak alami, kemitraan domba sukses, manajemen peternakan, agribisnis, agrikultur, peternakan Indonesia, ternak Indonesia, pasar ternak, peluang peternakan, ternak ruminansia, pakan ternak komplit, komposisi pakan ternak, formulasi pakan ternak, inovasi pakan ternak, teknologi peternakan, perkembangan peternakan, kemitraan peternakan, pengembangan peternakan, jasa peternakan, layanan peternakan, komunitas peternakan, industri peternakan, jaringan peternakan, kesehatan ternak, produktivitas ternak, perawatan ternak, pengelolaan ternak, sumber daya ternak, kualitas pakan ternak, standar pakan ternak, suplai pakan ternak, solusi pakan ternak, kebutuhan pakan ternak, stok pakan ternak, bahan pakan ternak, distribusi pakan ternak, pakan ternak premium, pakan ternak grosir, peternakan modern, tren peternakan, strategi peternakan, efisiensi peternakan, peternak sukses, peluang usaha peternakan, perkembangan agribisnis, pasar agrikultur, agrikultur Jawa Timur, peluang bisnis Jember, potensi peternakan, ternak Indonesia, dukungan peternak lokal, mitra peternak, usaha ternak, pengembangan ternak, bisnis ternak, pakan ternak lokal, peternakan lokal, ternak skala kecil, ternak skala besar, peternak mandiri, mitra peternak, pengusaha ternak">
    <meta name="author" content="Gumukmas Multifarm">
</head>

<body class="" style="background-color: #F5F5F5;">
    <div class="container">
        @livewire('components.header')
    </div>
    <section class="bg-white ">
        <div class="container mx-auto flex flex-col px-8 md:flex-row md:justify-between">
            <!-- Text Content -->
            <div class="md:mb-0 md:w-1/3">
                <h1 class="text-h1 font-bold text-dgreen mb-4 mt-8 lg:mb-8 lg:mt-16  lg:text-h1 md:text-h2 ">Selamat Datang di GMF 👋</h1>

                <p class="text-title2 text-black mb-12 md:text-title3 lg:text-title2">
                    Gumukmas Multifarm (GMF) telah menjadi pelopor dalam industri peternakan domba sejak didirikan.
                    Kami hadir untuk memberikan solusi terbaik dan berkelanjutan bagi para peternak dan mitra kami.
                </p>
                <a href="#" class="py-3 px-9 bg-dgreen lg:text-title2 md:text-title3 text-lwhite rounded-xl hover:bg-green-600">
                    {{ __('messages.start') }}
                </a>
            </div>
            <!-- Image Content -->
            <div class="md:1/3">
                <div class="relative md:static">
                    <img src="{{ asset('images/about/man.png') }}" alt="Hero Image"
                        class="w-full h-full mt-8 lg:max-w-[824px] lg:max-h-[661px] lg:mt-24 md:max-w-[424px] md:max-h-[351px] md:absolute md:top-4 md:left-1/2 md:transform md:-translate-x-1/2 ">
                </div>
            </div>
            <!-- Extra Div for Alignment -->
            <div class="flex flex-col items-center lg:items-end justify-end md:w-1/3 relative">
                <div class="relative py-3 px-3 bg-dgreen text-title2 text-lwhite rounded-xl mt-4 lg:mb-48 lg:mt-64">
                    <p class="top-2 left-2 text-white text-body font-bold mb-3">Mitra Terdaftar</p>
                    <div class="flex items-center">
                        <div class="relative flex -space-x-2">
                            <div class="h-7 w-7 rounded-full overflow-hidden border-2 border-white">
                                <img src="{{ asset('images/landingpage/herobackground.png') }}" alt="Photo of a person"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="h-7 w-7 rounded-full overflow-hidden border-2 border-white">
                                <img src="{{ asset('images/landingpage/herobackground.png') }}" alt="Photo of a person"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="h-7 w-7 rounded-full overflow-hidden border-2 border-white">
                                <img src="{{ asset('images/landingpage/herobackground.png') }}" alt="Photo of a person"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="h-7 w-7 rounded-full overflow-hidden border-2 border-white">
                                <img src="{{ asset('images/landingpage/herobackground.png') }}" alt="Photo of a person"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="h-7 w-7 rounded-full overflow-hidden border-2 border-white">
                                <img src="{{ asset('images/landingpage/herobackground.png') }}" alt="Photo of a person"
                                    class="object-cover w-full h-full">
                            </div>
                        </div>
                        <div class="ml-4 flex items-center">
                            <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke="none"
                                    d="M12 .587l3.668 7.568 8.332 1.151-6.001 5.849 1.416 8.268L12 18.897l-7.415 4.526 1.416-8.268-6.001-5.849 8.332-1.151z" />
                            </svg>
                            <span class="text-white text-body font-medium ml-2">465+</span>
                        </div>
                    </div>
                </div>
                <p class="mb-14 mt-8 lg:ml-28">Berdiri di Kabupaten Jember, tepatnya di Jalan Sultan Agung No. 42 Dusun Krajan, Desa Purwosari, Kecamatan Gumukmas.</p>
            </div>
        </div>
    </section>

    {{-- Start Section Mitra --}}
    <section id="blog" class="py-16 relative">
        <div class="container mx-auto relative z-10">
            <div class="flex items-center justify-center">
                <div class="text-center">
                    <h1 class="text-h3 font-bold xl:text-h2 text-dgreen">{{ __('messages.partner') }}</h1>
                    <h1 class="text-h3 font-bold xl:text-h2 text-dgreen mb-4">{{ __('messages.partner2') }}</h1>
                    <p class="text-title2 text-black mb-12">{{ __('messages.partnerdescription') }}</p>
                    <div class="flex items-center justify-center">
                        <div
                            class="flex items-center justify-between rounded-md border border-gray-300 px-4 py-3 md:w-[558px]">
                            <input type="text" placeholder="{{ __('messages.partneremail') }}"
                                class="text-black font-bold w-full mr-3 bg-transparent border-none placeholder-gray-400 focus:outline-none focus:ring-0">
                            <button
                                class="px-4 py-2 rounded-md bg-dgreen text-white hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300">
                                @if (session('locale') == 'en')
                                    Send
                                @else
                                    Kirim
                                @endif
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section Mitra --}}
    @livewire('components.footer')
    @vite('resources/js/app.js')
    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
