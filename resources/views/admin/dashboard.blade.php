<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Admin - Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    @include('components.navbar')

    @include('components.sidebar')

    <!-- Ucapan selamat Datang Dan Hari Ini -->
    <div class="p-4 sm:ml-64">
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"
                                fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="5" />
                                <path
                                    d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                            </svg>
                        </span>
                        <span class="pl-5 text-2xl font-semibold text-white">
                            -
                        </span>
                        <span class="text-lg font-normal text-white">
                            &deg;C
                        </span>
                        <div class="flex flex-col items-end">
                            <span class="pl-5 text-2xl font-normal text-white">
                                Jember
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
                <div class=" p-4">
                    <!-- content kotak 1 -->
                    <div class="rounded-lg shadow-sm bg-[#6FBE8F] border pt-8 pb-8">
                        <span class="pl-5 text-lg font-normal text-white">
                            Penjualan Hari Ini
                        </span>
                        <span class="block pl-5 text-2xl font-semibold text-white">
                            00000
                        </span>
                        <span class="pl-5 text-lg font-normal text-white">
                            00.00% (30 Days)
                        </span>
                    </div>
                </div>

                <!-- kotak 2 -->
                <div class=" p-4">
                    <!-- content kotak 2 -->
                    <div class="rounded-lg shadow-sm bg-[#81B974] border pt-8 pb-8">
                        <span class="pl-5 text-lg font-normal text-white">
                            Total Penjualan
                        </span>
                        <span class="block pl-5 text-2xl font-semibold text-white">
                            00000
                        </span>
                        <span class="pl-5 text-lg font-normal text-white">
                            00.00% (30 Days)
                        </span>
                    </div>
                </div>

                <!-- kotak 3 -->
                <div class=" p-4">
                    <!-- content kotak 1 -->
                    <div class="rounded-lg shadow-sm bg-[#93A68F] border pt-8 pb-8">
                        <span class="pl-5 text-lg font-normal text-white">
                            Jumlah Pelanggan Baru
                        </span>
                        <span class="block pl-5 text-2xl font-semibold text-white">
                            00000
                        </span>
                        <span class="pl-5 text-lg font-normal text-white">
                            00.00% (30 Days)
                        </span>
                    </div>
                </div>

                <!-- kotak 4 -->
                <div class=" p-4">
                    <!-- content kotak 2 -->
                    <div class="rounded-lg shadow-sm bg-[#CC6B02] border pt-8 pb-8">
                        <span class="pl-5 text-lg font-normal text-white">
                            Total Pelanggan
                        </span>
                        <span class="block pl-5 text-2xl font-semibold text-white">
                            00000
                        </span>
                        <span class="pl-5 text-lg font-normal text-white">
                            00.00% (30 Days)
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- memberikan info singkat keungan -->
        <div class="grid grid-cols-2 gap-4">
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
                            00000K
                        </span>
                    </div>
                    <div>
                        <span class="text-md font-normal text-[#7B7B7B]">
                            Minggu Ini
                        </span>
                        <span class="block text-xl font-normal text-[#3C6831]">
                            00000K
                        </span>
                    </div>
                    <div>
                        <span class="text-md font-normal text-[#7B7B7B]">
                            Bulan Ini
                        </span>
                        <span class="block text-xl font-normal text-[#3C6831]">
                            00000K
                        </span>
                    </div>
                    <div>
                        <span class="text-md font-normal text-[#7B7B7B]">
                            Tahun Ini
                        </span>
                        <span class="block text-xl font-normal text-[#3C6831]">
                            00000K
                        </span>
                    </div>
                </div>
            </div>

            <!-- bagian kanan bawah kosong -->
            <!-- grid kiri bawah-->
        </div>
</body>
