@extends('admin.layouts.master')
@section('content')
    <div class="flex flex-col gap-10 bg-white dark:bg-slate-850 dark:shadow-dark-xl mx-auto py-5 px-7 rounded-2xl w-full">
        <!-- Start Second Grid -->
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <div
                    class="bg-gray-50 hover:bg-gray-100 dark:bg-slate-850 dark:shadow-dark-xl w-full px-6 md:px-10 py-4 rounded-2xl border">
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

                            <div class="bg-slate-650">
                                <ul class="py-4 rounded-xl shadow-3xl text-sm text-gray-800 dark:text-white space-y-2">
                                    <li class="flex items-start gap-2 px-4">
                                        <span class="h-2 w-2 mt-1 bg-orange-500 rounded-full"></span>
                                        <span>One active free account allowed at a time.</span>
                                    </li>
                                    <li class="flex items-start gap-2 px-4">
                                        <span class="h-2 w-2 mt-1 bg-orange-500 rounded-full"></span>
                                        <span>Possibility to activate a new free account after 14 days from deactivation of
                                            the previous one.</span>
                                    </li>
                                    <li class="flex items-start gap-2 px-4">
                                        <span class="h-2 w-2 mt-1 bg-orange-500 rounded-full"></span>
                                        <span>Deactivation of free accounts occurs when the time limit is reached or profit
                                            and loss conditions are met.</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="text-left mt-4">
                                <button type="button"
                                    class="bg-orange-500 text-sm px-8 py-2 font-bold text-white rounded-lg shadow-md transition hover:shadow-lg hover:-translate-y-px active:opacity-85">
                                    Free Account
                                </button>
                            </div>
                        </div>

                        <!-- عکس (فقط در حالت lg به بالا) -->
                        <div class="hidden lg:flex items-center justify-center">
                            <img src="{{ asset('assets/img/site/free-account-cover.png') }}" width="200"
                                alt="Free Account">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Second Grid -->
    </div>
@endsection
