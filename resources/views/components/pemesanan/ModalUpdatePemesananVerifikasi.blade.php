<div id="ModalUpdateStatusVerifikasi{{ $order->id_pemesanan }}" tabindex="-1" aria-hidden="true"
    data-modal-backdrop="static"
    class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="ModalUpdateStatusVerifikasi{{ $order->id_pemesanan }}">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Update Status Pemesanan</h3>
                <form method="POST" action="{{ route('pemesanan.update', $order->id_pemesanan) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-6">
                        <label for="hak_akses"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Status
                            Pemesanan</label>
                        <select name="id_status_pemesanan" id="id_status_pemesanan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option hidden selected value="{{ $order->id_status_pemesanan }}"> -= Pilih Untuk Merubah
                                Status Pemesanan =-
                            </option>
                            @foreach (\App\Models\StatusPembayaran::pluck('nama_status_pemesanan', 'id_status_pemesanan') as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit"
                        class="text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Update
                        Status Pemesanan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
