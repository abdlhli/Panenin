<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title> Panenin </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="@vite(['resources/css/app.css', 'resources/js/app.js'])">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')

</head>

<section>
    <div class="h-screen flex justify-center items-center"
        style="background-image: url('/assets/images/background-daun.png')">
        <div class="bg-cover bg-center pr-80">
            <div class="text-white text-4xl font-bold pl-10 pr-title">
                Temukan Hasil Panen Sayuran Segar dan Berkualitas Tinggi dari Mahasiswa Politeknik Negeri Jember di
                Marketplace Kami
            </div>
            <div class="ml-4">
                <div class="mt-2 text-white text-sm">
                    Selamat datang di ecommerce kami,Kami adalah platform yang menghubungkan Anda dengan hasil panen
                    sayuran yang segar dan berkualitas tinggi dari mahasiswa Politeknik Negeri Jember yang bertani
                    dengan cinta dan dedikasi. Beli produk kami dan dukung para mahasiswa dalam mengejar impian
                    mereka!
                </div>
                <button
                    class="mt-12 flex items-center border-2-white-600 hover:bg-gray-100 text-gray-500 hover:text-cyan-500 font-semibold py-1 px-4 mx-1 border border-gray-300 rounded shadow">
                    <span class="mx-1 pr-2">Pesan Sekarang</span>
                </button>
            </div>
        </div>
    </div>
</section>

<section>
    <div>
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="{{ url('assets/images/banner/1682913284_ashwathama_water_gushing_through_a_large_door_way_into_a_rock_w_cef9c206-f6ad-492c-beb2-549f8561b018.png') }}"
                        data-lightbox="carousel">
                        <img src="{{ url('assets/images/banner/1682913715_GhostWind_landscape_Arizona_mesa_canyon_rays_of_shimmering_ligh_eaa78443-594e-47f5-919b-66e0d1c9bad1.png') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </a>
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
    </div>
</section>


<section>
    <div class="h-screen flex justify-center items-center bg-white">
        <div class="items-center text-black font-bold">Product List
        </div>
    </div>
</section>


<section>
<div id="carousel-container" class="swiper-container">
    <div class="swiper-wrapper">
        <!-- Daftar produk -->
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<div class="swiper-wrapper">
    <div class="swiper-slide">
        <!-- Konten produk 1 -->
    </div>
    <div class="swiper-slide">
        <!-- Konten produk 2 -->
    </div>
    <!-- Tambahkan lebih banyak swiper-slide untuk produk lainnya -->
</div>
</section>

<div class="flex justify-center items-center">
    <button
        class="mt-12 flex items-center border-2-white-600 hover:bg-gray-100 text-gray-500 hover:text-cyan-500 font-semibold py-1 px-4 mx-1 border border-gray-300 rounded shadow">
        <span class="mx-1 pr-2">Produk Lainnya</span>
    </button>
</div>

<section>
    <div class="flex justify-center ml-text mt-6">Find Us
    </div>
    <div class="flex justify-center text-black font-bold"> Contact Us
    </div>

    <div class="grid grid-cols-2 gap-5">
        <div>
            <div class="flex justify-start text-black font-semibold ml-5">Call Us</div>
            <div class="flex justify-start text-black text-sm ml-5">+6281234567890</div>
            <div class="flex justify-start text-black font-semibold mt-5 ml-5">Email Us</div>
            <div class="flex justify-start text-black text-sm ml-5">emailankpertanian@gmail.com</div>
            <div class="flex justify-start text-black font-semibold mt-5 ml-5">Address</div>
            <div class="flex justify-start text-black text-sm ml-5">Jl.Mastrip PO BOX 164</div>
        </div>
        <div class="flex justify-end mt-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.323741518599!2d113.71471857514736!3d-8.170102791860838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695cd6b26c79f%3A0xaef21b865d2b49b6!2sJl.%20Jawa%20No.48%2C%20Tegal%20Boto%20Lor%2C%20Sumbersari%2C%20Kec.%20Sumbersari%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur%2068121!5e0!3m2!1sen!2sid!4v1684414552974!5m2!1sen!2sid"
                width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<section>
    <div class="h-12 flex justify-start mt-6 ml-4">
        <div class="w-pols bg-green-900 text-white font-bold pr-title">
            Lakukan dan Nikmati Pengalaman berbelanja yang Praktis dengan Aplikasi Panenin
        </div>
    </div>

    <div class="grid grid-cols-2 gap-5">
        <div>
            <div class="flex justify-start text-black font-semibold pr-title ml-4 text-sm">Dapatkan kemudahan beli produk
                pertanian segar
                langsung dari mahasiswa polije dengan mengunduh aplikasi Panenin,
                Nikmati pengalaman berbelanja yang mudah dan praktis
                hanya dengan beberapa ketukan jari di smartphone Anda. Yuk, Download sekarang!
            <img class="justify-end w-32 h-auto" src="{{ url('/assets/images/imgPhone.png') }}" alt="Gambar Telepon">
            </div>
        </div>
    </div>
</section>

<div class="flex justify-center">
    <footer class="bg-green-900 rounded-lg shadow m-4 dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-white sm:text-center dark:text-white">© 2023 <a href="https://Panenin.com/"
                    class="hover:underline">Panenin</a>. All Rights Reserved.</span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-white dark:text-white sm:mt-0">
                <li>
                    <a href="{{ route('termscondition') }}" class="mr-4 hover:underline md:mr-6 text-white">Terms and Condition</a>
                </li>
                <li>
                    <a href="privacypolicy.blade.php" class="mr-4 hover:underline md:mr-6 text-white">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 text-white">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline text-white">Contact</a>
                </li>
            </ul>
        </div>
    </footer>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/ajax.js') }}"></script>

</body>