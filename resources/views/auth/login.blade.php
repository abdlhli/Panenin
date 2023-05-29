<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Login Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-cover" style="background-image: url('/assets/images/background-login.png');">
    @if ($errors->any())
        <div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
            </svg>
            <p>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </p>
        </div>
    @endif
    @if (session('warning-hak-akses'))
        <div class="flex items-center bg-red-500 text-white text-sm font-bold px-4 py-3" role="alert">
            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
            </svg>
            <p>
                {{ session('warning-hak-akses') }}
            </p>
        </div>
    @endif
    <div class="mt-32 max-w-5xl mx-auto bg-white shadow-lg flex space-x-20">
        <div class="relative">
            <div class="shrink-0">
                <img class="rounded-r-2xl drop-shadow-2xl" src="/assets/images/background-card-login.png">
                <div class="absolute top-0 left-0 z-10 select-none items-center flex justify-center">
                    <div class="flex-col justify-center">
                        <img class="" src="/assets/images/logoPaneninPutih.png">
                    </div>
                </div>
                <div class="absolute top-0 left-0 z-10 select-none" onclick="location.href='/'">
                    <img class=" w-9 h-9 mx-6 mt-6" src="/assets/icons/backdoor.png">
                    <p class="text-white flex justify-center text-base">Back</p>
                </div>
            </div>
        </div>

        <div class="pr-16">
            <div class="flex justify-center pt-24 font-mono text-2xl text-green-800">Panenin.</div>
            <p class="text-slate-500 pt-5 flex justify-center text-base">Login Admin Panenin.</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mt-6">
                    <label for="email" class="block text-sm font-medium text-slate-500">Email Address</label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" required
                            class="peer px-3 py-1 bg-white border shadow-sm border-slate-300 placeholder-slate-400 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500 disabled:shadow-none">
                    </div>

                    <div class="mt-2">
                        <label for="password" class="block text-sm font-medium text-slate-500">Password</label>
                        <input type="password" name="password" id="password" required
                            class="peer px-3 py-1 bg-white border shadow-sm border-slate-300 placeholder-slate-400 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                        @if ($errors->has('password'))
                            <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="mt-8">
                        <button type="submit"
                            class="flex content-center justify-center w-72 bg-gradient-to-r from-green-600 via-green-800 to-green-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-white py-2 px-4">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (Session::has('logout'))
        <script>
            toastr.options.progressBar = true;
            toastr.success("{{ Session::get('logout') }}")
        </script>
    @endif

</body>

</html>
