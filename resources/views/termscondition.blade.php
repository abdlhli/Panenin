<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Panenin - Terms and Condition</title>
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
    <div class="relative mt-16">
        <img class="h-56 w-full absolute inset-0" src="assets/images/bg-daun2.png" alt="bg header">
        <div class="flex justify-center">
            <div
                class="w-102 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4 mx-6 mt-32 z-10">
                <!-- Konten di dalam div ini -->
                <h2 class="flex justify-center text-2xl font-bold mb-4 mt-5">Terms and Condition</h2>
                <h3 class="flex justify-center text-sm">Updated 06 April 2023</h3>
                <p class="text-justify px-5 mt-5">
                    Syarat dan ketentuan ini mengatur penggunaan layanan kami oleh pengguna. Dengan menggunakan layanan
                    kami,pengguna dianggap telah membaca,memahami, dan menyetujui Syarat dan Ketentuan berikut ini.
                </p>
                <h4 class="text-left text-lg font-bold pl-5 mt-5">Layanan</h4>
                <p class="text justify-center px-5">Kami menyediakan layanan penjualan hasil panen sayuran dari hasil
                    tani penduduk lokal jember
                </p>
                <h4 class="text-left text-lg font-bold pl-5 mt-5">Harga</h4>
                <p class="text justify-center px-5">Harga produk yang ditawarkan dapat berubah sewaktu waktu tanpa
                    pemberitahuan terlebih dahulu. Harga yang ditampilkan tidak termasuk biaya pengiriman
                </p>
                <h4 class="text-left text-lg font-bold pl-5 mt-5">Pembayaran</h4>
                <p class="text justify-center px-5">Pembayaran dapat dilakukan dengan menggunakan metode pembayaran yang
                    tersedia pada halaman pembayaran.
                </p>
                <h4 class="text-left text-lg font-bold pl-5 mt-5">Pengiriman</h4>
                <p class="text justify-center px-5">Produk akan dikirimkan saat itu juga setelah pembayaran diterima
                    apabila produk memang tersedia. Biaya pengiriman akan ditanggung oleh pengguna dan ditampilkan pada
                    halaman pembayaran
                </p>
                <h4 class="text-left text-lg font-bold pl-5 mt-5">Perubahan syarat dan ketentuan</h4>
                <p class="text justify-center px-5">Kami dapat mengubah Kebijakan Privasi ini dari waktu ke waktu.
                    Perubahan akan diberitahukan pada
                    halaman Kebijakan Privasi kami. Dengan terus menggunakan layanan kami setelah perubahan,
                    pengguna menyetujui Kebijakan Privasi yang telah diubah
                </p>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>


</body>
