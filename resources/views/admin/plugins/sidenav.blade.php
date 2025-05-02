    <div class="h-19">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden"
            sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700" href="#"
            target="_blank">
            <img src="{{ asset('assets/img/logo-ct-dark.png') }}"
                class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8"
                alt="main_logo" />
            <img src="{{ asset('assets/img/logo-ct.png') }}"
                class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8"
                alt="main_logo" />
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Propiy Dashboard</span>
        </a>
    </div>

    <hr
        class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent
     dark:via-white dark:to-transparent" />

    <div class="items-center block w-auto max-h-screen h-sidenav grow basis-full">


        <ul class="flex flex-col pl-0 mb-0">


            <li>
                <details {{ Request::is('admin-user-info') || Request::is('admin-user-auth') ? 'open' : '' }}>
                    <summary
                        class="dark:text-white dark:opacity-80 py-3 text-sm ease-nav-brand my-0 mx-5 flex flex-row gap-5 
                        items-center text-center justify-start whitespace-nowrap px-4 transition-colors hover:bg-gray-200 rounded-xl 
                        hover:cursor-pointer"
                        href="#">

                        <svg class="h-6 w-6 {{ Request::is('admin-user-info') || Request::is('admin-user-auth') ? 'text-orange-500' : 'text-gray-800' }}"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>

                        <span class="text-center  duration-300 opacity-100 pointer-events-none ease">Account</span>
                    </summary>
                    <article>
                        <ul>
                            <li class="mt-0.5 w-full  hover:bg-gray-200 rounded-xl hover:cursor-pointer">
                                <a class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center 
                                whitespace-nowrap px-4 transition-colors "
                                    href="{{ route('user.info') }}">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i
                                            class="relative top-0 text-sm leading-normal h-2 w-2 
                                        {{ Request::is('admin-user-info') ? 'bg-orange-500' : 'bg-gray-300' }} rounded-3xl">
                                        </i>
                                    </div>
                                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">User
                                        Account</span>
                                </a>
                            </li>

                            <li class="mt-0.5 w-full hover:bg-gray-200 rounded-xl hover:cursor-pointer">
                                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center 
                                whitespace-nowrap px-4 transition-colors"
                                    href="{{ route('user.auth') }}">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i
                                            class="relative top-0 text-sm leading-normal h-2 w-2 
                                        {{ Request::is('admin-user-auth') ? 'bg-orange-500' : 'bg-gray-300' }} rounded-3xl">
                                        </i>
                                    </div>
                                    <span
                                        class="ml-1 duration-300 opacity-100 pointer-events-none ease">Authentication</span>
                                </a>
                            </li>
                        </ul>
                    </article>
                </details>
            </li>


            <li>
                <details {{ Request::is('admin-challenge') || Request::is('admin-challenge-free') ? 'open' : '' }}>
                    <summary
                        class="dark:text-white dark:opacity-80 py-3 text-sm ease-nav-brand my-0 mx-5 flex flex-row gap-5 
                        items-center text-center justify-start whitespace-nowrap px-4 transition-colors hover:bg-gray-200 rounded-xl 
                        hover:cursor-pointer"
                        href="#">
                        <svg class="h-6 w-6 {{ Request::is('admin-challenge') || Request::is('admin-challenge-free') ? 'text-orange-500' : 'text-gray-800' }}"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <rect x="3" y="5" width="18" height="14" rx="3" />
                            <line x1="3" y1="10" x2="21" y2="10" />
                            <line x1="7" y1="15" x2="7.01" y2="15" />
                            <line x1="11" y1="15" x2="13" y2="15" />
                        </svg>
                        <span class="text-center  duration-300 opacity-100 pointer-events-none ease">My
                            Challenges</span>
                    </summary>
                    <article>
                        <ul>
                            <li class="mt-0.5 w-full  hover:bg-gray-200 rounded-xl hover:cursor-pointer">
                                <a class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center 
                                whitespace-nowrap px-4 transition-colors"
                                    href="{{ route('challenge') }}">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i
                                            class="relative top-0 text-sm leading-normal h-2 w-2 
                                        {{ Request::is('admin-challenge') ? 'bg-orange-500' : 'bg-gray-300' }} rounded-3xl">
                                        </i>
                                    </div>
                                    <span
                                        class="ml-1 duration-300 opacity-100 pointer-events-none ease">Challenges</span>
                                </a>
                            </li>

                            <li class="mt-0.5 w-full hover:bg-gray-200 rounded-xl hover:cursor-pointer">
                                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center 
                                whitespace-nowrap px-4 transition-colors"
                                    href="{{ route('challenge.free') }}">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i
                                            class="relative top-0 text-sm leading-normal h-2 w-2 
                                        {{ Request::is('admin-challenge-free') ? 'bg-orange-500' : 'bg-gray-300' }} rounded-3xl">
                                        </i>
                                    </div>
                                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Free
                                        Accounts</span>
                                </a>
                            </li>
                        </ul>
                    </article>
                </details>
            </li>


           {{--  --}}
           {{--  --}}
           {{--  --}}
           {{--  --}}
            <li>
                <details {{ Request::is('admin-challenge-order') || Request::is('admin-challenge-buying') ? 'open' : '' }}>
                    <summary
                        class="dark:text-white dark:opacity-80 py-3 text-sm ease-nav-brand my-0 mx-5 flex flex-row gap-5 
                        items-center text-center justify-start whitespace-nowrap px-4 transition-colors hover:bg-gray-200 rounded-xl 
                        hover:cursor-pointer"
                        href="#">
          
                        <svg class="h-6 w-6 {{ Request::is('admin-challenge-order') || Request::is('admin-challenge-buying') ? 'text-orange-500' : 'text-gray-800' }}" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7" />
                            <rect x="14" y="3" width="7" height="7" />
                            <rect x="14" y="14" width="7" height="7" />
                            <rect x="3" y="14" width="7" height="7" />
                        </svg>
                        <span class="text-center  duration-300 opacity-100 pointer-events-none ease">New
                            Challenge</span>
                    </summary>
                    <article>
                        <ul>
                            <li class="mt-0.5 w-full  hover:bg-gray-200 rounded-xl hover:cursor-pointer">
                                <a class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center 
                                whitespace-nowrap px-4 transition-colors"
                                    href="{{ route('challenge.buying') }}">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i
                                            class="relative top-0 text-sm leading-normal h-2 w-2 
                                        {{ Request::is('admin-challenge-buying') ? 'bg-orange-500' : 'bg-gray-300' }} rounded-3xl">
                                        </i>
                                    </div>
                                    <span
                                        class="ml-1 duration-300 opacity-100 pointer-events-none ease">Purchase</span>
                                </a>
                            </li>

                            <li class="mt-0.5 w-full hover:bg-gray-200 rounded-xl hover:cursor-pointer">
                                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center 
                                whitespace-nowrap px-4 transition-colors"
                                    href="{{ route('challenge.order') }}">
                                    <div
                                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                        <i
                                            class="relative top-0 text-sm leading-normal h-2 w-2 
                                        {{ Request::is('admin-challenge-order') ? 'bg-orange-500' : 'bg-gray-300' }} rounded-3xl">
                                        </i>
                                    </div>
                                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">My Orders</span>
                                </a>
                            </li>
                        </ul>
                    </article>
                </details>
            </li>



            <li class="mt-0.5 w-full">
                <a class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors
           {{ Request::is('dashboard') ? 'myActive' : '' }}"
                    href="{{ route('dashboard') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-blue-500 ni ni-tv-2"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class="dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors
           {{ Request::is('tables') ? 'myActive' : '' }}"
                    href="{{ route('tables') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-calendar-grid-58"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Tables</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors
           {{ Request::is('billing') ? 'myActive' : '' }}"
                    href="{{ route('billing') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-emerald-500 ni ni-credit-card"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Billing</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors
           {{ Request::is('virtual-reality') ? 'myActive' : '' }}"
                    href="{{ route('virtual') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-cyan-500 ni ni-app"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Virtual Reality</span>
                </a>
            </li>

            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Account
                    pages</h6>
            </li>

            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors
           {{ Request::is('profile') ? 'myActive' : '' }}"
                    href="{{ route('profile') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors
           {{ Request::is('sign-in') ? 'myActive' : '' }}"
                    href="{{ route('signIn') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-orange-500 ni ni-single-copy-04"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Sign In</span>
                </a>
            </li>

            <li class="mt-0.5 w-full">
                <a class=" dark:text-white dark:opacity-80 py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors
           {{ Request::is('sign-up') ? 'myActive' : '' }}"
                    href="{{ route('signUp') }}">
                    <div
                        class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-cyan-500 ni ni-collection"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Sign Up</span>
                </a>
            </li>



        </ul>
    </div>
