@php
    $i = 1;
@endphp

<div class="mx-auto max-w-screen-xl px-4 lg:px-12">
    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-between p-4">
            <div class=" md:w-1/2">
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
                class=" md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                @if (auth()->user()->id_hak_akses == 1)
                    <button type="button" data-modal-target="ModalTambahAkunAdmin"
                        data-modal-toggle="ModalTambahAkunAdmin"
                        class="flex items-center justify-center text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-primary-800">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Tambah User
                    </button>
                @endif
            </div>
        </div>
        <div class="overflow-x-auto">
            <table id="my-table" class="w-full text-sm text-left">
                <caption
                    class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Tabel Informasi Admin
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Tabel berisi informasi nama,
                        email, dan hak akses dari semua admin yang terdaftar</p>
                </caption>
                <thead class="text-xs text-white uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-4 py-3 bg-green-900">No</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Nama</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Email</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Hak Akses</th>
                        <th scope="col" class="px-4 py-3 bg-green-900 flex justify-between items-center">
                            <span class="text-gray-100 dark:text-white">Aksi</span>
                            <span class="text-gray-100 dark:text-white text-right">
                                Menampilkan
                                <span class="text-gray-100 dark:text-white">{{ $akuns->total() }}</span>
                                Data
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alladmin as $user)
                        <tr class="border-b hover:bg-gray-200">
                            <th class="px-4 py-3 font-medium">{{ $i++ }}</th>
                            <td class=" flex items-center px-6 py-4 font-semibold">
                                <img class="w-10 h-10 rounded-full mr-2"
                                    src="{{ asset('assets/images/photoprofile/' . $user->foto_profile) }}"
                                    alt="foto">
                                <div class="pl-3">
                                    <div class="font-semibold">{{ $user->firstname }} {{ $user->lastname }}
                                    </div>
                                    <div class="font-normal text-gray-500">{{ $user->id_user }}</div>
                                </div>
                            </td>
                            <td class="px-4 py-3">{{ $user->email }}</td>
                            <td class="px-4 py-3">{{ $user->nama_hak_akses }}</td>
                            <td class="py-3">
                                <div class="flex px-4">
                                    @if ($user->id_user != auth()->user()->id_user)
                                        <button id="TombolModalDetailAkunAdmin"
                                            data-modal-toggle="ModalDetailAkunAdmin{{ $user->id_user }}"
                                            class="flex items-center bg-gray-200 hover:bg-gray-100 text-gray-500 hover:text-cyan-500 font-semibold py-1 px-4 mx-1 border border-gray-300 rounded shadow">
                                            <svg class="mx-1 stroke-current" xmlns="http://www.w3.org/2000/svg"
                                                width="12" height="12" viewBox="0 0 24 24" fill="none"
                                                stroke="#000000" stroke-width="1" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                            <span class="mx-1 pr-2">Lihat</span>
                                        </button>
                                        @if (auth()->user()->id_hak_akses == 1)
                                            <button id="TombolModalEditAkunAdmin"
                                                data-modal-toggle="ModalEditAkunAdmin{{ $user->id_user }}"
                                                class="flex items-center bg-gray-200 hover:bg-gray-100 text-gray-500 hover:text-green-500 font-semibold py-1 px-4 mx-1 border border-gray-300 rounded shadow">
                                                <svg class="mx-1 stroke-current hover:text-green-500"
                                                    xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34">
                                                    </path>
                                                    <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                                </svg>
                                                <span class="mx-1 pr-2">Perbarui</span>
                                            </button>
                                            <button id="TombolModalDeleteAkunAdmin"
                                                data-modal-toggle="ModalDeleteAkunAdmin{{ $user->id_user }}"
                                                class="flex items-center bg-gray-200 hover:bg-gray-100 text-gray-500 hover:text-red-500 font-semibold py-1 px-4 mx-1 border border-gray-300 rounded shadow">
                                                <svg class="mx-1 stroke-current hover:text-red-500"
                                                    xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                    viewBox="0 0 24 24" fill="none" stroke="#000000"
                                                    stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10"
                                                        y2="17"></line>
                                                    <line x1="14" y1="11" x2="14"
                                                        y2="17"></line>
                                                </svg>
                                                <span class="mx-1 pr-2">Hapus</span>
                                            </button>
                                        @endif
                                    @endif
                                </div>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <!-- Modal Untuk Show, Edit, Dan Delete -->
                        @include('components.admin.ModalShowAdmin')
                        @include('components.admin.ModalUpdateAdmin')
                        @include('components.admin.ModalDeleteAdmin')
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
            if (td1 || td2 || td3) {
                var text1 = td1.textContent || td1.innerText;
                var text2 = td2.textContent || td2.innerText;
                var text3 = td3.textContent || td3.innerText;
                if (text1.toLowerCase().indexOf(filter) > -1 || text2.toLowerCase().indexOf(filter) > -1 ||
                    text3.toLowerCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    });
</script>
