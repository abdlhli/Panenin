<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Admin - Banners </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="@vite(['resources/css/app.css', 'resources/js/app.js'])">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="margin-top: 64px;">
    @include('components.navbar')
    @include('components.sidebar')
    <div class="pl-4 sm:ml-64">
        @livewire('banner-table')
        @include('components.banner.ModalTambahBanner')
    </div>

    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // Toast ketika berhasil melakukan tambah banner
        toastr.options.progressBar = true;
        @if (Session::has('successAdd'))
            toastr.success("{{ Session::get('successAdd') }}")
        @endif

        @if (Session::has('errorAdd'))
            toastr.error("{{ Session::get('errorAdd') }}")
        @endif

        @if (Session::has('successDelete'))
            toastr.success("{{ Session::get('successDelete') }}")
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
