<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Admin - Akun Management </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="margin-top: 64px;">
    @include('components.navbar')
    @include('components.sidebar')
    <div class="pl-4 sm:ml-64">
        <div class="p-4 mt-14">
            <h2 data-docsearch-ignore="true"
                class="text-slate-900 text-xl tracking-tight font-bold mb-3 dark:text-slate-200">
                Manage Users
            </h2>
        </div>
        <div>
            @livewire('users-table')
        </div>
    </div>
</body>
