<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title> Admin - Akun Settings </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body style="margin-top: 64px;">
    @include('components.navbar')
    @include('components.sidebar')
    <div class="pl-4 sm:ml-64">
        <div class="p-4 mt-14">
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <form method="POST" action="{{ route('update-account') }}" enctype="multipart/form-data">
                        @csrf
                        <div
                            class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4 divide-y">
                            <div class=" md:w-1/2">
                                <h3
                                    class="p-5 font-semibold text-lg text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                                    Akun Settings
                                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Update foto dan
                                        detail info
                                        pribadimu disini</p>
                                </h3>
                            </div>
                            <div
                                class=" md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                <button type="submit"
                                    class="flex items-center justify-center text-white bg-green-900 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-primary-800">
                                    Simpan Perubahan
                                </button>
                            </div>
                        </div>

                        <hr class="w-auto h-px bg-gray-300 border-0 dark:bg-gray-800">

                        <div class="divide-y divide-gray-300">
                            <!-- Baris Content -->
                            <div class="grid grid-cols-2 gap-4 items-center p-2 px-4">
                                <!-- grid kiri -->
                                <div class=" p-4">
                                    <p class="font-semibold">
                                        Nama
                                    </p>
                                </div>
                                <!-- grid kanan -->
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <input type="text" id="firstname" name="firstname" required
                                            value="{{ auth()->user()->firstname }}"
                                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                    <div>
                                        <input type="text" id="lastname" name="lastname" required
                                            value="{{ auth()->user()->lastname }}"
                                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                </div>
                            </div>
                            <!-- Baris Content -->
                            <div class="grid grid-cols-2 gap-4 items-center p-2 px-4">
                                <!-- grid kiri -->
                                <div class=" p-4">
                                    <p class="font-semibold">
                                        Email
                                    </p>
                                </div>
                                <!-- grid kanan -->
                                <div class="grid grid-cols-1 gap-4">
                                    <div>
                                        <input type="text" id="email" name="email" required
                                            value="{{ auth()->user()->email }}"
                                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                </div>
                            </div>
                            <!-- Baris Content -->
                            <div class="grid grid-cols-2 gap-4 items-center p-2 px-4">
                                <!-- grid kiri -->
                                <div class=" p-4">
                                    <p class="font-semibold">
                                        Alamat
                                    </p>
                                </div>
                                <!-- grid kanan -->
                                <div class="grid grid-cols-1 gap-4">
                                    <div>
                                        <input type="text" id="alamat" name="alamat" required
                                            value="{{ auth()->user()->alamat }}"
                                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                </div>
                            </div>
                            <!-- Baris Content -->
                            <div class="grid grid-cols-2 gap-4 items-center p-2 px-4">
                                <!-- grid kiri -->
                                <div class=" p-4">
                                    <p class="font-semibold">
                                        No telpon
                                    </p>
                                </div>
                                <!-- grid kanan -->
                                <div class="grid grid-cols-1 gap-4">
                                    <div>
                                        <input type="text" id="no_telp" name="no_telp" required
                                            value="{{ auth()->user()->no_telp }}"
                                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                </div>
                            </div>
                            <!-- Baris Content -->
                            <div class="grid grid-cols-2 gap-4 items-center p-2 px-4">
                                <!-- grid kiri -->
                                <div class="p-4">
                                    <p
                                        class="font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                                        Photo Profile
                                    <p class="text-xs font-normal text-gray-500 dark:text-gray-400">Foto akan tampil
                                        pada tabel akun dan dashboard.</p>
                                    </p>
                                </div>
                                <!-- grid kanan -->
                                <div class="grid grid-cols-4 gap-1 items-center">
                                    <div class="flex justify-center">
                                        <img class="w-24 h-24 rounded-full"
                                            src="{{ asset('assets/images/photoprofile/' . auth()->user()->foto_profile) }}"
                                            alt="user photo" id="preview">
                                    </div>
                                    <div class=" flex-grow col-span-3">
                                        <label for="foto_profile"
                                            class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                    </path>
                                                </svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                        class="font-semibold">Click to upload</span> or drag and drop
                                                </p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                                                    (MAX. 800x400px)</p>
                                            </div>
                                            <input id="foto_profile" type="file" class="hidden"
                                                name="foto_profile" onchange="previewImage(event)" />
                                        </label>
                                        @error('image')
                                            <p class="text-red-500 mt-2 text-xs">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Baris Content -->
                            <div class="grid grid-cols-2 gap-4 items-center p-2 px-4">
                                <!-- grid kiri -->
                                <div class=" p-4">
                                    <p class="font-semibold">
                                        Role
                                    </p>
                                </div>
                                <!-- grid kanan -->

                                <div class="grid grid-cols-1 gap-4">
                                    <div>
                                        <input type="text" id="id_hak_akses" name="id_hak_akses" required disabled
                                            readonly value=@if (Auth::user()->relasiAkunKeHakAkses->id_hak_akses == 1) Admin @else Operator @endif
                                            class="cursor-not-allowed block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 
                                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4 items-center p-2 px-4">
                                <!-- grid kiri -->
                                <div class="p-4">
                                    <p
                                        class="font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                                        Ubah Password
                                    </p>
                                </div>
                                <!-- grid kanan -->
                                <div class="flex items-center">
                                    <input type="checkbox" id="ubah_password" name="ubah_password"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <p id="helper-checkbox-text"
                                        class="text-xs font-normal text-gray-500 dark:text-gray-300 ml-1">Centang, Jika
                                        anda ingin merubah password akun ini.</p>
                                </div>

                            </div>

                            <!-- Baris Content -->
                            <div id="div-password" style="display:none;"
                                class="grid grid-cols-2 gap-4 items-center p-2 px-4">
                                <!-- grid kiri -->
                                <div class=" p-4">
                                    <p class="font-semibold">
                                        Password Baru
                                    </p>
                                </div>
                                <!-- grid kanan -->
                                <div class="grid grid-cols-1 gap-4">
                                    <div>
                                        <input type="password" id="password" name="password"
                                            placeholder="Isi password baru pada field ini jika ingin merubah passwordnya"
                                            class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script>
        const checkbox = document.querySelector('#ubah_password');
        const divPassword = document.querySelector('#div-password');

        checkbox.addEventListener('change', function() {
            if (this.checked) {
                divPassword.style.display = 'block';
            } else {
                divPassword.style.display = 'none';
            }
        });

        // preview setelah mengambil gambar foto profile
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }

        // Toast ketika berhasil melakukan update akun
        toastr.options.progressBar = true;
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif
    </script>

    @if ($errors->any())
        <script>
            toastr.error(
                '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>'
            );
        </script>
    @endif


</body>
