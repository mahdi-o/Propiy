@extends('admin.layouts.master')
@section('content')
    {{-- <div class="w-full px-5 py-6 mx-auto">
        <!-- cards row 1 -->
        <div class="w-full max-w-full px-3 mb-6 ">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row">
                        <div
                            class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                            <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                        </div>
                        <div class="flex-wrap w-2/3 max-w-full px-3">
                            <div>
                                <p
                                    class="mb-0 font-sans text-sm font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                    Today's Money</p>
                                <h5 class="mb-2 font-bold dark:text-white">$53,000</h5>
                                <p class="mb-0 dark:text-white dark:opacity-60">
                                    <span class="text-sm font-bold leading-normal text-emerald-500">+55%</span>
                                    since yesterday
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
--}}

    <div class="bg-blue-500 mx-auto py-20 px-5 rounded-2xl w-full">

        <!-- start row 1 -->
        <div class="bg-white mx-auto w-full px-3 rounded-2xl py-4 my-4">

            <!--start div icon user and Username user -->
            <div class="flex flex-row gap-2 items-center text-center">

                <!--start div icon user  -->
                <div class="bg-gray-400 h-15 w-15 rounded-2xl text-center py-3">

                    <svg class="h-8 w-8 text-white fill-white" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="fill" stroke-linejoin="fill" stroke-width="1"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>

                </div>
                <!--end div icon user -->

                <!--start div text username and "username" -->
                <div class="flex flex-col items-center text-center justify-center pt-2">
                    <p class="mb-0 text-sm font-bold">Username</p>
                    <p class="mb-2 text-sm">Moahmmad</p>
                </div>
                <!--end div text username and "username" -->

            </div>
            <!--end div icon user and Username user -->

            <!-- start info account user -->
            <div class="flex flex-row gap-2 items-center mt-4">

                <div class="text-green-600 flex flex-row gap-2">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                    <p class="text-md">verified (step1) </p>
                </div>
                <p class="text-md font-bold text-gray-400 text-center">|</p>
                <div class="flex flex-row gap-2">
                    <p class="text-sm"> Email </p>
                    <h6 class="text-sm">Mohammad0939@gmail.com</h6>
                </div>
                <p class="text-md font-bold text-gray-400 text-center">|</p>

                <div class="flex flex-row gap-2">
                    <p class="text-sm"> Membership Time </p>
                    <h6 class="text-sm">1403/12/09 19:35:04</h6>
                </div>
                <p class="text-md font-bold text-gray-400 text-center">|</p>

                <div class="flex flex-row gap-2">
                    <p class="text-sm"> Number of Challenges </p>
                    <h6 class="text-sm"> 0 </h6>
                </div>

            </div>
            <!-- end info account user -->

        </div>
        <!-- End row 1 -->


        <!-- start row 2 -->
        <div class="flex flex-col gap-1">

            <p class="text-md text-black px-5 mb-2 font-bold">The story of your association with Propiy</p>
            <p class="text-black text-sm px-7">We have illustrated the journey from the start of your path with PROPAY to this moment, so you can have a clearer understanding of the processes that have been carried out.</p>
            <!-- start flex-row 1 in row 2 -->
            <div class="flex flex-col lg:flex-row gap-1 bg-white mx-auto w-full rounded-2xl">

                <!--Start cards row 1 -->
                <div
                    class="flex flex-wrap text-center items-center justify-center bg-gray-300 w-full px-2 py-3 rounded-2xl  sm:w-1/2 xl:mb-0 xl:w-1/4">

                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <p class="text-gray-900 text-sm">1. Time Associated with Propy</p>
                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <!-- Start cart part white for example 0 Challenges -->
                    <div
                        class="w-full max-w-full items-center relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-md bg-clip-border">

                        <!-- Start matn to cart part white for example 0 Challenges-->
                        <div class="flex flex-row gap-1 pt-4">
                            <p class="text-orange-600 font-bold text-sm">0</p>
                            <p class="text-gray-900 font-bold text-sm">challenge</p>
                        </div>
                        <!-- End matn to cart part white for example 0 Challenges-->

                    </div>
                    <!-- End cart part white for example 0 Challenges -->
                </div>
                <!--End cards row 1 -->

                <!--Start cards row 2 -->
                <div
                    class="flex flex-wrap text-center items-center justify-center bg-gray-300 w-full px-2 py-3 rounded-2xl  sm:w-1/2 xl:mb-0 xl:w-1/4">

                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <p class="text-gray-900 text-sm">1. Time Associated with Propy</p>
                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <!-- Start cart part white for example 0 Challenges -->
                    <div
                        class="w-full max-w-full items-center relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-md bg-clip-border">

                        <!-- Start matn to cart part white for example 0 Challenges-->
                        <div class="flex flex-row gap-1 pt-4">
                            <p class="text-orange-600 font-bold text-sm">0</p>
                            <p class="text-gray-900 font-bold text-sm">challenge</p>
                        </div>
                        <!-- End matn to cart part white for example 0 Challenges-->

                    </div>
                    <!-- End cart part white for example 0 Challenges -->
                </div>
                <!--End cards row 2 -->

                <!--Start cards row 3 -->
                <div
                    class="flex flex-wrap text-center items-center justify-center bg-gray-300 w-full px-2 py-3 rounded-2xl  sm:w-1/2 xl:mb-0 xl:w-1/4">

                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <p class="text-gray-900 text-sm">1. Time Associated with Propy</p>
                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <!-- Start cart part white for example 0 Challenges -->
                    <div
                        class="w-full max-w-full items-center relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-md bg-clip-border">

                        <!-- Start matn to cart part white for example 0 Challenges-->
                        <div class="flex flex-row gap-1 pt-4">
                            <p class="text-orange-600 font-bold text-sm">0</p>
                            <p class="text-gray-900 font-bold text-sm">challenge</p>
                        </div>
                        <!-- End matn to cart part white for example 0 Challenges-->

                    </div>
                    <!-- End cart part white for example 0 Challenges -->
                </div>
                <!--End cards row 3 -->


                <!--Start cards row 4 -->
                <div
                    class="flex flex-wrap text-center items-center justify-center bg-gray-300 w-full px-2 py-3 rounded-2xl  sm:w-1/2 xl:mb-0 xl:w-1/4">

                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <p class="text-gray-900 text-sm">1. Time Associated with Propy</p>
                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <!-- Start cart part white for example 0 Challenges -->
                    <div
                        class="w-full max-w-full items-center relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-md bg-clip-border">

                        <!-- Start matn to cart part white for example 0 Challenges-->
                        <div class="flex flex-row gap-1 pt-4">
                            <p class="text-orange-600 font-bold text-sm">0</p>
                            <p class="text-gray-900 font-bold text-sm">challenge</p>
                        </div>
                        <!-- End matn to cart part white for example 0 Challenges-->

                    </div>
                    <!-- End cart part white for example 0 Challenges -->
                </div>
                <!--End cards row 4 -->


                <!--Start cards row 5 -->
                <div
                    class="flex flex-wrap text-center items-center justify-center bg-gray-300 w-full px-2 py-3 rounded-2xl  sm:w-1/2 xl:mb-0 xl:w-1/4">

                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <p class="text-gray-900 text-sm">1. Time Associated with Propy</p>
                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <!-- Start cart part white for example 0 Challenges -->
                    <div
                        class="w-full max-w-full items-center relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-md bg-clip-border">

                        <!-- Start matn to cart part white for example 0 Challenges-->
                        <div class="flex flex-row gap-1 pt-4">
                            <p class="text-orange-600 font-bold text-sm">0</p>
                            <p class="text-gray-900 font-bold text-sm">challenge</p>
                        </div>
                        <!-- End matn to cart part white for example 0 Challenges-->

                    </div>
                    <!-- End cart part white for example 0 Challenges -->
                </div>
                <!--End cards row 5 -->

            </div>
            <!-- end flex-row 1 in row 2 -->

            <!-- start flex-row 2 in row 2 -->
            <div class="flex flex-col lg:flex-row gap-1 bg-white mx-auto w-full rounded-2xl">

                <!--Start cards row 1 -->
                <div
                    class="flex flex-wrap text-center items-center justify-center bg-gray-300 w-full px-2 py-3 rounded-2xl  sm:w-1/2 xl:mb-0 xl:w-1/4">

                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <p class="text-gray-900 text-sm">1. Time Associated with Propy</p>
                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <!-- Start cart part white for example 0 Challenges -->
                    <div
                        class="w-full max-w-full items-center relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-md bg-clip-border">

                        <!-- Start matn to cart part white for example 0 Challenges-->
                        <div class="flex flex-row gap-1 pt-4">
                            <p class="text-orange-600 font-bold text-sm">0</p>
                            <p class="text-gray-900 font-bold text-sm">challenge</p>
                        </div>
                        <!-- End matn to cart part white for example 0 Challenges-->

                    </div>
                    <!-- End cart part white for example 0 Challenges -->
                </div>
                <!--End cards row 1 -->

                <!--Start cards row 2 -->
                <div
                    class="flex flex-wrap text-center items-center justify-center bg-gray-300 w-full px-2 py-3 rounded-2xl  sm:w-1/2 xl:mb-0 xl:w-1/4">

                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <p class="text-gray-900 text-sm">1. Time Associated with Propy</p>
                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <!-- Start cart part white for example 0 Challenges -->
                    <div
                        class="w-full max-w-full items-center relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-md bg-clip-border">

                        <!-- Start matn to cart part white for example 0 Challenges-->
                        <div class="flex flex-row gap-1 pt-4">
                            <p class="text-orange-600 font-bold text-sm">0</p>
                            <p class="text-gray-900 font-bold text-sm">challenge</p>
                        </div>
                        <!-- End matn to cart part white for example 0 Challenges-->

                    </div>
                    <!-- End cart part white for example 0 Challenges -->
                </div>
                <!--End cards row 2 -->

                <!--Start cards row 3 -->
                <div
                    class="flex flex-wrap text-center items-center justify-center bg-gray-300 w-full px-2 py-3 rounded-2xl  sm:w-1/2 xl:mb-0 xl:w-1/4">

                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <p class="text-gray-900 text-sm">1. Time Associated with Propy</p>
                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <!-- Start cart part white for example 0 Challenges -->
                    <div
                        class="w-full max-w-full items-center relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-md bg-clip-border">

                        <!-- Start matn to cart part white for example 0 Challenges-->
                        <div class="flex flex-row gap-1 pt-4">
                            <p class="text-orange-600 font-bold text-sm">0</p>
                            <p class="text-gray-900 font-bold text-sm">challenge</p>
                        </div>
                        <!-- End matn to cart part white for example 0 Challenges-->

                    </div>
                    <!-- End cart part white for example 0 Challenges -->
                </div>
                <!--End cards row 3 -->


                <!--Start cards row 4 -->
                <div
                    class="flex flex-wrap text-center items-center justify-center bg-gray-300 w-full px-2 py-3 rounded-2xl  sm:w-1/2 xl:mb-0 xl:w-1/4">

                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <p class="text-gray-900 text-sm">1. Time Associated with Propy</p>
                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <!-- Start cart part white for example 0 Challenges -->
                    <div
                        class="w-full max-w-full items-center relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-md bg-clip-border">

                        <!-- Start matn to cart part white for example 0 Challenges-->
                        <div class="flex flex-row gap-1 pt-4">
                            <p class="text-orange-600 font-bold text-sm">0</p>
                            <p class="text-gray-900 font-bold text-sm">challenge</p>
                        </div>
                        <!-- End matn to cart part white for example 0 Challenges-->

                    </div>
                    <!-- End cart part white for example 0 Challenges -->
                </div>
                <!--End cards row 4 -->


                <!--Start cards row 5 -->
                <div
                    class="flex flex-wrap text-center items-center justify-center bg-gray-300 w-full px-2 py-3 rounded-2xl  sm:w-1/2 xl:mb-0 xl:w-1/4">

                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <p class="text-gray-900 text-sm">1. Time Associated with Propy</p>
                    <!-- text Title cart part Gray for example: 1. Time Associated With Propy-->
                    <!-- Start cart part white for example 0 Challenges -->
                    <div
                        class="w-full max-w-full items-center relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-md bg-clip-border">

                        <!-- Start matn to cart part white for example 0 Challenges-->
                        <div class="flex flex-row gap-1 pt-4">
                            <p class="text-orange-600 font-bold text-sm">0</p>
                            <p class="text-gray-900 font-bold text-sm">challenge</p>
                        </div>
                        <!-- End matn to cart part white for example 0 Challenges-->

                    </div>
                    <!-- End cart part white for example 0 Challenges -->
                </div>
                <!--End cards row 5 -->

            </div>
            <!-- end flex-row 2 in row 2 -->

        </div>
        <!-- End row 2 -->
    @endsection
