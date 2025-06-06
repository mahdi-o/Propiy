@extends('admin.layouts.master')
@section('content')
    <div class="flex flex-col gap-10 bg-white dark:bg-slate-850 dark:shadow-dark-xl mx-auto py-5 px-7 rounded-2xl w-full">
        <!-- Start Row 1 -->
        <div class="flex flex-col gap-3">

            <div class="grid grid-cols-12 gap-4">
                <div
                    class="col-span-12 lg:col-span-12 bg-emerald-500 opacity-70 dark:bg-slate-850 dark:shadow-dark-xl mx-auto w-full px-10 rounded-2xl py-5">
                    <div class="flex flex-wrap sm:flex-nowrap justify-between text-center items-center gap-8">

                        <div class="flex flex-row justify-start text-center items-center gap-5">
                            <div>
                                <img src="{{ asset('assets/img/wallet.png') }}" alt="" width="80">
                            </div>

                            <div class="flex flex-col gap-3 items-start text-left justify-start pt-2 text-white">
                                <p class="mb-0 text-xl font-bold text-white">Your Wallet Balance</p>
                                <p class="mb-0 text-lg text-white">Your wallet represents the equivalent of deposits and
                                    transferred profits.
                                </p>
                            </div>
                        </div>

                        <div class="px-3 items-center justify-center text-center mt-4 ">
                            <div class="inline-block px-10 py-2 mb-4 ml-auto">
                                <h3 class="text-2xl text-white">$ 135</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Start Second Grid -->
            <div class="grid grid-cols-12 gap-4">


                <div
                    class="col-span-6 lg:col-span-4 bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl mx-auto w-full px-7 rounded-2xl py-5">
                    <div class="flex flex-row justify-between gap mb-5">
                        <div class="flex flex-row gap-2">
                            <svg class="text-orange-500 w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M2 8.5h12.5M6 16.5h2M10.5 16.5h4" stroke="currentColor" stroke-width="1.5"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M22 14.03v2.08c0 3.51-.89 4.39-4.44 4.39H6.44C2.89 20.5 2 19.62 2 16.11V7.89c0-3.51.89-4.39 4.44-4.39h8.06M20 9.5v-6l2 2M20 3.5l-2 2"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>

                            <p class="mb-0 text-xl font-bold text-black dark:text-white">Deposit</p>

                        </div>
                        <svg class="h-6 w-6 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6" />
                        </svg>
                    </div>
                    <p class="text-lg font-bold">Your wallet is instantly charged.</p>
                </div>

                <div
                    class="col-span-6 lg:col-span-4 bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl mx-auto w-full px-7 rounded-2xl py-5">
                    <div class="flex flex-row justify-between gap mb-5">

                        <div class="flex flex-row gap-2">
                            <svg class="text-orange-500 w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M2 8.5h12.5M6 16.5h2M10.5 16.5h4" stroke="currentColor" stroke-width="1.5"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M22 14.03v2.08c0 3.51-.89 4.39-4.44 4.39H6.44C2.89 20.5 2 19.62 2 16.11V7.89c0-3.51.89-4.39 4.44-4.39h8.06M20 3.5v6l2-2M20 9.5l-2-2"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                            <p class="mb-0 text-xl font-bold text-black dark:text-white">Withdraw</p>

                        </div>
                        <svg class="h-6 w-6 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6" />
                        </svg>
                    </div>
                    <p class="text-lg font-bold">Send to other wallets on the blockchain platform.</p>
                </div>

                <div
                    class="col-span-6 lg:col-span-4 bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl mx-auto w-full px-7 rounded-2xl py-5">
                    <div class="flex flex-row justify-between gap mb-5">
                        <div class="flex flex-row gap-2">
                            <svg class="text-orange-500 w-8 h-8" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M8.672 14.33c0 1.29.99 2.33 2.22 2.33h2.51c1.07 0 1.94-.91 1.94-2.03 0-1.22-.53-1.65-1.32-1.93l-4.03-1.4c-.79-.28-1.32-.71-1.32-1.93 0-1.12.87-2.03 1.94-2.03h2.51c1.23 0 2.22 1.04 2.22 2.33M12 6v12"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path d="M15 22H9c-5 0-7-2-7-7V9c0-5 2-7 7-7h6c5 0 7 2 7 7v6c0 5-2 7-7 7Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                            <p class="mb-0 text-xl font-bold text-black dark:text-white">Show Profit</p>
                        </div>
                        <svg class="h-6 w-6 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6" />
                        </svg>
                    </div>
                    <p class="text-lg font-bold">Show Profit in My Accounts</p>
                </div>

            </div>
            <!-- End Second Grid -->

        </div>
        <!-- End Row 1 -->

        <!-- Start Row 2 -->
        <div class="flex flex-row">
            <div class="">
                <p class="text-2xl font-bold text-gray-700 dark:text-white">Wallet Transactions</p>
                <div
                    class="flex flex-wrap sm:flex-nowrap gap-5 items-center justify-center text-center sm:items-start sm:justify-start sm:text-start">
                    <div id="one">
                        <input id="customInput" type="text"
                            class="text-black border border-gray-700 dark:text-white dark:focus:border-orange-500 focus:border-orange-500 hover:border-orange-500
                          focus:ring-0 outline-none rounded-lg w-60 h-9 px-3"
                            placeholder="Account Number" value="Transaction ID">
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
                                            Transaction Type
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
                                class="flex flex-col gap-1 px-2 py-3  absolute left-0 right-0 mt-2 border border-gray-300 bg-white text-gray-900 rounded-md shadow-md z-10">
                                <li
                                    class="px-2 py-1 items-start justify-start text-left hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    All</li>
                                <li
                                    class="px-2 py-1 items-start justify-start text-left hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    Deposit</li>
                                <li
                                    class="px-2 py-1 items-start justify-start text-left hover:bg-orange-100 cursor-pointer transition-all duration-500 rounded-md max-w-[30ch] truncate">
                                    Withdrawal from Wallet</li>
                                <li
                                    class="px-2 py-1 items-start justify-start text-left hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    Profit Withdraw</li>
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
                                    Rejected</li>
                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    Approved</li>

                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    Pending Payment</li>

                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    Under Review</li>

                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer transition-all duration-500 rounded-md max-w-[30ch] truncate">
                                    Under review by the risk management team
                                </li>
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
                            <th class="px-4 py-2">Transaction ID</th>
                            <th class="px-4 py-2">Transaction Type</th>
                            <th class="px-4 py-2">Amount</th>
                            <th class="px-4 py-2">Request Date</th>
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
                                <h5 class="text-lg font-semibold mb-2">No transactions found!</h5>
                                <p class="mb-6 text-sm leading-relaxed">
                                    To proceed with withdrawal, completing the third-level identity verification is required.
                                </p>
                                <div class="flex justify-center gap-4">
                                    <button
                                        class="flex items-center gap-2 bg-orange-500 text-white font-medium px-4 py-1 rounded-lg transition duration-150">
                                        <span>Third-Level Identity Verification</span>
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
@section('script')
    <script>
        const input = document.getElementById('customInput');
        const defaultValue = 'Account Number';
        let hasTyped = false;

        input.addEventListener('input', () => {
                if (!hasTyped) {
                    input.value = input.value.slice(-1); // فقط همون اولین حرفی که کاربر زد بمونه
                    hasTyped = true;
                }
                // اگر input خالی شد، مقدار اولیه رو برگردون
                if (input.value.trim() === '') {
                    input.value = defaultValue;
                    hasTyped = false;
                    // می‌خوای درجا بتونه بنویسه؟ بهتره کرسر بره آخرش:
                    setTimeout(() => {
                        input.setSelectionRange(0, 0); // کرسر بره اول
                    }, 0);
                }
            }

        );
    </script>
@endsection
