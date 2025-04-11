@extends('admin.layouts.master')
@section('content')
    <div class="bg-white dark:bg-slate-850 dark:shadow-dark-xl mx-auto py-5 px-5 rounded-2xl w-full">
        <!-- Start Row 1 -->
        <div class="flex flex-col gap-3">



            <div class="flex gap-3">

                <div class="bg-orange-400 dark:bg-slate-850 dark:shadow-dark-xl mx-auto w-full px-7 rounded-2xl py-5">


                    <div class="flex flex-row justify-between text-center items-center ">

                        <div>
                            <img src="https://cdn.propiy.com/public/public/images/panel/challenges.svg" alt="" width="70">
                        </div>

                        <div class="flex flex-col gap-3 items-start text-center justify-center pt-2 text-white">
                            <p class="mb-0 text-sm font-bold text-white"> Participate in the new challenge!</p>
                            <p class="text-sm font-bold text-white"> Start your journey to success in investment management </p>
                        </div>

                        <!-- Start Button Start Challenge -->
                        <div class="px-3 shrink-0  md:flex-0 items-center justify-center text-center mt-4">
                            <div class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center bg-gray-50 align-middle transition-all ease-in text-orange-500 
                            border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
                                <button type="button" class="">Settings</button>
                            </div>
                        </div>
                        <!-- End Button Start Challenge -->
                    </div>

                </div>

                <div class="bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl mx-auto w-full px-7 rounded-2xl py-5">

                    <div class="flex flex-row justify-between gap mb-5">
                        <p class="mb-0 text-sm font-bold text-black dark:text-white">Challenge Rules</p>
                        <svg class="h-6 w-6 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6" />
                        </svg>
                    </div>

                    <p class="text-sm font-bold"> Read the challenge rules. </p>

                </div>

            </div>




            <div class="flex gap-3">

                <div class="bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl mx-auto w-full px-10 rounded-2xl">

                    <!--Start div icon user and Username user and Button -->
                    <div class="flex flex-row justify-between">


                        <!--Start div text username and "username" -->
                        <div
                            class="flex flex-col items-center text-center justify-center pt-2 text-gray-700 dark:text-white">
                            <p class="mb-0 text-sm font-bold text-black dark:text-white">0</p>
                        </div>
                        <!--End div text username and "username" -->


                        <!-- Start Button Start Challenge -->
                        <div class="px-3 shrink-0  md:flex-0 items-center justify-center text-center mt-4">
                            <img src="https://cdn.propiy.com/public/public/images/panel/trade-account.svg" alt="">
                        </div>
                        <!-- End Button Start Challenge -->
                    </div>
                    <!--End div icon user and Username user and Button -->

                    <!-- Start info account user -->
                    <div class="flex flex-wrap gap-2 items-center mt-4 ">

                        <div class="flex flex-row gap-2 text-gray-700 dark:text-white/80">
                            <p class="text-sm font-bold"> Accounts currently trading </p>
                        </div>

                    </div>
                    <!-- End info account user -->

                </div>


                <div class="bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl mx-auto w-full px-10 rounded-2xl">

                    <!--Start div icon user and Username user and Button -->
                    <div class="flex flex-row justify-between">


                        <!--Start div text username and "username" -->
                        <div
                            class="flex flex-col items-center text-center justify-center pt-2 text-gray-700 dark:text-white">
                            <p class="mb-0 text-sm font-bold text-black dark:text-white">0</p>
                        </div>
                        <!--End div text username and "username" -->


                        <!-- Start Button Start Challenge -->
                        <div class="px-3 shrink-0  md:flex-0 items-center justify-center text-center mt-4">
                            <img src="https://cdn.propiy.com/public/public/images/panel/trade-account.svg" alt="">
                        </div>
                        <!-- End Button Start Challenge -->
                    </div>
                    <!--End div icon user and Username user and Button -->

                    <!-- Start info account user -->
                    <div class="flex flex-wrap gap-2 items-center mt-4 ">

                        <div class="flex flex-row gap-2 text-gray-700 dark:text-white/80">
                            <p class="text-sm font-bold"> Accounts currently trading </p>
                        </div>

                    </div>
                    <!-- End info account user -->

                </div>

                <div class="bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl mx-auto w-full px-10 rounded-2xl">

                    <!--Start div icon user and Username user and Button -->
                    <div class="flex flex-row justify-between">


                        <!--Start div text username and "username" -->
                        <div
                            class="flex flex-col items-center text-center justify-center pt-2 text-gray-700 dark:text-white">
                            <p class="mb-0 text-sm font-bold text-black dark:text-white">0</p>
                        </div>
                        <!--End div text username and "username" -->


                        <!-- Start Button Start Challenge -->
                        <div class="px-3 shrink-0  md:flex-0 items-center justify-center text-center mt-4">
                            <img src="https://cdn.propiy.com/public/public/images/panel/trade-account.svg" alt="">
                        </div>
                        <!-- End Button Start Challenge -->
                    </div>
                    <!--End div icon user and Username user and Button -->

                    <!-- Start info account user -->
                    <div class="flex flex-wrap gap-2 items-center mt-4 ">

                        <div class="flex flex-row gap-2 text-gray-700 dark:text-white/80">
                            <p class="text-sm font-bold"> Accounts currently trading </p>
                        </div>

                    </div>
                    <!-- End info account user -->

                </div>

            </div>


        </div>
        <!-- End Row 1 -->
    </div>
@endsection
