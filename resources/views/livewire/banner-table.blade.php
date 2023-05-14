@php
    $i = 1;
@endphp

<div class="mx-auto max-w-screen-xl px-4 lg:px-12">
    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="p-4 mt-2">
            <div class=" flex-grow col-span-3">
                <h3 class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Preview Banner
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Preview banner yang
                        nantinya akan ditampilkan pada Landing Page & Mobile Apps</p>
                </h3>
                <div
                    class="flex flex-col items-center justify-center w-full border-2 border-gray-300 rounded-lg bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100">
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        @foreach ($banners as $banner)
                            @if ($banner->status == 'Aktif')
                                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                    <!-- Item -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <a href="{{ asset('assets/images/banner/' . $banner->foto_banner) }}"
                                            data-lightbox="carousel">
                                            <img src="{{ asset('assets/images/banner/' . $banner->foto_banner) }}"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
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
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-col md:flex-row items-center justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">
    <div
        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
        <button type="button" data-modal-target="ModalTambahBanner" data-modal-toggle="ModalTambahBanner"
            class="flex items-center justify-center text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-primary-800">
            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
            </svg>
            Tambah Banner
        </button>
    </div>
</div>

<div class="overflow-x-auto">
    <table id="" class="w-full text-sm text-left">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            Tabel Informasi Banner
            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Tabel berisi informasi banner
                yang ditambahkan untuk ditampilkan pada landing page dan mobile apps</p>
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span>
                *Wajib Mengaktifkan Minimal 2 Foto</p>
        </caption>
        <thead class="text-xs text-white uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-4 py-3 bg-green-900">No</th>
                <th scope="col" class="px-4 py-3 bg-green-900">Foto</th>
                <th scope="col" class="px-4 py-3 bg-green-900">Nama</th>
                <th scope="col" class="px-4 py-3 bg-green-900">Tanggal Upload</th>
                <th scope="col" class="px-4 py-3 bg-green-900">Upload By</th>
                <th scope="col" class="px-4 py-3 bg-green-900">Status</th>
                <th scope="col" class="px-4 py-3 bg-green-900">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr class="border-b hover:bg-gray-200">
                    <th class="px-4 py-3 font-medium">{{ $i++ }}</th>
                    <td class="p-4">
                        <img class="w-64 h-32" src="{{ asset('assets/images/banner/' . $banner->foto_banner) }}"
                            alt="foto">
                    </td>
                    <td class="items-center px-4 py-3 font-semibold">
                        <div>
                            <div class="font-semibold">{{ $banner->nama_banner }}
                            </div>
                            <div class="font-normal text-gray-500">{{ $banner->id_banner }}</div>
                        </div>
                    </td>
                    <td class="px-4 py-3">{{ $banner->tgl_banner }}</td>
                    <td class="px-4 py-3">{{ $banner->relasiBannerKeAkun->firstname }}
                        {{ $banner->relasiBannerKeAkun->lastname }}</td>
                    <td class="px-4 py-3">{{ $banner->status }}</td>
                    <td class="py-3">
                        <div class="flex items-center justify-start">
                            <div class="flex px-4">
                                <button id="TombolModalUpdateBanner"
                                    data-modal-toggle="ModalUpdateBanner{{ $banner->id_banner }}"
                                    class="flex items-center bg-gray-200 hover:bg-gray-100 text-gray-500 hover:text-green-500 font-semibold py-1 px-4 mx-1 border border-gray-300 rounded shadow">
                                    <svg class="mx-1 stroke-current hover:text-green-500"
                                        xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34">
                                        </path>
                                        <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                    </svg>
                                    <span class="mx-1 pr-2">Update</span>
                                </button>
                                <button id="TombolModalDeleteBanner"
                                    data-modal-toggle="ModalDeleteBanner{{ $banner->id_banner }}"
                                    class="flex items-center bg-gray-200 hover:bg-gray-100 text-gray-500 hover:text-red-500 font-semibold py-1 px-4 mx-1 border border-gray-300 rounded shadow">
                                    <svg class="mx-1 stroke-current hover:text-red-500"
                                        xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                        <line x1="10" y1="11" x2="10" y2="17">
                                        </line>
                                        <line x1="14" y1="11" x2="14" y2="17">
                                        </line>
                                    </svg>
                                    <span class="mx-1 pr-2">Delete</span>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
                @include('components.banner.ModalUpdateBanner')
                @include('components.banner.ModalDeleteBanner')
            @endforeach
        </tbody>
    </table>
</div>
<div class="flex flex-col items-center py-7">
</div>
</div>

<script>
    // preview setelah mengambil gambar foto profile
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
