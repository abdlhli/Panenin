<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Panenin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="@vite(['resources/css/app.css', 'resources/js/app.js'])">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    @include('landing-navbar')

    <section id="about">
        <div class="h-screen flex justify-center items-center bg-cover bg-center"
            style="background-image: url('/assets/images/background-daun.jpg')">
            <div class="pr-80">
                <div class="text-white text-6xl font-bold pl-10 pr-96">
                    Temukan Hasil Panen Sayuran
                    Segar dan Berkualitas Tinggi
                    dari Para Petani Di Jember Pada Marketplace Kami
                </div>
                <div class="pl-10 mt-6 text-white text-base pr-96">
                    Selamat datang di ecommerce kami!, Kami adalah platform yang menghubungkan Anda dengan hasil panen
                    sayuran yang segar dan berkualitas tinggi dari
                    mahasiswa Politeknik Negeri Jember yang bertani dengan cinta dan dedikasi. Beli produk kami dan
                    dukung para mahasiswa dalam mengejar impian mereka!
                </div>
                <button
                    class="mt-12 ml-10 flex items-center border-2-white-600 hover:bg-gray-100 text-white hover:text-green-900 font-semibold py-1 px-4 mx-1 border border-gray-300 rounded shadow">
                    <span class="mx-1 pr-2">Pesan Sekarang</span>
                </button>
            </div>
        </div>
    </section>

    <section id="news">
        <div class=" flex-grow col-span-3 mt-64">
            <div class="flex flex-col items-center justify-center w-full rounded-lg bg-gray-50 hover:bg-gray-100 px-32">
                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    @foreach ($banners as $banner)
                        @if ($banner->status == 'Aktif')
                            <div class="relative h-60 overflow-hidden rounded-lg md:h-96">
                                <!-- Item -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <a href="{{ asset('assets/images/banner/' . $banner->foto_banner) }}"
                                        data-lightbox="carousel">
                                        <img src="{{ asset('assets/images/banner/' . $banner->foto_banner) }}"
                                            class="absolute block w w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </a>
                                </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>


    <section id="product">
        <h2 class="mt-48 text-center text-xl font-bold">Product List</h2>
        <div class="flex justify-center overflow-x-scroll snap-x overflow-y-hidden">
            @foreach ($product as $produk)
                <div
                    class="snap-end w-96 h-64 bg-white border border-black rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4 mx-6 mt-32 z-10">
                    <div class="flex flex-col items-center p-4">
                        <img class="h-24 w-auto" src="{{ asset('assets/images/photoproduk/' . $produk->foto_produk) }}"
                            alt="{{ $produk->nama_produk }}">
                        <h2 class="text-regular font-bold mt-2">{{ $produk->harga_produk }}</h2>
                        <h3 class="mt-2 text-sm text-center">{{ $produk->nama_produk }}</h3>
                        <button
                            class="mt-6 flex items-center border-white-600 hover:bg-gray-100 text-gray-500 hover:text-green-800 font-semibold py-1 px-4 mx-1 border border-gray-300 rounded shadow text-xs">
                            <span>Pesan sekarang</span>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <div class="flex justify-center mt-12">
        <button
            class="flex items-center border-white-600 hover:bg-gray-100 text-gray-500 hover:text-green-800 font-semibold py-1 px-4 mx-1 border border-gray-300 rounded shadow">
            <span class="mx-1 pr-2">Produk Lainnya</span>
        </button>
    </div>

    <section id="contact">
        <div class="flex justify-center">
            <div
                class="w-103 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4 mx-6 mt-32 z-10 py-4 px-8">
                <div class="flex justify-center ml-text mt-6">Find Us
                </div>
                <div class="flex justify-center text-black font-bold"> Contact Us
                </div>

                <div class="grid grid-cols-2">
                    <div class="mt-16 pl-16">
                        <div class="flex justify-start text-black font-semibold ml-5">Call Us</div>
                        <div class="flex justify-start text-black text-sm ml-5">+6281234567890</div>
                        <div class="flex justify-start text-black font-semibold mt-5 ml-5">Email Us</div>
                        <div class="flex justify-start text-black text-sm ml-5">emailankpertanian@gmail.com</div>
                        <div class="flex justify-start text-black font-semibold mt-5 ml-5">Address</div>
                        <div class="flex justify-start text-black text-sm ml-5">Jl.Mastrip PO BOX 164</div>
                    </div>
                    <div class="flex justify-center mt-16 mb-16">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.323741518599!2d113.71471857514736!3d-8.170102791860838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695cd6b26c79f%3A0xaef21b865d2b49b6!2sJl.%20Jawa%20No.48%2C%20Tegal%20Boto%20Lor%2C%20Sumbersari%2C%20Kec.%20Sumbersari%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur%2068121!5e0!3m2!1sen!2sid!4v1684414552974!5m2!1sen!2sid"
                            width="350" height="170" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
    </section>

    <section id="downloadapps">
        <div class="flex  w-full">
            <div
                class="grid grid-cols-2 w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4 mt-32 z-10 py-4 ">
                <div class="">
                    <div
                        class="w-pols bg-green-900 text-white font-bold pr-title h-24 w-full bg-green border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4 mx-6 text-2xl text-center pl-24 z-10 py-4 pr-24 px-8">
                        Lakukan dan Nikmati Pengalaman berbelanja yang Praktis dengan Aplikasi Panenin
                    </div>

                    <div class="flex justify-center text-center text-black font-regular pr-title ml-4 pl-24 text-sm">
                        Dapatkan kemudahan beli produk pertanian segar langsung dari mahasiswa polije dengan mengunduh
                        aplikasi Panenin. Nikmati pengalaman berbelanja yang mudah dan praktis hanya dengan beberapa
                        ketukan
                        jari di smartphone Anda. Yuk, Download sekarang!
                    </div>

                    <div class="flex justify-center pl-24 pt-5">
                        <img class="w-96 " src="{{ url('/assets/images/logo-daynosor.png') }}" alt="">
                    </div>

                </div>
                <div>
                    <div class="flex justify-center">
                        <img class="w-96 h-auto" src="{{ url('/assets/images/imgPhone.png') }}"
                            alt="Gambar Telepon">
                    </div>
                </div>
            </div>
        </div>


    </section>

    <div class="flex justify-center">
        <footer class="bg-green-900 rounded-lg shadow m-4 dark:bg-gray-800">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-center">
                <span class="text-sm text-white sm:text-center dark:text-white">© 2023 <a href="https://Panenin.com/"
                        class="hover:underline">Panenin</a>. Anjaz Kelazz.</span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-white dark:text-white sm:mt-0">
                    <li>
                        <a href="{{ route('termscondition') }}"
                            class="mr-4 ml-4 hover:underline md:mr-6 text-white">Terms
                            and Condition</a>
                    </li>
                    <li>
                        <a href="{{ route('privacypolicy') }}"
                            class="mr-4 hover:underline md:mr-6 text-white">Privacy
                            Policy</a>
                    </li>

                </ul>
            </div>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
                integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="{{ asset('js/ajax.js') }}"></script>

</body>
