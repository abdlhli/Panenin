<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title> Admin - Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <a class="flex ml-11 md:mr-24">
                        <img src="/assets/images/LogoPanenin.png" class="h-6 mr-3" alt="Panenin Logo" />
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ml-3">
                        <div>
                            <img class="w-8 h-8 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div>
            <ul class="relative m-0 list-none px-[0.2rem]">
                <li class="relative">
                    <a class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-700 outline-none transition duration-300 ease-linear  hover:bg-green-400/10 hover:text-green-600 hover:outline-none focus:bg-green-400/10 focus:text-green-600 focus:outline-none active:bg-green-400/10 active:text-green-600 active:outline-none data-[te-sidenav-state-active]:text-green-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        href="#!">
                        <span
                            class="mr-4 [&amp;>svg]:h-3.5 [&amp;>svg]:w-3.5 [&amp;>svg]:fill-gray-700 [&amp;>svg]:transition [&amp;>svg]:duration-300 [&amp;>svg]:ease-linear group-hover:[&amp;>svg]:fill-green-600 group-focus:[&amp;>svg]:fill-green-600 group-active:[&amp;>svg]:fill-green-600 group-[te-sidenav-state-active]:[&amp;>svg]:fill-green-600 motion-reduce:[&amp;>svg]:transition-none dark:[&amp;>svg]:fill-gray-300 dark:group-hover:[&amp;>svg]:fill-gray-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#7B7B7B" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="relative">
                    <a class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-700 outline-none transition duration-300 ease-linear  hover:bg-green-400/10 hover:text-green-600 hover:outline-none focus:bg-green-400/10 focus:text-green-600 focus:outline-none active:bg-green-400/10 active:text-green-600 active:outline-none data-[te-sidenav-state-active]:text-green-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        href="#!">
                        <span
                            class="mr-4 [&amp;>svg]:h-3.5 [&amp;>svg]:w-3.5 [&amp;>svg]:fill-gray-700 [&amp;>svg]:transition [&amp;>svg]:duration-300 [&amp;>svg]:ease-linear group-hover:[&amp;>svg]:fill-green-600 group-focus:[&amp;>svg]:fill-green-600 group-active:[&amp;>svg]:fill-green-600 group-[te-sidenav-state-active]:[&amp;>svg]:fill-green-600 motion-reduce:[&amp;>svg]:transition-none dark:[&amp;>svg]:fill-gray-300 dark:group-hover:[&amp;>svg]:fill-gray-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
                            </svg>
                        </span>
                        <span>Management Product</span>
                    </a>
                </li>
                <li class="relative">
                    <a class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-green-400/10 hover:text-green-600 hover:outline-none focus:bg-green-400/10 focus:text-green-600 focus:outline-none active:bg-green-400/10 active:text-green-600 active:outline-none data-[te-sidenav-state-active]:text-green-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref="" data-te-collapse-init="" href="" tabindex="0"
                        aria-expanded="true">
                        <span
                            class="mr-4 [&amp;>svg]:h-3.5 [&amp;>svg]:w-3.5 [&amp;>svg]:fill-gray-700 [&amp;>svg]:transition [&amp;>svg]:duration-300 [&amp;>svg]:ease-linear group-hover:[&amp;>svg]:fill-green-600 group-focus:[&amp;>svg]:fill-green-600 group-active:[&amp;>svg]:fill-green-600 group-[te-sidenav-state-active]:[&amp;>svg]:fill-green-600 motion-reduce:[&amp;>svg]:transition-none dark:[&amp;>svg]:fill-gray-300 dark:group-hover:[&amp;>svg]:fill-gray-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#7B7B7B" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </span>
                        <span>Management Akun</span>
                    </a>
                    <ul class="show relative m-0 list-none p-0 data-[te-collapse-show]:block !visible"
                        data-te-sidenav-collapse-ref="" id="" style="" data-te-collapse-item=""
                        data-te-collapse-show="">
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-green-400/10 hover:text-green-600 hover:outline-none focus:bg-green-400/10 focus:text-green-600 focus:outline-none active:bg-green-400/10 active:text-green-600 active:outline-none data-[te-sidenav-state-active]:text-green-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 relative overflow-hidden inline-block align-bottom"
                                data-te-sidenav-link-ref="" tabindex="0">
                                <span
                                    class="mr-4 [&amp;>svg]:h-3.5 [&amp;>svg]:w-3.5 [&amp;>svg]:fill-gray-700 [&amp;>svg]:transition [&amp;>svg]:duration-300 [&amp;>svg]:ease-linear group-hover:[&amp;>svg]:fill-green-600 group-focus:[&amp;>svg]:fill-green-600 group-active:[&amp;>svg]:fill-green-600 group-[te-sidenav-state-active]:[&amp;>svg]:fill-green-600 motion-reduce:[&amp;>svg]:transition-none dark:[&amp;>svg]:fill-gray-300 dark:group-hover:[&amp;>svg]:fill-gray-300 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <polyline points="17 11 19 13 23 9"></polyline>
                                    </svg>
                                </span>
                                <span>Admin</span>
                            </a>
                        </li>
                        <li class="relative">
                            <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-700 outline-none transition duration-300 ease-linear hover:bg-green-400/10 hover:text-green-600 hover:outline-none focus:bg-green-400/10 focus:text-green-600 focus:outline-none active:bg-green-400/10 active:text-green-600 active:outline-none data-[te-sidenav-state-active]:text-green-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10 relative overflow-hidden inline-block align-bottom"
                                data-te-sidenav-link-ref="" tabindex="0">
                                <span
                                    class="mr-4 [&amp;>svg]:h-3.5 [&amp;>svg]:w-3.5 [&amp;>svg]:fill-gray-700 [&amp;>svg]:transition [&amp;>svg]:duration-300 [&amp;>svg]:ease-linear group-hover:[&amp;>svg]:fill-green-600 group-focus:[&amp;>svg]:fill-green-600 group-active:[&amp;>svg]:fill-green-600 group-[te-sidenav-state-active]:[&amp;>svg]:fill-green-600 motion-reduce:[&amp;>svg]:transition-none dark:[&amp;>svg]:fill-gray-300 dark:group-hover:[&amp;>svg]:fill-gray-300 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </span>
                                <span>Pelanggan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="relative">
                    <a class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-700 outline-none transition duration-300 ease-linear  hover:bg-green-400/10 hover:text-green-600 hover:outline-none focus:bg-green-400/10 focus:text-green-600 focus:outline-none active:bg-green-400/10 active:text-green-600 active:outline-none data-[te-sidenav-state-active]:text-green-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        href="#!">
                        <span
                            class="mr-4 [&amp;>svg]:h-3.5 [&amp;>svg]:w-3.5 [&amp;>svg]:fill-gray-700 [&amp;>svg]:transition [&amp;>svg]:duration-300 [&amp;>svg]:ease-linear group-hover:[&amp;>svg]:fill-green-600 group-focus:[&amp;>svg]:fill-green-600 group-active:[&amp;>svg]:fill-green-600 group-[te-sidenav-state-active]:[&amp;>svg]:fill-green-600 motion-reduce:[&amp;>svg]:transition-none dark:[&amp;>svg]:fill-gray-300 dark:group-hover:[&amp;>svg]:fill-gray-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#7B7B7B" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z" />
                                <path d="M14 3v5h5M16 13H8M16 17H8M10 9H8" />
                            </svg>
                        </span>
                        <span>Report</span>
                    </a>
                </li>
                <li class="relative">
                    <a class="group flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-700 outline-none transition duration-300 ease-linear  hover:bg-green-400/10 hover:text-green-600 hover:outline-none focus:bg-green-400/10 focus:text-green-600 focus:outline-none active:bg-green-400/10 active:text-green-600 active:outline-none data-[te-sidenav-state-active]:text-green-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        href="#!">
                        <span
                            class="mr-4 [&amp;>svg]:h-3.5 [&amp;>svg]:w-3.5 [&amp;>svg]:fill-gray-700 [&amp;>svg]:transition [&amp;>svg]:duration-300 [&amp;>svg]:ease-linear group-hover:[&amp;>svg]:fill-green-600 group-focus:[&amp;>svg]:fill-green-600 group-active:[&amp;>svg]:fill-green-600 group-[te-sidenav-state-active]:[&amp;>svg]:fill-green-600 motion-reduce:[&amp;>svg]:transition-none dark:[&amp;>svg]:fill-gray-300 dark:group-hover:[&amp;>svg]:fill-gray-300 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#7B7B7B" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                </path>
                            </svg>
                        </span>
                        <span>News</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
                </div>
            </div>
        </div>
    </div>
</body>
