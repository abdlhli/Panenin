@php
    $i = 1;
    $groupedOrders = $orders->groupBy('id_pemesanan');
@endphp
<div class="mx-auto max-w-screen-xl">
    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            <div class="w-full">
            </div>
            <div
                class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
            </div>
        </div>
        <div class="overflow-x-auto">
            <table id="my-table" class="w-full text-sm text-left">
                <caption
                    class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Informasi Laporan
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Tabel berisi
                        informasi pemesanan yang sudah berhasil diterima oleh pembeli.</p>
                </caption>
                <thead class="text-xs text-white uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-4 py-3 bg-green-900">No</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">ID Pemesanan</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Tanggal Pemesanan</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Nama Produk</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Jumlah Produk</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Total Harga Produk</th>
                        <th scope="col" class="px-4 py-3 bg-green-900">Total Harga Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $item)
                        @php
                            $order = $item['order'];
                            $orderDetails = $item['orderDetails'];
                        @endphp
                        @if ($order && $orderDetails)
                            <tr class="border-b hover:bg-gray-200">
                                <th class="px-4 py-3 font-medium">{{ $index + 1 }}</th>
                                <td class="px-4 py-3 font-medium">{{ $order->id_pemesanan }}</td>
                                <td class="px-4 py-3 font-medium">{{ $order->tgl_pemesanan }}</td>
                                <td class="px-4 py-3 font-medium">
                                    @foreach ($orderDetails as $detail)
                                        {{ $detail->produk->nama_produk }}<br>
                                    @endforeach
                                </td>
                                <td class="px-4 py-3 font-medium">
                                    @foreach ($orderDetails as $detail)
                                        {{ $detail->jumlah_produk }}<br>
                                    @endforeach
                                </td>
                                <td class="px-4 py-3 font-medium">
                                    @foreach ($orderDetails as $detail)
                                        {{ $detail->total_harga_produk }}<br>
                                    @endforeach
                                </td>
                                <td class="px-4 py-3 font-medium">{{ $order->total_harga_pemesanan }}</td>
                            </tr>
                        @endif
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
