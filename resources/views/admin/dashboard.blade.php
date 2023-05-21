<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Admin - Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="@vite(['resources/css/app.css', 'resources/js/app.js'])">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body style="margin-top: 64px;">

    @include('components.navbar')

    @include('components.sidebar')

    <!-- Ucapan selamat Datang Dan Hari Ini -->
    <div class="pl-4 sm:ml-64">
        <div class="p-4 mt-14">
            <h2 data-docsearch-ignore="true"
                class="text-slate-900 text-xl tracking-tight font-bold mb-3 dark:text-slate-200">
                Haloo!, {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}
            </h2>
            <div class="text-neutral-600 font-medium flex justify-between">
                <span class="text-left">
                    Selamat datang kembali! Semoga hari Anda menyenangkan.
                </span>
                <span class="text-right">
                    Hari Ini ({{ now()->format('l, d F Y') }})
                </span>
            </div>
        </div>

        <!-- Kotak Pertama dengan isi foto ilustrasi dan suhu tempat -->
        <div class="grid grid-cols-2 gap-4">
            <!-- grid kiri -->
            <div class=" p-4">
                <!-- content grid kiri -->
                <div class="rounded-lg shadow-sm bg-[#B5D9AC] border pt-6 pl-6 pr-6">
                    <div class="group flex justify-end items-center">
                        <span>
                            @if ($isDaytime)
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="5" />
                                    <path
                                        d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            @endif
                        </span>


                        <span class="pl-5 text-2xl font-semibold text-white">
                            {{ $temperature }}&deg;C
                        </span>
                        <div class="flex flex-col items-end">
                            <span class="pl-5 text-2xl font-normal text-white">
                                {{ $city }}
                            </span>
                            <span class="pl-5 text-2xl font-light text-white">
                                Indonesia
                            </span>
                        </div>
                    </div>

                    <div class="flex justify-center items-center overflow-visible">
                        <img src="/assets/images/image-farms.png" alt="" />
                    </div>

                </div>
            </div>

            <!-- Kotak Kedua berisi 4 kotak yang memberikan info" singkat -->
            <!-- grid kanan -->
            <div class="grid grid-cols-2 gap-4">
                <!-- kotak 1 -->
                <div class="p-4">
                    <!-- content kotak 1 -->
                    <div class="rounded-lg shadow-sm bg-[#6FBE8F] border pt-8 pb-8">
                        <span class="pl-5 text-lg font-normal text-white">
                            Penjualan Hari Ini
                        </span>
                        <span class="block pl-5 text-2xl font-semibold text-white">
                            {{ $todaySales }}
                        </span>
                        <span class="pl-5 text-lg font-normal text-white">
                            {{ number_format($percentageLast30Days, 2) }}% (30 Days)
                        </span>
                    </div>
                </div>

                <!-- kotak 2 -->
                <div class="p-4">
                    <!-- content kotak 2 -->
                    <div class="rounded-lg shadow-sm bg-[#81B974] border pt-8 pb-8">
                        <span class="pl-5 text-lg font-normal text-white">
                            Penjualan Bulan Ini
                        </span>
                        <span class="block pl-5 text-2xl font-semibold text-white">
                            {{ $monthlySales }}
                        </span>
                        <span class="pl-5 text-lg font-normal text-white">
                            {{ number_format($percentageThisMonthLast30Days, 2) }}% (30 Days)
                        </span>
                    </div>
                </div>

                <!-- kotak 3 -->
                <div class="p-4">
                    <!-- content kotak 1 -->
                    <div class="rounded-lg shadow-sm bg-[#93A68F] border pt-8 pb-8">
                        <span class="pl-5 text-lg font-normal text-white">
                            Total Penjualan
                        </span>
                        <span class="block pl-5 text-2xl font-semibold text-white">
                            {{ $totalSales }}
                        </span>
                        <span class="pl-5 text-lg font-normal text-white">
                        </span>
                    </div>
                </div>

                <!-- kotak 4 -->
                <div class="p-4">
                    <!-- content kotak 2 -->
                    <div class="rounded-lg shadow-sm bg-[#CC6B02] border pt-8 pb-8">
                        <span class="pl-5 text-lg font-normal text-white">
                            Total Pelanggan
                        </span>
                        <span class="block pl-5 text-2xl font-semibold text-white">
                            {{ $totalCustomers }}
                        </span>
                        <span class="pl-5 text-lg font-normal text-white">
                            {{ number_format($percentageTotalCustomersLast30Days, 2) }}% (30 Days)
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- memberikan info singkat keungan -->
        <div class="grid grid-cols-2 gap-4 pb-10">
            <!-- grid kiri -->
            <div class="p-4">
                <div class="mt-14">
                    <h2 data-docsearch-ignore="true"
                        class="text-slate-900 text-xl tracking-tight font-bold mb-3 dark:text-slate-200">
                        Informasi Singkat Keuangan
                    </h2>
                    <div class="text-neutral-600 font-medium flex">
                        <p>
                            Informasi Singkat Keuangan untuk memantau posisi keuangan bisnis dengan cepat dan mudah,
                            serta
                            memprediksi tren masa depan berdasarkan data historis.
                        </p>
                    </div>
                </div>
                <div class="pt-4 grid grid-cols-4 gap-4">
                    <div>
                        <span class="text-md font-normal text-[#7B7B7B]">
                            Hari Ini
                        </span>
                        <span class="block text-xl font-normal text-[#3C6831]">
                            {{ $pendapatantodaySales }}
                        </span>
                    </div>
                    <div>
                        <span class="text-md font-normal text-[#7B7B7B]">
                            Minggu Ini
                        </span>
                        <span class="block text-xl font-normal text-[#3C6831]">
                            {{ $pendapatanweeklySales }}
                        </span>
                    </div>
                    <div>
                        <span class="text-md font-normal text-[#7B7B7B]">
                            Bulan Ini
                        </span>
                        <span class="block text-xl font-normal text-[#3C6831]">
                            {{ $pendapatanmonthlySales }}
                        </span>
                    </div>
                    <div>
                        <span class="text-md font-normal text-[#7B7B7B]">
                            Tahun Ini
                        </span>
                        <span class="block text-xl font-normal text-[#3C6831]">
                            {{ $pendapatanyearlySales }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- bagian kanan bawah kosong -->
            <!-- grid kiri bawah-->
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // Toast ketika berhasil melakukan tambah banner
        toastr.options.progressBar = true;
        @if (Session::has('berhasilLogin'))
            toastr.success("{{ Session::get('berhasilLogin') }}")
        @endif
    </script>

    @if ($errors->any())
        <script>
            toastr.error(
                '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>'
            );
        </script>
    @endif
</body>
