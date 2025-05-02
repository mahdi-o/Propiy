@extends('admin.layouts.master')
@section('content')
    <div class="flex flex-col gap-10 bg-white dark:bg-slate-850 dark:shadow-dark-xl mx-auto py-5 px-7 rounded-2xl w-full">
        <!-- Start One Grid -->
        {{-- <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <div
                    class="bg-white hover:bg-gray-100 dark:bg-slate-850 dark:shadow-dark-xl w-full px-6 md:px-10 py-4 rounded-2xl">
                    <div class="flex flex-col lg:flex-row justify-between gap-6">

                        <!-- متن -->
                        <div class="flex flex-col gap-4 flex-1">
                            <div class="text-left text-gray-700 dark:text-white">
                                <p class="text-xl font-bold">Create Free Account</p>
                            </div>

                            <div class="text-gray-700 dark:text-white/80">
                                <p class="text-md font-bold leading-relaxed">
                                    You can create a free account.<br>
                                    Start trading by creating an account, withdraw profits, and become one of our
                                    professional traders.
                                </p>
                            </div>

                            <div class="bg-orange-100 flex flex-row p-5 items-center justify-center text-left gap-5">
                                
                                <svg class="h-12 w-12 text-orange-500" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                                <span class="text-orange-500 font-bold">
                                    For purchasing through the Rial gateway, the second authentication step is required, and
                                    for purchasing Jet Jump, the third authentication step is mandatory.
                                </span>

                                <button type="button" class="w-70 bg-orange-500 text-sm py-2 font-bold text-white rounded-lg shadow-md transition 
                                hover:shadow-lg hover:-translate-y-px active:opacity-85">
                                Second Authentication Step
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End One Grid -->

        <!-- Start Two Grid -->
        <div class="flex">

            <!-- Start Grid Left -->
            <div class="flex flex-col gap-9 border px-5 py-5 rounded-xl w-full">

                <div>
                    <h3 class="text-black text-lg font-extrabold mb-4">Challenge Type</h3>

                    <div class="flex flex-row flex-wrap gap-4">

                        <label
                            class="group flex items-center text-center justify-center gap-3 border px-6 py-3 rounded-md cursor-pointer">
                            <span class="ant-radio ant-wave-target mt-1 relative">
                                <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio"
                                    value="3" name="challengeType">
                                <span
                                    class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                            </span>
                            <span class="text-gray-600 font-bold w-50 py-4">Two-Step</span>
                        </label>

                        <label
                            class="group flex items-center text-center justify-center gap-3 border px-6 py-3 rounded-md cursor-pointer">
                            <span class="ant-radio ant-wave-target mt-1 relative">
                                <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio"
                                    value="3" name="challengeType">
                                <span
                                    class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                            </span>
                            <span class="text-gray-600 font-bold w-50 py-4">Jet Jump</span>
                        </label>
                    </div>
                </div>

                <div>
                    <h3 class="text-black text-lg font-extrabold mb-4">Account Balance</h3>

                    <div class="flex flex-row flex-wrap gap-4">
                        <label
                            class="group flex items-center text-center justify-center gap-3 border px-6 py-3 rounded-md cursor-pointer">
                            <span class="ant-radio ant-wave-target mt-1 relative">
                                <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio"
                                    value="3" name="challengeType">
                                <span
                                    class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                            </span>
                            <span class="text-gray-600 font-bold w-50 py-4">5,000</span>
                        </label>

                        <label
                            class="group flex items-center text-center justify-center gap-3 border px-6 py-3 rounded-md cursor-pointer">
                            <span class="ant-radio ant-wave-target mt-1 relative">
                                <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio"
                                    value="3" name="challengeType">
                                <span
                                    class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                            </span>
                            <span class="text-gray-600 font-bold w-50 py-4">10,000</span>
                        </label>

                        <label
                            class="group flex items-center text-center justify-center gap-3 border px-6 py-3 rounded-md cursor-pointer">
                            <span class="ant-radio ant-wave-target mt-1 relative">
                                <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio"
                                    value="3" name="challengeType">
                                <span
                                    class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                            </span>
                            <span class="text-gray-600 font-bold w-50 py-4">25,000</span>
                        </label>

                        <label
                            class="group flex items-center text-center justify-center gap-3 border px-6 py-3 rounded-md cursor-pointer">
                            <span class="ant-radio ant-wave-target mt-1 relative">
                                <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio"
                                    value="3" name="challengeType">
                                <span
                                    class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                            </span>
                            <span class="text-gray-600 font-bold w-50 py-4">50,000</span>
                        </label>
                    </div>
                </div>

                <div>
                    <h3 class="text-black text-lg font-extrabold mb-4">Broker</h3>

                    <div class="flex flex-row flex-wrap gap-4">
                        <label
                            class="group flex items-center text-center justify-center gap-3 border px-6 py-3 rounded-md cursor-pointer">
                            <span class="ant-radio ant-wave-target mt-1 relative">
                                <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio"
                                    value="3" name="challengeType">
                                <span
                                    class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                            </span>
                            <span class="text-gray-600 font-bold w-125 py-4">Dedicated Server - Propridge Capital Markets
                                Limited</span>
                        </label>

                    </div>
                </div>

                <div>
                    <h3 class="text-black text-lg font-extrabold mb-4">Broker</h3>

                    <div class="flex flex-row flex-wrap gap-4">
                        <label
                            class="group flex items-center text-center justify-center gap-3 border px-6 py-3 rounded-md cursor-pointer">
                            <span class="ant-radio ant-wave-target mt-1 relative">
                                <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio"
                                    value="3" name="challengeType">
                                <span
                                    class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                            </span>
                            <span class="text-gray-600 font-bold w-125 py-4">MT5</span>
                        </label>

                    </div>
                </div>

            </div>
            <!-- End Grid Left -->


            <!-- Start Grid Right -->
            <div class="flex flex-col gap-9 border px-5 py-5 rounded-xl w-full bg-orange-500">
              

            </div>
            <!-- End Grid Right -->

        </div>
        <!-- End Two Grid -->

    </div>
@endsection
