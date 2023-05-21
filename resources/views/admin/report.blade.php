<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Admin - Reports </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="@vite(['resources/css/app.css', 'resources/js/app.js'])">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="margin-top: 64px;">

    @include('components.navbar')
    @include('components.sidebar')

    <div class="pl-4 sm:ml-64">
        @livewire('laporan-table')
    </div>

    @if ($errors->any())
        <script>
            toastr.error(
                '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>'
            );
        </script>
    @endif
</body>
