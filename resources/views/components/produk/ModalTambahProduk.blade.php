<div id="ModalTambahProduk" tabindex="-1" aria-hidden="true" data-modal-backdrop="static"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="ModalTambahProduk">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah Produk</h3>
                <form id="FormTmbProduk" method="POST" action="/tambahProduk" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label for="small-input"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                        <input type="text" id="nama_produk" name="nama_produk" required
                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="mb-6">
                        <label for="email-address-icon"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga / Satuan</label>
                        <div class="relative flex items-center">
                            <input type="text" id="harga_produk" name="harga_produk" required minlength="4"
                                maxlength="11"
                                class="flex-grow block w-full p-2.5 mr-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-6 pointer-events-none">
                                    /
                                </div>
                                <input type="text" id="satuan_produk" name="satuan_produk"
                                    class="flex-grow block w-24 ml-2 pl-10 p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="email-address-icon"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stock</label>
                        <div class="relative">
                            <input type="text" id="stock_produk" name="stock_produk" required maxlength="4"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="hak_akses"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select id="id_jenis_produk" name="id_jenis_produk" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" selected disabled hidden>-= Pilih Kategori Produk =-</option>
                            @foreach (\App\Models\JenisProduk::pluck('nama_jenis_produk', 'id_jenis_produk') as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex justify-center mb-6">
                        <img class="w-full h-2/4" src="{{ asset('assets/images/no_preview.png') }}" alt="no preview"
                            id="previewTMB">
                    </div>
                    <div class="mb-6 flex-grow col-span-2">
                        <label for="foto_produk_tmb"
                            class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                    </path>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                        class="font-semibold">Click to upload</span> or drag and drop
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                                    (Saran 16 : 9)</p>
                            </div>
                            <input id="foto_produk_tmb" type="file" class="hidden" name="foto_produk"
                                onchange="previewImageTMB(event)" required />
                        </label>
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span>
                            *Wajib Menginputkan Foto</p>
                        @error('image')
                            <p class="text-red-500 mt-2 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah
                        Produk</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // preview setelah mengambil gambar foto profile
    function previewImageTMB(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('previewTMB');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
    // function formatNumber(num) {
    //     var num_parts = num.toString().split(".");
    //     num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    //     return num_parts.join(".");
    // }

    // function submitForm() {
    //     var hargaInput = document.getElementById("harga_produk");
    //     var harga = hargaInput.value.replace(/\./g, "");
    //     hargaInput.value = harga;
    //     document.getElementById("FormTmbProduk").submit();
    // }

    // function onHargaInputChange() {
    //     var hargaInput = document.getElementById("harga_produk");
    //     var harga = hargaInput.value.replace(/\./g, "");
    //     if (!isNaN(harga)) {
    //         hargaInput.value = formatNumber(harga);
    //     }
    // }
</script>
