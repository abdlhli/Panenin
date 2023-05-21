@php
    $i = 1;
@endphp

<div class="mx-auto max-w-screen-xl px-4 lg:px-12">

    <div class="flex flex-col md:flex-row items-center justify-end space-y-3 md:space-y-0 md:space-x-4 p-4">
        <div
            class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
            <button type="button" data-modal-target="ModalTambahJenisProduk" data-modal-toggle="ModalTambahJenisProduk"
                class="flex items-center justify-center text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-primary-800">
                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                </svg>
                Tambah Jenis Product
            </button>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table id="" class="w-full text-sm text-left">
            <caption
                class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                Tabel Informasi Jenis Product
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Tabel berisi informasi jenis
                    product yang ditambahkan sebagai kategori product</p>
            </caption>
            <thead class="text-xs text-white uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-4 py-3 bg-green-900">No</th>
                    <th scope="col" class="px-4 py-3 bg-green-900">Foto Jenis Produk</th>
                    <th scope="col" class="px-4 py-3 bg-green-900">Nama</th>
                    <th scope="col" class="px-4 py-3 bg-green-900 flex justify-between items-center">
                        <span class="text-gray-100 dark:text-white">Aksi</span>
                        {{-- <span class="text-gray-100 dark:text-white text-right">
                            Showing
                            <span class="text-gray-100 dark:text-white">{{ $jenis_produk->total() }}</span>
                            Entries
                        </span> --}}
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jenis_produk as $jenisproduct)
                    <tr class="border-b hover:bg-gray-200">
                        <th class="px-4 py-3 font-medium">{{ $i++ }}</th>
                        <th class="px-4 py-3 font-medium"><img class="w-32 h-32"
                                src="{{ asset('assets/images/photojenisproduk/' . $jenisproduct->foto_jenis_produk) }}"
                                alt="foto">
                        </th>
                        <td class="items-center px-4 py-3 font-semibold">
                            <div>
                                <div class="font-semibold">{{ $jenisproduct->nama_jenis_produk }}
                                </div>
                                <div class="font-normal text-gray-500">{{ $jenisproduct->id_jenis_produk }}</div>
                            </div>
                        </td>
                        <td class="py-3">
                            <div class="flex items-center justify-start">
                                <div class="flex px-4">
                                    <button id="TombolModalDeleteJenisProduk"
                                        data-modal-toggle="ModalDeleteJenisProduk{{ $jenisproduct->id_jenis_produk }}"
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
                    @include('components.jenisproduk.ModalDeleteJenisProduk')
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex flex-col items-center py-7">
    </div>
</div>
