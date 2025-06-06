@extends('admin.layouts.master')
@section('content')
    <div class="flex flex-col gap-10 bg-white dark:bg-slate-850 dark:shadow-dark-xl mx-auto py-5 px-7 rounded-2xl w-full">

        <!-- Start Row 1 -->
        <div class="flex flex-row">
            <div class="">
                <p class="text-2xl font-bold text-gray-700 dark:text-white">My Orders</p>
                <div
                    class="flex flex-wrap sm:flex-nowrap gap-5 items-center justify-center text-center sm:items-start sm:justify-start sm:text-start">
                    <div id="one">
                        <input id="customInput" type="text"
                            class="text-black border border-gray-700 dark:text-white dark:focus:border-orange-500 focus:border-orange-500 hover:border-orange-500
                          focus:ring-0 outline-none rounded-lg w-60 h-9 px-3"
                            placeholder="Orders Number" value="Order Number">
                        <button class="bg-black w-9 h-9 fa fa-search text-white rounded-lg"></button>
                    </div>
                    <div id="two">
                        <details class="relative w-60 details-open transition-all duration-500">
                            <summary
                                class="w-full px-2 py-1 h-9 border text-center justify-center items-center border-gray-700 active:border-orange-500 focus:border-orange-500 hover:border-orange-500 rounded-lg
                             bg-white text-gray-900  cursor-pointer list-none ">



                                <div class="flex flex-row justify-between text-center items-center">
                                    <input id="CreateDateInput" type="text" data-jdp
                                        class="text-black dark:text-white dark:focus:border-orange-500 focus:border-orange-500 hover:border-orange-500
                              focus:ring-0 outline-none rounded-lg px-3"
                                        placeholder="Created Date">

                                    <svg class="h-6 w-6 text-gray-900"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <rect x="4" y="5" width="16" height="16" rx="2" />
                                        <line x1="16" y1="3" x2="16" y2="7" />
                                        <line x1="8" y1="3" x2="8" y2="7" />
                                        <line x1="4" y1="11" x2="20" y2="11" />
                                        <rect x="8" y="15" width="2" height="2" />
                                    </svg>
                                </div>
                            </summary>

                        </details>
                    </div>




                    <div id="three">
                        <details class="relative w-55 details-open transition-all duration-500">
                            <summary
                                class="w-full px-2 py-1 h-9 border text-center justify-center items-center border-gray-700 active:border-orange-500 focus:border-orange-500 hover:border-orange-500 rounded-lg
                             bg-white text-gray-900 cursor-pointer list-none ">
                                <div class="flex flex-row justify-between text-center items-center">
                                    <div class="flex flex-row justify-start items-start">
                                        <svg class="h-7 w-7 mr-2 text-gray-700" width="24" height="24"
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
                                class="flex flex-col text-left w-auto gap-1 px-2 py-3 absolute left-0 right-0 mt-2 border border-gray-300 bg-white text-gray-900 rounded-md shadow-md z-10">
                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    All</li>
                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    Paid</li>
                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    In Progress</li>

                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    Incomplete</li>

                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    Refunded</li>

                                <li
                                    class="px-2 py-1 hover:bg-orange-100 cursor-pointer overflow-hidden transition-all duration-500 rounded-md">
                                    Canceled</li>
                            </ul>
                        </details>
                    </div>
                </div>
            </div>



        </div>
        <!-- End Row 1 -->

        <!-- Start Row 2 -->
        <div class="w-full rounded-xl shadow space-y-2">
            <!-- Table Head Wrapper -->
            <div class="rounded-xl border border-gray-100 bg-gray-50 dark:bg-slate-850 dark:shadow-dark-xl overflow-x-auto">
                <table class="min-w-full text-left text-sm table-fixed border-collapse">
                    <thead>
                        <tr class="text-gray-800 dark:text-white whitespace-nowrap bg-gray-50 dark:bg-slate-850">
                            <th class="px-4 py-2 w-[14.28%]">Order Number</th>
                            <th class="px-4 py-2 w-[14.28%]">Order Amount</th>
                            <th class="px-4 py-2 w-[14.28%]">Account Balance</th>
                            <th class="px-4 py-2 w-[14.28%]">Broker</th>
                            <th class="px-4 py-2 w-[14.28%]">Platform</th>
                            <th class="px-4 py-2 w-[14.28%]">Created Date</th>
                            <th class="px-4 py-2 w-[14.28%]">Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr
                            class="bg-white dark:bg-white text-gray-800 dark:text-white whitespace-nowrap overflow-hidden hover:bg-gray-200 transition border-t border-gray-100 dark:border-slate-700">
                            {{-- <td colspan="7"
                class="rounded-xl border border-gray-100 bg-white overflow-hidden hover:bg-gray-200 transition text-center justify-center items-center py-5">
                There is no data
            </td> --}}
                            <td class="px-4 py-2 w-[14.28%]">372845</td>
                            <td class="px-4 py-2 w-[14.28%]">4493300</td>
                            <td class="px-4 py-2 w-[14.28%]">5000</td>
                            <td class="px-4 py-2 w-[14.28%]">propridge</td>
                            <td class="px-4 py-2 w-[14.28%]">mt5</td>
                            <td class="px-4 py-2 w-[14.28%]">2025-02-17 21:51:40</td>
                            <td class="px-4 py-2 w-[14.28%]">Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Row 2 -->

    </div>
@endsection
@section('script')
    <script>
        const input = document.getElementById('customInput');
        const defaultValue = 'Order Number';
        let hasTyped = false;

        input.addEventListener('input', () => {
                if (!hasTyped) {
                    input.value = input.value.slice(-1); // فقط همون اولین حرفی که کاربر زد بمونه
                    hasTyped = true;
                }
                // اگر input خالی شد، مقدار اولیه رو برگردون
                // if (input.value.trim() === '') {
                //     input.value = defaultValue;
                //     hasTyped = false;
                //     // می‌خوای درجا بتونه بنویسه؟ بهتره کرسر بره آخرش:
                //     setTimeout(() => {
                //         input.setSelectionRange(0, 0); // کرسر بره اول
                //     }, 0);
                // }
            }

        );
    </script>

    <script>
        jalaliDatepicker.startWatch({
            minDate: "attr",
            maxDate: "attr",
        });
    </script>
@endsection
