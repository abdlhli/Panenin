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

    <section>
        <div class="h-screen flex justify-center items-center bg-cover bg-center"
            style="background-image: url('/assets/images/background-daun.jpg')">
            <div class="pr-80">
                <div class="text-white text-4xl font-bold pl-10 pr-title">
                    Temukan Hasil Panen Sayuran Segar dan Berkualitas Tinggi dari Para Petani Di Jember Pada
                    Marketplace Kami
                </div>
                <div class="ml-4 mt-2 text-white text-sm">
                    Selamat datang di ecommerce kami. Kami adalah platform yang menghubungkan Anda dengan hasil panen
                    sayuran yang segar dan berkualitas tinggi dari Para Petani Jember yang bertani
                    dengan cinta dan dedikasi. Beli produk kami dan dukung para petani dalam menjual produk mereka!
                </div>
                <button
                    class="mt-12 flex items-center border-2-white-600 hover:bg-gray-100 text-gray-500 hover:text-cyan-500 font-semibold py-1 px-4 mx-1 border border-gray-300 rounded shadow">
                    <span class="mx-1 pr-2">Pesan Sekarang</span>
                </button>
            </div>
        </div>
    </section>

    <div>
        <div class="relative h-56 rounded-lg md:h-96">
            <a
                href="assets/images/banner/1682913284_ashwathama_water_gushing_through_a_large_door_way_into_a_rock_w_cef9c206-f6ad-492c-beb2-549f8561b018.png">
                <img src="assets/images/banner/1682913715_GhostWind_landscape_Arizona_mesa_canyon_rays_of_shimmering_ligh_eaa78443-594e-47f5-919b-66e0d1c9bad1.png"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </a>
        </div>
    </div>

    <section>
        <div class="h-screen flex justify-center items-center bg-white">
            <div class="items-center text-black font-bold">Product List</div>
        </div>
    </section>

    <section>
        <div class="h-80 flex justify-center items-center bg-blue-700">
            <div class="hover:bg-slate-800 text-black">Carousel</div>
        </div>
    </section>

    <section>
        <div class="flex items-center">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.323741518599!2d113.71471857514736!3d-8.170102791860838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695cd6b26c79f%3A0xaef21b865d2b49b6!2sJl.%20Jawa%20No.48%2C%20Tegal%20Boto%20Lor%2C%20Sumbersari%2C%20Kec.%20Sumbersari%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur%2068121!5e0!3m2!1sen!2sid!4v1684414552974!5m2!1sen!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
