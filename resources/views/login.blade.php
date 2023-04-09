<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <title> Login Admin </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-cover" style="background-image: url('/assets/images/background-login.png');">
  <div class="mt-32 max-w-7xl mx-auto bg-white shadow-lg flex space-x-32">
    <div class="relative">
      <div class="shrink-0">
        <img class="rounded-r-2xl drop-shadow-2xl" src="/assets/images/background-card-login.png">
        <img class="absolute top-0 left-0 z-10 w-9 h-9 mx-6 my-6" src="/assets/icons/backdoor.png" onclick="location.href='{{ route('welcome') }}'">
      </div>
    </div>
    <div>
      <div class="flex justify-center pt-24 font-mono text-2xl text-green-800">Panenin.</div>
      <p class="text-slate-500 pt-8 flex justify-center text-base">Login Admin Panenin.</p>
      <form method="POST">
        <div class="mt-6">
          <label for="email" class="block text-sm font-medium text-slate-500">Email Address</label>
          <div class="mt-1">
            <input type="email" name="email" id="email" required class="peer px-3 py-1 bg-white border shadow-sm border-slate-300 placeholder-slate-400 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:shadow-none">
        </div>
        <div class="mt-2">
          <label for="password" class="block text-sm font-medium text-slate-500">Password</label>
          <input type="password" name="password" id="password" required class="peer px-3 py-1 bg-white border shadow-sm border-slate-300 placeholder-slate-400 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
        </div>
        <div class="mt-8">
          <button type="submit" class="flex content-center justify-center w-72 bg-gradient-to-r from-green-600 via-green-800 to-green-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-white py-2 px-4">Login</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>