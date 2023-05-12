@php
    $i = 1;
@endphp

<div class="mx-auto max-w-screen-xl px-4 lg:px-12">
    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            <div class="w-full md:w-1/2">
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Search" required="">
                    </div>
                </form>
            </div>
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <button type="button" data-modal-target="ModalTambahProduk" data-modal-toggle="ModalTambahProduk"
                    class="flex items-center justify-center text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-primary-800">
                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Tambah Product
                </button>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table id="my-table" class="w-full text-sm text-left">
                <caption
                    class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Tabel Informasi Product
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Tabel berisi informasi foto,
                        nama, kategori. harga, dan stok yang tersedia</p>
                </caption>
                <thead class="text-xs text-white uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-4 py-3 bg-green-900">No</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Image</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Product Name</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Category</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Price</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Stock</th>
                        <th scope="col" class="px-4 py-3 bg-green-900 flex justify-between items-center">
                            <span class="text-gray-100 dark:text-white">Actions</span>
                            {{-- <span class="text-gray-100 dark:text-white text-right">
                                Showing
                                <span class="text-gray-100 dark:text-white">{{ $produk->total() }}</span>
                                Entries
                            </span> --}}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $brng)
                        <tr class="border-b hover:bg-gray-200">
                            <th class="px-4 py-3 font-medium">{{ $i++ }}</th>
                            <td class=" flex items-center py-4 font-semibold">
                                <img class="w-32 h-32"
                                    src="{{ asset('assets/images/photoproduk/' . $brng->foto_produk) }}" alt="foto">
                            </td>
                            <td class="px-4 py-3 font-medium">{{ $brng->nama_produk }}</td>
                            <td class="px-4 py-3 font-medium">{{ $brng->jenis_produk->nama_jenis_produk }}</td>
                            <td class="px-4 py-3 font-medium">{{ $brng->harga_produk }} / {{ $brng->satuan_produk }}
                            </td>
                            <td class="px-4 py-3 font-medium">{{ $brng->stock_produk }}</td>
                            <td class="py-3">
                                <div class="flex px-3">
                                    <button id="TombolModalUpdateProduk"
                                        data-modal-toggle="ModalUpdateProduk{{ $brng->id_produk }}"
                                        class="flex items-center bg-gray-200 hover:bg-gray-100 text-gray-500 hover:text-green-500 font-semibold py-1 px-4 mx-1 border border-gray-300 rounded shadow">
                                        <svg class="mx-1 stroke-current hover:text-green-500"
                                            xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34">
                                            </path>
                                            <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                        </svg>
                                    </button>
                                    <button id="TombolModalDeleteProduk"
                                        data-modal-toggle="ModalDeleteProduk{{ $brng->id_produk }}"
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
                                    </button>
                                </div>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <!-- Modal Untuk Show, Edit, Dan Delete -->
                        @include('components.produk.ModalUpdateProduk')
                        @include('components.Produk.ModalDeleteProduk')
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex flex-col items-center py-7">
            <!-- Help text -->
            <span class="text-sm text-gray-700 dark:text-gray-400">
            </span>
        </div>
    </div>
</div>

<script>
    var input = document.getElementById("simple-search");
    var table = document.getElementById("my-table");
    var tr = table.getElementsByTagName("tr");
    input.addEventListener("keyup", function() {
        var filter = input.value.toLowerCase();
        for (var i = 0; i < tr.length; i++) {
            var td1 = tr[i].getElementsByTagName("td")[0];
            var td2 = tr[i].getElementsByTagName("td")[1];
            var td3 = tr[i].getElementsByTagName("td")[2];
            var td4 = tr[i].getElementsByTagName("td")[3];
            var td5 = tr[i].getElementsByTagName("td")[4];
            var td6 = tr[i].getElementsByTagName("td")[5];
            if (td1 || td2 || td3 || td4 || td5 || td6) {
                var text1 = td1.textContent || td1.innerText;
                var text2 = td2.textContent || td2.innerText;
                var text3 = td3.textContent || td3.innerText;
                var text4 = td4.textContent || td4.innerText;
                var text5 = td5.textContent || td5.innerText;
                var text6 = td6.textContent || td6.innerText;
                if (text1.toLowerCase().indexOf(filter) > -1 || text2.toLowerCase().indexOf(filter) > -1 ||
                    text3.toLowerCase().indexOf(filter) > -1 || text4.toLowerCase().indexOf(filter) > -1 ||
                    text5.toLowerCase().indexOf(filter) > -1 || text6.toLowerCase().indexOf(filter) > -1
                ) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    });
</script>
