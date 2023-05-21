<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title> Admin - Daftar Pemesanan </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="@vite(['resources/css/app.css', 'resources/js/app.js'])">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="margin-top: 64px;">
    @include('components.navbar')
    @include('components.sidebar')
    <div class="pl-4 sm:ml-64">
        <div>
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div
                        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table id="my-table" class="w-full text-sm text-left">
                            <caption
                                class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                                Informasi Pemesanan
                                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Tabel berisi
                                    informasi pemesanan masuk seperti nama, email, dan produk dari semua pemesanan yang
                                    diterima</p>
                            </caption>
                        </table>
                        <div class="pl-5 pb-5">
                            <div class=" border-b border-gray-200 dark:border-gray-700 ac">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                                    data-tabs-toggle="#myTabContent" role="tablist">
                                    <li class="mr-2" role="presentation">
                                        <button
                                            class="inline-block p-4 border-b-2 rounded-t-lg peer-active:text-green-600"
                                            id="semua-pemesanan-tab" data-tabs-target="#semua-pemesanan" type="button"
                                            role="tab" aria-controls="semua-pemesanan" aria-selected="false">Semua
                                            Pemesanan</button>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <button
                                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                            id="menunggu-verifikasi-tab" data-tabs-target="#menunggu-verifikasi"
                                            type="button" role="tab" aria-controls="menunggu-verifikasi"
                                            aria-selected="false">Menunggu Verifikasi</button>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <button
                                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                            id="barang-diproses-tab" data-tabs-target="#barang-diproses" type="button"
                                            role="tab" aria-controls="barang-diproses"
                                            aria-selected="false">Pemesanan Dalam Proses</button>
                                    </li>
                                    <li role="presentation">
                                        <button
                                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                            id="selesai-tab" data-tabs-target="#selesai" type="button" role="tab"
                                            aria-controls="selesai" aria-selected="false">Selesai</button>
                                    </li>
                                </ul>
                            </div>
                            <div id="myTabContent">
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="semua-pemesanan"
                                    role="tabpanel" aria-labelledby="semua-pemesanan-tab">
                                    @livewire('semua-pemesanan-table')

                                </div>
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="menunggu-verifikasi"
                                    role="tabpanel" aria-labelledby="menunggu-verifikasi-tab">
                                    @livewire('verifikasi-pemesanan-table')

                                </div>
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="barang-diproses"
                                    role="tabpanel" aria-labelledby="barang-diproses-tab">
                                    @livewire('proses-pemesanan-table')

                                </div>
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="selesai"
                                    role="tabpanel" aria-labelledby="selesai-tab">
                                    @livewire('selesai-pemesanan-table')

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center py-7">
                        <!-- Help text -->
                        <span class="text-sm text-gray-700 dark:text-gray-400">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>

    @if ($errors->any())
        <script>
            toastr.error(
                '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>'
            );
        </script>
    @endif
</body>
