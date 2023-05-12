<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> 404 - Not Found </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/errors.css') }}" rel="stylesheet">
</head>

<div class="mt-80 text-center">
    <div class="error mx-auto" data-text="404">404</div>
    <p class="lead text-gray-800 mb-5">Page Not Found</p>
    <p class="text-gray-500 mb-0">Looks like you're lost. Let us help you get back on track.</p>
    <a href="{{ route('welcome') }}" class="text-gray-500 mb-0 underline">Let's get back to where the journey began ➥
    </a>
</div>
