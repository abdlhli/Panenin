<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Panenin - Privacy Policy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="@vite(['resources/css/app.css', 'resources/js/app.js'])">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

 <body>

@include('landing-navbar')

<section>
    <div class="relative mt-16">
        <img class="h-56 w-full absolute inset-0" src="assets/images/bg-daun2.png" alt="bg header">
        <div class="flex justify-center">
            <div class="w-102 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4 mx-6 mt-32 z-10">
                <h2 class="flex justify-center text-2xl font-bold mb-4 mt-5">Privacy Policy</h2>
                <h3 class="flex justify-center text-sm">Updated 06 April 2023</h3>
                <p class="text-justify px-5 mt-5">
                    Kami sangat memperhatikan privasi pengguna kami dan berkomitmen untuk melindungi informasi pribadi yang diberikan kepada kami. Dalam Kebijakan Privasi ini, kami menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi pengguna kami.
                </p>
                <h4 class="text-left text-lg font-bold pl-5 mt-5">Informasi yang kami kumpulkan</h4>
                <p class="text justify-center px-5">Kami hanya mengumpulkan informasi pribadi yang diberikan oleh pengguna pada saat pendaftaran 
                    atau ketika menggunakan layanan kami. Informasi yang kami kumpulkan dapat mencakup nama, 
                    alamat email, alamat pengiriman, nomor telepon, dan informasi pembayaran.
                </p>
                <h4 class="text-left text-lg font-bold pl-5 mt-5">Penggunaan Informasi</h4>
                <p class="text justify-center px-5">Kami menggunakan informasi yang dikumpulkan untuk memberikan layanan kepada pengguna dan 
                    mengelola akun pengguna. Kami juga dapat menggunakan informasi untuk berkomunikasi dengan 
                    pengguna tentang produk dan layanan kami, serta untuk tujuan pemasaran dan penelitian.
                </p>
                <h4 class="text-left text-lg font-bold pl-5 mt-5">Bagaimana Kami Melindungi Informasi</h4>
                <p class="text justify-center px-5">Kami menggunakan langkah-langkah keamanan yang tepat untuk melindungi informasi pribadi 
                    pengguna kami. Informasi yang dikumpulkan disimpan di server yang aman dan dienkripsi dengan 
                    teknologi yang terbaru. Selain itu, kami tidak akan membagikan informasi pribadi pengguna kami 
                    dengan pihak ketiga tanpa izin pengguna.
                                        
                </p>
                <h4 class="text-left text-lg font-bold pl-5 mt-5">Perubahan Kebijakan Privasi</h4>
                <p class="text justify-center px-5">Kami dapat mengubah Kebijakan Privasi ini dari waktu ke waktu. Perubahan akan diberitahukan pada 
                    halaman Kebijakan Privasi kami. Dengan terus menggunakan layanan kami setelah perubahan, 
                    pengguna menyetujui Kebijakan Privasi yang telah diubah.
                </p>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/ajax.js') }}"></script>

</body>