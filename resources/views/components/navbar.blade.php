<nav class="fixed top-0 z-40 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <a class="flex ml-11 md:mr-24">
                    <img src="/assets/images/LogoPanenin.png" class="h-6 mr-3" alt="Panenin Logo" />
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ml-3">
                    <div class="flex items-center">
                        <button id="tombolAvatar" dropdown-toggle="menuAvatar"
                            class="flex mx-1 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            type="button">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full"
                                src="{{ asset('assets/images/photoprofile/' . auth()->user()->foto_profile) }}"
                                alt="user photo">
                        </button>
                        <div id="menuAvatar"
                            class="z-10 bg-white rounded-lg shadow w-52 dark:bg-gray-700 dark:divide-gray-600 hidden absolute top-6 right-0 mt-8 mr-4 ">
                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                <div>{{ auth()->user()->firstname }}
                                    {{ auth()->user()->lastname }}</div>
                                <div class="font-medium truncate max-w-xs">{{ auth()->user()->email }}</div>
                            </div>
                            <hr class="w-64 h-px bg-gray-300 border-0 dark:bg-gray-800">
                            <div class="py-2">
                                <a href="{{ route('admin.settings') }}"
                                    class="group flex h-12 w-full cursor-pointer items-center truncate rounded-[5px] pl-6 pr-36 py-4 text-[0.875rem] text-gray-700 outline-none transition duration-300 ease-linear  hover:bg-green-400/10 hover:text-green-600 hover:outline-none focus:bg-green-400/10 focus:text-green-600 focus:outline-none active:bg-green-400/10 active:text-green-600 active:outline-none data-[te-sidenav-state-active]:text-green-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10">
                                    <span
                                        class="mr-4 [&amp;>svg]:h-3.5 [&amp;>svg]:w-3.5 [&amp;>svg]:fill-gray-700 [&amp;>svg]:transition [&amp;>svg]:duration-300 [&amp;>svg]:ease-linear group-hover:[&amp;>svg]:fill-green-600 group-focus:[&amp;>svg]:fill-green-600 group-active:[&amp;>svg]:fill-green-600 group-[te-sidenav-state-active]:[&amp;>svg]:fill-green-600 motion-reduce:[&amp;>svg]:transition-none dark:[&amp;>svg]:fill-gray-300 dark:group-hover:[&amp;>svg]:fill-gray-300 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path
                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="font-semibold">Settings</span>
                                </a>
                            </div>
                            <div class="py-2">
                                <button id="openModal"
                                    class="group flex h-12 w-full cursor-pointer items-center truncate rounded-[5px] pl-6 pr-36 py-4 text-[0.875rem] text-gray-700 outline-none transition duration-300 ease-linear  hover:bg-green-400/10 hover:text-green-600 hover:outline-none focus:bg-green-400/10 focus:text-green-600 focus:outline-none active:bg-green-400/10 active:text-green-600 active:outline-none data-[te-sidenav-state-active]:text-green-600 data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                                    data-toggle="modal" data-target="#confirmLogoutModal">
                                    <span
                                        class="mr-4 [&amp;>svg]:h-3.5 [&amp;>svg]:w-3.5 [&amp;>svg]:fill-gray-700 [&amp;>svg]:transition [&amp;>svg]:duration-300 [&amp;>svg]:ease-linear group-hover:[&amp;>svg]:fill-green-600 group-focus:[&amp;>svg]:fill-green-600 group-active:[&amp;>svg]:fill-green-600 group-[te-sidenav-state-active]:[&amp;>svg]:fill-green-600 motion-reduce:[&amp;>svg]:transition-none dark:[&amp;>svg]:fill-gray-300 dark:group-hover:[&amp;>svg]:fill-gray-300 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M10 3H6a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h4M16 17l5-5-5-5M19.8 12H9" />
                                        </svg>
                                    </span>
                                    <span class="font-semibold">Sign Out</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- <button id="theme-toggle" type="button"
                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button> --}}
                </div>
            </div>
        </div>
    </div>
</nav>

@include('components.logout')

<script>
    // var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    // var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // // Change the icons inside the button based on previous settings
    // if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
    //         '(prefers-color-scheme: dark)').matches)) {
    //     themeToggleLightIcon.classList.remove('hidden');
    // } else {
    //     themeToggleDarkIcon.classList.remove('hidden');
    // }

    // var themeToggleBtn = document.getElementById('theme-toggle');

    // themeToggleBtn.addEventListener('click', function() {

    //     // toggle icons inside button
    //     themeToggleDarkIcon.classList.toggle('hidden');
    //     themeToggleLightIcon.classList.toggle('hidden');

    //     // if set via local storage previously
    //     if (localStorage.getItem('color-theme')) {
    //         if (localStorage.getItem('color-theme') === 'light') {
    //             document.documentElement.classList.add('dark');
    //             localStorage.setItem('color-theme', 'dark');
    //         } else {
    //             document.documentElement.classList.remove('dark');
    //             localStorage.setItem('color-theme', 'light');
    //         }

    //         // if NOT set via local storage previously
    //     } else {
    //         if (document.documentElement.classList.contains('dark')) {
    //             document.documentElement.classList.remove('dark');
    //             localStorage.setItem('color-theme', 'light');
    //         } else {
    //             document.documentElement.classList.add('dark');
    //             localStorage.setItem('color-theme', 'dark');
    //         }
    //     }

    // });

    const dropdownToggle = document.querySelector('[dropdown-toggle="menuAvatar"]');
    const dropdownMenu = document.querySelector('#menuAvatar');

    dropdownToggle.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    document.addEventListener('click', (event) => {
        if (!event.target.closest('#menuAvatar') && !event.target.closest(
                '[dropdown-toggle="menuAvatar"]')) {
            dropdownMenu.classList.add('hidden');
        }
    });

    const openModalBtn = document.getElementById('openModal');
    const closeModalBtn = document.getElementById('closeModal');
    const modal = document.getElementById('modal');

    openModalBtn.addEventListener('click', function() {
        modal.classList.add('block');
        modal.classList.remove('hidden');
    });

    closeModalBtn.addEventListener('click', function() {
        modal.classList.add('hidden');
        modal.classList.remove('block');
    });
</script>
