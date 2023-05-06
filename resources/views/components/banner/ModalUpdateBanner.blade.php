<div id="ModalUpdateBanner{{ $banner->id_banner }}" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="ModalUpdateBanner{{ $banner->id_banner }}">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Update Banner</h3>
                <form method="POST" action="{{ route('banners.update', $banner->id_banner) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <div class="mb-6">
                            <label for="email-address-icon"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Banner</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="3" width="18" height="18"
                                            rx="2" />
                                        <circle cx="8.5" cy="8.5" r="1.5" />
                                        <path d="M20.4 14.5L16 10 4 20" />
                                    </svg>
                                </div>
                                <input type="text" id="nama_banner" name="nama_banner"
                                    value="{{ $banner->nama_banner }} "
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="hak_akses"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                Banner</label>
                            <select id="status" name="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option hidden selected value="{{ $banner->status }}"> -= Pilih Untuk Menampilkan
                                    Gambar Pada Banner
                                    =-
                                </option>
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="flex justify-center mb-6">
                            <img class="w-full h-2/4" src="{{ asset('assets/images/banner/' . $banner->foto_banner) }}"
                                alt="foto_banner">
                        </div>
                        <button type="submit"
                            class="text-white col-span-2 bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Update
                            Banner</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
