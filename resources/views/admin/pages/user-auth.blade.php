@extends('admin.layouts.master')
@section('content')

 <div class="bg-transparent mx-auto py-5 px-5 rounded-2xl w-full">
    <div class="flex flex-col bg-white dark:bg-slate-850 dark:shadow-dark-xl px-10 mt-10">

        <p class="font-bold mb-0 pt-5 text-lg text-gray-500 dark:text-white">Authentication</p>

        <!-- Start Box Timeline and Rows -->
        <div class="flex flex-row py-4 my-4 items-center justify-center">

            <!-- Start Timeline -->
            <div class="flex flex-col justify-center text-center h-full ">

                <!--Start One timeline -->
                <div class="flex justify-between items-center w-full">
                    <div
                        class=" rounded-full h-7 w-7 flex flex-row items-center text-center justify-center bg-orange-400 ring-4 ring-orange-500 ring-opacity-30">
                        <p class="text-white  text-center pt-4">1</p>
                    </div>
                </div>
                <!--End One timeline -->

                <!-- First Border Timeline -->
                <div class=" border-2  border-orange-500 h-30 w-0  text-center ml-3"
                    style=" border-style: dashed; border-color: rgb(255, 102, 0);">
                </div>

                <!--Start Two timeline -->
                <div class="flex justify-between items-center w-full">
                    <div class=" rounded-full h-7 w-7 flex flex-row items-center text-center 
                         justify-center bg-transparent ring-4 ring-orange-500 ring-opacity-30 border-2"
                        style="border-color: rgb(255, 102, 0);">
                        <p class=" text-orange-500 text-center pt-4 ">2</p>
                    </div>
                </div>
                <!--End Two timeline -->

                <!-- Second Border Timeline -->
                <div class="border-2 border-dashed border-orange-500 h-30 w-0  text-center ml-3"
                    style=" border-style: dashed;border-color: rgba(128, 128, 128, 0.76);">
                </div>

                <!--Start Three timeline -->
                <div class="flex justify-between items-center w-full">
                    <div class=" rounded-full h-7 w-7 flex flex-row items-center text-center
                    justify-center bg-gray-200 ring-4 ring-orange-500 ring-opacity-30 border-2">
                        <p class=" text-gray-800 text-center pt-4">3</p>
                    </div>
                </div>
                <!--End Three timeline -->

            </div>
            <!-- End Timeline -->

            <!-- Start Rows -->
            <div class="flex flex-col gap-5  mx-auto w-full px-3 rounded-2xl ">
                <!-- Start Row 1 -->
                <div class="flex flex-col gap-2 bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl p-7 pb-4 rounded-lg border ">

                    <!-- Start Part 1 to Row 1 -->
                    <div class="text-green-600 flex flex-row gap-3">
                        <span class="text-gray-900 dark:text-white font-bold">Step 1</span>
                        <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        <p class="text-md font-bold">verified</p>
                    </div>
                    <!-- End Part 1 to Row 1 -->

                    <!-- Start Part 2 to Row 1 -->
                    <div class="flex flex-row gap-2 ">
                        <div class="flex flex-row gap-2 ">
                            <p class="text-sm text-gray-500 dark:text-white"> Sign-up-Date</p>
                            <h6 class="text-sm text-gray-500 dark:text-white">2025-02-27</h6>
                        </div>

                        <p class="h-6 w-1 bg-gray-300 rounded-lg"></p>
                        <div class="flex flex-row gap-2 ">
                            <p class="text-sm text-gray-500 dark:text-white "> Email </p>
                            <h6 class="text-sm text-gray-500 dark:text-white">Mohammad0939@gmail.com</h6>
                        </div>
                    </div>
                    <!-- End Part 2 to Row 1 -->

                </div>
                <!-- End Row 1 -->

                <!-- Start Row 2 -->
                <div class="flex flex-col gap-4 bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl p-7 pb-4 rounded-lg border">
                    <span class="text-gray-900 dark:text-white font-bold">Step 2</span>
                    <p class="text-sm text-gray-500 dark:text-white">
                        To purchase a two-step challenge, completing the second authentication step is mandatory.
                    </p>
                </div>
                <!-- End Row 2 -->

                <!-- Start Row 3 -->
                <div class="flex flex-col gap-4 bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl p-7 pb-4 rounded-lg border">
                    <span class="text-gray-900 dark:text-white opacity-30 font-bold">Step 3</span>
                    <p class="text-sm text-gray-500 dark:text-white opacity-50">
                        To purchase the Jet Jump challenge and convert a Stage 2 account to real, completing the third
                        authentication step is mandatory.
                    </p>
                </div>
                <!-- End Row 3 -->

            </div>
            <!-- End Rows -->

        </div>
        <!-- End Box Timeline and Rows -->

    </div>
 </div>
    
@endsection
