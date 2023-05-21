@php
    $i = 1;
    $jmdo = 1;
@endphp
<div class="mx-auto max-w-screen-xl">
    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            <div class="w-full">
                <form class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
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
            </div>
        </div>
        <div class="overflow-x-auto">
            <table id="my-table" class="w-full text-sm text-left">
                <thead class="text-xs text-white uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-4 py-3 bg-green-900">No</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">ID Pemesanan</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Nama </th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Tanggal </th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Total Harga </th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Status </th>
                        <th scope="col" class="px-4 py-3 bg-green-900 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr class="border-b hover:bg-gray-200">
                            <th class="px-4 py-3 font-medium">{{ $i++ }}</th>
                            <td class="px-4 py-3 font-medium">{{ $order->id_pemesanan }}</td>
                            <td class="px-4 py-3 font-medium"> {{ $order->user->firstname }}
                                {{ $order->user->lastname }}
                            </td>
                            <td class="px-4 py-3 font-medium">{{ $order->tgl_pemesanan }}</td>
                            <td class="px-4 py-3 font-medium">{{ $order->total_harga_pemesanan }}</td>
                            <td
                                class="px-4 py-1 my-2 font-medium inline-flex items-center justify-center rounded-md w-60
                            @if ($order->statusPemesanan->nama_status_pemesanan == 'Pembayaran Diverifikasi') bg-green-500 text-white
                            @elseif($order->statusPemesanan->nama_status_pemesanan == 'Barang Sedang Diproses')
                                bg-yellow-500 text-white
                            @elseif($order->statusPemesanan->nama_status_pemesanan == 'Barang Dikirim')
                                bg-blue-500 text-white
                            @elseif($order->statusPemesanan->nama_status_pemesanan == 'Pesanan Telah Diterima')
                                bg-indigo-500 text-white
                            @elseif($order->statusPemesanan->nama_status_pemesanan == 'Pesanan Selesai')
                                bg-purple-500 text-white
                            @elseif($order->statusPemesanan->nama_status_pemesanan == 'Barang Habis')
                                bg-red-500 text-white
                            @elseif($order->statusPemesanan->nama_status_pemesanan == 'Pembayaran Ditolak')
                                bg-pink-500 text-white
                            @elseif($order->statusPemesanan->nama_status_pemesanan == 'Pesanan Dibatalkan')
                                bg-gray-500 text-white
                            @elseif($order->statusPemesanan->nama_status_pemesanan == 'Menunggu Verifikasi Penjual')
                                bg-yellow-300 text-white
                            @else
                                bg-gray-300 text-black @endif">
                                <div class="px-3 py-1">
                                    <span class="inline-block align-middle">
                                        {{ $order->statusPemesanan->nama_status_pemesanan }}
                                    </span>
                                </div>
                            </td>
                            <td class="py-3">
                                <div class="flex px-4">
                                    <button id="TombolModalUpdateStatusVerifikasi"
                                        data-modal-toggle="ModalUpdateStatusVerifikasi{{ $order->id_pemesanan }}"
                                        class="flex items-center hover:bg-gray-100 text-gray-500 hover:text-cyan-500 font-semibold py-1 px-4 rounded shadow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34">
                                            </path>
                                            <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                        </svg>
                                    </button>
                                    <button id="TombolDetailPemesananVerifikasi"
                                        data-target="{{ $order->id_pemesanan }}"
                                        class="flex items-center hover:bg-gray-100 text-gray-500 hover:text-cyan-500 font-semibold py-1 px-4 rounded shadow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M6 9l6 6 6-6" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        <tr class="border-b hover:bg-gray-200">
                            <!-- Kolom lainnya -->
                            <td colspan="7" id="DetailPemesananVerifikasi{{ $order->id_pemesanan }}" class="hidden">
                                <!-- Tampilkan detail pemesanan di sini -->
                                <table id="my-table" class="w-full text-sm text-left">
                                    <thead class="text-xs text-white uppercase bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-4 py-3 bg-green-600">Produk </th>
                                            <th scope="col" class="px-4 py-3 bg-green-600">Harga Produk </th>
                                            <th scope="col" class="px-4 py-3 bg-green-600">Jumlah Produk </th>
                                            <th scope="col" class="px-4 py-3 bg-green-600">Total Harga Produk </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <div class="flex flex-col items-center py-2 font-semibold">-=-=-=-=-= Detail
                                            Pemesanan =-=-=-=-=-
                                        </div>
                                        @foreach ($detailorders as $detailorder)
                                            @if ($detailorder->id_pemesanan == $order->id_pemesanan)
                                                <tr class="border-b hover:bg-gray-200">
                                                    <td class="px-4 py-3 font-medium">
                                                        <div
                                                            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                                            <img class="rounded-t-lg"
                                                                src="{{ asset('assets/images/photoproduk/' . $detailorder->produk->foto_produk) }}" />
                                                            <div class="p-5">
                                                                <h6
                                                                    class="mb-2 text-center text-lg font-bold tracking-tight text-gray-900 dark:text-white">
                                                                    {{ $detailorder->produk->nama_produk }}</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-3 font-medium">
                                                        {{ $detailorder->produk->harga_produk }}
                                                    </td>
                                                    <td class="px-4 py-3 font-medium">
                                                        {{ $detailorder->jumlah_produk }}
                                                    </td>
                                                    <td class="px-4 py-3 font-medium">
                                                        {{ $detailorder->total_harga_produk }}
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="flex flex-col items-center py-2 bg-green-600"></div>
                                <div class="flex flex-col items-center py-1 bg-white"></div>
                                <div class="flex flex-col items-center py-2 bg-green-900"></div>
                            </td>
                        </tr>
                        @include('components.pemesanan.ModalUpdatePemesananVerifikasi')
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
            if (td1 || td2 || td3 || td4) {
                var text1 = td1.textContent || td1.innerText;
                var text2 = td2.textContent || td2.innerText;
                var text3 = td3.textContent || td3.innerText;
                var text4 = td4.textContent || td4.innerText;
                if (text1.toLowerCase().indexOf(filter) > -1 || text2.toLowerCase().indexOf(filter) > -1 ||
                    text3.toLowerCase().indexOf(filter) > -1 || text4.toLowerCase().indexOf(filter) > -1
                ) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    });

    // Ambil semua tombol "TombolDetailPemesananVerifikasi"
    const tombolDetailPemesananVerifikasi = document.querySelectorAll('#TombolDetailPemesananVerifikasi');

    // Loop melalui setiap tombol
    tombolDetailPemesananVerifikasi.forEach((tombol) => {
        // Tambahkan event listener untuk klik
        tombol.addEventListener('click', (e) => {
            e.preventDefault();

            // Ambil target ID dari atribut "data-target"
            const targetIDVerifikasi = tombol.getAttribute('data-target');

            // Ambil elemen detail pemesanan dengan ID yang sesuai
            const detailPemesananVerifikasi = document.getElementById(
                `DetailPemesananVerifikasi${targetIDVerifikasi}`);

            // Toggle kelas "hidden" pada elemen detail pemesanan untuk mengubah tampilan
            detailPemesananVerifikasi.classList.toggle('hidden');
        });
    });
</script>
