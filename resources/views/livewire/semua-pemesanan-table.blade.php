@php
    $i = 1;
@endphp
<div class="mx-auto max-w-screen-xl">
    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            <div class="w-full md:w-1/2">
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
                        <th scope="col" class="px-4 py-3 bg-green-900">Pemesan</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Produk Pesanan</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Tanggal Pemesanan</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Total Harga Pemesanan</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Status Pemesanan</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr class="border-b hover:bg-gray-200">
                            <th class="px-4 py-3 font-medium">{{ $i++ }}</th>
                            <td class="px-4 py-3 font-medium">{{ $order->id_pemesanan }}</td>
                            <td class="px-4 py-3 font-medium">{{ $order->user->firstname }} {{ $order->user->lastname }}
                            </td>
                            <td class="px-4 py-3 font-medium">Produk Yang Dipesan</td>
                            <td class="px-4 py-3 font-medium">{{ $order->tgl_pemesanan }}</td>
                            <td class="px-4 py-3 font-medium">{{ $order->total_harga_pemesanan }}</td>
                            <td class="px-4 py-3 font-medium">{{ $order->id_status_pemesanan }}
                            </td>
                            <td class="px-4 py-3 font-medium">Ini Aksi</td>
                        </tr>
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
