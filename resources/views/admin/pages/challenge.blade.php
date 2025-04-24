@extends('admin.layouts.master')
@section('content')
    <div class="flex flex-col gap-10 bg-white dark:bg-slate-850 dark:shadow-dark-xl mx-auto py-5 px-7 rounded-2xl w-full">
        <!-- Start Row 1 -->
        <div class="flex flex-col gap-3">

            <div class="grid grid-cols-12 gap-4">

                <div
                    class="col-span-12 lg:col-span-8 bg-orange-400 dark:bg-slate-850 dark:shadow-dark-xl mx-auto w-full px-10 rounded-2xl py-5">
                    <div class="flex flex-wrap sm:flex-nowrap justify-center text-center items-center gap-8">

                        <div class="flex flex-row justify-start text-center items-center gap-5">
                            <div>
                                <img src="https://cdn.propiy.com/public/public/images/panel/challenges.svg" alt=""
                                    width="70">
                            </div>

                            <div class="flex flex-col gap-3 items-start text-left justify-start pt-2 text-white">
                                <p class="mb-0 text-lg font-bold text-white"> Participate in the new challenge!</p>
                                <p class="mb-0 text-lg text-white"> Start your journey to success in investment management
                                </p>
                            </div>
                        </div>

                        <div class="px-3 items-center justify-center text-center mt-4 ">
                            <div
                                class="inline-block px-10 py-2 mb-4 ml-auto font-semibold leading-normal text-center bg-gray-50 align-middle transition-all ease-in text-orange-500 
                                    border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
                                <button type="button" class="text-lg">Settings</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div
                    class="col-span-12 lg:col-span-4 bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl mx-auto w-full px-7 rounded-2xl py-5">
                    <div class="flex flex-row justify-between gap mb-5">
                        <p class="mb-0 text-lg font-bold text-black dark:text-white">Challenge Rules</p>
                        <svg class="h-6 w-6 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6" />
                        </svg>
                    </div>
                    <p class="text-lg font-bold"> Read the challenge rules. </p>
                </div>

            </div>

            <!-- Start Second Grid -->
            <div class="grid grid-cols-12 gap-4">

                <div class="col-span-6 lg:col-span-4">
                    <div class="bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl mx-auto w-full px-10 rounded-2xl">
                        <div class="flex flex-row justify-between">
                            <div
                                class="flex flex-col items-center text-center justify-center pt-2 text-gray-700 dark:text-white">
                                <p class="mb-0 text-2xl font-bold text-orange-500 dark:text-white">0</p>
                            </div>

                            <div class="px-3 shrink-0 md:flex-0 items-center justify-center text-center mt-4">
                                <img src="https://cdn.propiy.com/public/public/images/panel/trade-account.svg"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex flex-row text-gray-700 dark:text-white/80">
                            <p class="text-lg font-bold text-gray-500"> Accounts currently trading </p>
                        </div>
                    </div>
                </div>

                <div class="col-span-6 lg:col-span-4">
                    <div class="bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl mx-auto w-full px-10 rounded-2xl">
                        <div class="flex flex-row justify-between">
                            <div
                                class="flex flex-col items-center text-center justify-center pt-2 text-gray-700 dark:text-white">
                                <p class="mb-0 text-2xl font-bold text-orange-500 dark:text-white">0</p>
                            </div>

                            <div class="px-3 shrink-0 md:flex-0 items-center justify-center text-center mt-4">
                                <img src="https://cdn.propiy.com/public/public/images/panel/trade-account.svg"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex flex-row text-gray-700 dark:text-white/80">
                            <p class="text-lg font-bold text-gray-500"> Accounts currently trading </p>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 lg:col-span-4">
                    <div class="bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl mx-auto w-full px-10 rounded-2xl">
                        <div class="flex flex-row justify-between">
                            <div
                                class="flex flex-col items-center text-center justify-center pt-2 text-gray-700 dark:text-white">
                                <p class="mb-0 text-2xl font-bold text-orange-500 dark:text-white">0</p>
                            </div>

                            <div class="px-3 shrink-0 md:flex-0 items-center justify-center text-center mt-4">
                                <img src="https://cdn.propiy.com/public/public/images/panel/trade-account.svg"
                                    alt="">
                            </div>
                        </div>
                        <div class="flex flex-row text-gray-700 dark:text-white/80">
                            <p class="text-lg font-bold text-gray-500"> Accounts currently trading </p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Second Grid -->

        </div>
        <!-- End Row 1 -->

        <!-- Start Row 2 -->
        <div class="flex flex-row">
            <div class="">
                <p class="text-2xl font-bold text-gray-700 dark:text-white">My Accounts</p>
                <div
                    class="flex flex-wrap sm:flex-nowrap gap-5 items-center justify-center text-center sm:items-start sm:justify-start sm:text-start">
                    <div id="one">
                        <input id="customInput" type="text"
                            class="text-black border border-gray-700 dark:text-white dark:focus:border-orange-500 focus:border-orange-500 hover:border-orange-500
                          focus:ring-0 outline-none rounded-lg w-60 h-9 px-3"
                            placeholder="Account Number" value="Account Number">
                        <button class="bg-black w-9 h-9 fa fa-search text-white rounded-lg"></button>
                    </div>
                    <div id="two">
                        <details class="relative w-60 details-open transition-all duration-500">
                            <summary
                                class="w-full px-2 py-1 h-9 border text-center justify-center items-center border-gray-700 active:border-orange-500 focus:border-orange-500 hover:border-orange-500 rounded-lg
                             bg-white text-gray-900  cursor-pointer list-none ">
                                <div class="flex flex-row justify-between text-center items-center">
                                    <div class="flex flex-row justify-start items-start">
                                        <i class="fa fa-bars h-9 w-9 text-gray-700 mt-1"></i>
                                        <p>
                                            Account Type
                                        </p>
                                    </div>
                                    <svg class="h-8 w-8 text-gray-900 pb-3" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M18 15l-6-6l-6 6h12" transform="rotate(180 12 12)" />
                                    </svg>
                                </div>
                            </summary>

                            <ul
                                class="flex flex-col gap-1 px-2 py-3 absolute left-0 right-0 mt-2 border border-gray-300 bg-white text-gray-900 rounded-md shadow-md z-10">
                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    All</li>
                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    Two-Step</li>
                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    Jet Jump</li>
                            </ul>
                        </details>
                    </div>




                    <div id="three">
                        <details class="relative w-55 details-open transition-all duration-500">
                            <summary
                                class="w-full px-2 py-1 h-9 border text-center justify-center items-center border-gray-700 active:border-orange-500 focus:border-orange-500 hover:border-orange-500 rounded-lg
                             bg-white text-gray-900 cursor-pointer list-none ">
                                <div class="flex flex-row justify-between text-center items-center">
                                    <div class="flex flex-row justify-start items-start">
                                        <svg class="h-10 w-10 text-gray-700 pb-3" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="5" cy="12" r="1" />
                                            <circle cx="12" cy="12" r="1" />
                                            <circle cx="19" cy="12" r="1" />
                                        </svg>
                                        <p>
                                            Status
                                        </p>
                                    </div>
                                    <svg class="h-8 w-8 text-gray-900 pb-3" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M18 15l-6-6l-6 6h12" transform="rotate(180 12 12)" />
                                    </svg>
                                </div>
                            </summary>

                            <ul
                                class="flex flex-col gap-1 px-2 py-3 absolute left-0 right-0 mt-2 border border-gray-300 bg-white text-gray-900 rounded-md shadow-md z-10">
                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    All</li>
                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    Two-Step</li>
                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    Jet Jump</li>
                            </ul>
                        </details>
                    </div>
                </div>
            </div>



        </div>
        <!-- End Row 2 -->

        <!-- Start Row 3 -->
        <div class="w-full rounded-xl shadow space-y-2">
            <!-- Table Head Wrapper -->
            <div
                class="rounded-xl border border-gray-100 bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl overflow-x-auto">
                <table class="min-w-full text-left text-sm">
                    <thead>
                        <tr class="text-gray-800 dark:text-white whitespace-nowrap">
                            <th class="px-4 py-2">Account Number</th>
                            <th class="px-4 py-2">Initial Balance</th>
                            <th class="px-4 py-2">Account Type</th>
                            <th class="px-4 py-2">Stage</th>
                            <th class="px-4 py-2">Start Date</th>
                            <th class="px-4 py-2">End Date</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2"></th>
                        </tr>
                    </thead>
                </table>
            </div>

            <!-- Table Body Wrapper -->
            <div class="rounded-xl border border-gray-100 bg-white overflow-hidden hover:bg-gray-200 transition">
                {{-- <div class="rounded-xl border border-gray-100 bg-white dark:bg-slate-850 dark:shadow-dark-xl overflow-hidden hover:bg-gray-200 transition"> --}}

                <table class="w-full text-left">
                    <tbody>
                        <tr>
                            <td colspan="8" class="text-center px-4 py-10 text-gray-500 dark:text-gray-400">
                                <img src="{{ asset('assets/img/site/challenge-empty.png') }}" alt="Empty"
                                    class="mx-auto w-48 mb-4">
                                <h5 class="text-lg font-semibold mb-2">No new account found!</h5>
                                <p class="mb-6 text-sm leading-relaxed">
                                    To create a new account and participate in challenges, click on the new challenge.<br>
                                    And if you have not yet completed identity verification, make sure to complete the
                                    process.
                                </p>
                                <div class="flex justify-center gap-4">
                                    <button
                                        class="flex items-center gap-2 bg-orange-500 text-white font-medium px-4 py-1 rounded-lg transition duration-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M6 12h12M12 18V6" />
                                        </svg>
                                        <span>New Challenge</span>
                                    </button>

                                    <button
                                        class="px-4 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-700 dark:text-gray-300 hover:border-orange-500 hover:text-orange-500 dark:hover:bg-gray-800 transition">
                                        Authentication
                                    </button>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Row 3 -->

    </div>
@endsection
