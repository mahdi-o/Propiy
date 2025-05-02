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
            <div class="w-full border rounded-xl p-5 space-y-2 text-white text-lg">

                <div class="w-full border rounded-xl bg-orange-400 p-5 space-y-2 text-white text-lg">

                    <!-- Header Row -->
                    <div class="flex justify-between font-semibold text-center">
                        <div class="w-1/4"></div>
                        <div class="w-2/3 grid grid-cols-3 gap-x-0">
                            <div>Phase 1</div>
                            <div>Phase 2</div>
                            <div>Real Account</div>
                        </div>
                    </div>

                    <!-- Row: Duration -->
                    <div class="flex justify-between items-center px-3 py-2 even:bg-orange-500 even:rounded-xl">
                        <div class="w-1/4 whitespace-nowrap font-medium">Duration</div>
                        <div class="w-2/3 grid grid-cols-3 gap-x-0 text-center">
                            <div>Unlimited</div>
                            <div>Unlimited</div>
                            <div>Unlimited</div>
                        </div>
                    </div>

                    <!-- Row: Daily Drawdown -->
                    <div class="flex justify-between items-center px-3 py-2 even:bg-orange-500 even:rounded-xl">
                        <div class="w-1/4 whitespace-nowrap font-medium">Daily Drawdown</div>
                        <div class="w-2/3 grid grid-cols-3 gap-x-0 text-center">
                            <div>5%</div>
                            <div>5%</div>
                            <div>5%</div>
                        </div>
                    </div>

                    <!-- Row: Overall Drawdown -->
                    <div class="flex justify-between items-center px-3 py-2 even:bg-orange-500 even:rounded-xl">
                        <div class="w-1/4 whitespace-nowrap font-medium">Overall Drawdown</div>
                        <div class="w-2/3 grid grid-cols-3 gap-x-4 text-center">
                            <div>12%</div>
                            <div>12%</div>
                            <div>12%</div>
                        </div>
                    </div>

                    <!-- Row: Profit Target -->
                    <div class="flex justify-between items-center px-3 py-2 even:bg-orange-500 even:rounded-xl">
                        <div class="w-1/4 whitespace-nowrap font-medium">Profit Target</div>
                        <div class="w-2/3 grid grid-cols-3 gap-x-4 text-center">
                            <div>8%</div>
                            <div>4%</div>
                            <div>-</div>
                        </div>
                    </div>

                    <!-- Row: Minimum Trading Days -->
                    <div class="flex justify-between items-center px-3 py-2 even:bg-orange-500 even:rounded-xl">
                        <div class="w-1/4 whitespace-nowrap font-medium">Minimum Trading Days</div>
                        <div class="w-2/3 grid grid-cols-3 gap-x-4 text-center">
                            <div>5 days</div>
                            <div>5 days</div>
                            <div>-</div>
                        </div>
                    </div>

                    <!-- Row: Total Price -->
                    <div class="flex justify-between items-center px-3 py-2 even:bg-orange-500 even:rounded-xl">
                        <div class="w-1/4 whitespace-nowrap font-medium">Total Price</div>
                        <div class="w-2/3 grid grid-cols-3 gap-x-0 text-center">
                            <div></div> <!-- ستون اول خالی -->
                            <div></div> <!-- ستون دوم خالی -->
                            <div class="text-center">0 $</div> <!-- ستون سوم -->
                        </div>
                    </div>

                </div>
                <div class="flex flex-row justify-between text-gray-900 py-5">
                    <p>Please read the Prop challenge terms and conditions.</p>
                    <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                        viewBox="0 0 24 24" fill="none">
                        <path d="M2 9.98V9c0-5 2-7 7-7h6c5 0 7 2 7 7v6c0 5-2 7-7 7h-1" stroke="#FF8A65" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="m13 11 5.01-5.02H14M18.01 5.98v4.01M11 16.15v2.7C11 21.1 10.1 22 7.85 22h-2.7C2.9 22 2 21.1 2 18.85v-2.7C2 13.9 2.9 13 5.15 13h2.7c2.25 0 3.15.9 3.15 3.15Z"
                            stroke="#FF8A65" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>

                <div
                    class="max-h-48 overflow-auto border-b-2 border-t-2 border-secondary-100 py-2 pl-1 text-xs leading-5 text-gray-500">
                    <p class="font-semibold mb-2">Rules</p>
                    <p>Here, we have outlined the rules that traders must be fully aware of and comply with throughout their
                        collaboration with the prop firm Propiy. Please read carefully, as account status evaluations,
                        acceptance into challenges, and the granting of a Propiy account will be subject to the following
                        conditions:</p>

                    <p class="font-semibold mt-4">Membership on the Website:</p>
                    <p>To purchase a challenge, it is recommended to first create a user account on the website and then
                        proceed with the challenge purchase.</p>
                    <p>We recommend starting with $5,000 challenges. Before purchasing a challenge, test your strategy on
                        demo accounts and ensure its profitability before starting the challenge.</p>
                    <p>Additionally, when depositing funds with cryptocurrencies, enter your email address on the deposit
                        page. After purchasing a challenge, the challenge account details will be automatically emailed to
                        you.</p>

                    <p class="font-semibold mt-4">First Stage Rules:</p>
                    <ul class="list-disc ml-4">
                        <li>Account: Demo / Broker: Dedicated Server of Propridge Capital Markets Limited</li>
                        <li>Profit Target: 8%</li>
                        <li>Allowed Daily Drawdown: 5%</li>
                        <li>Allowed Overall Drawdown: 12%</li>
                        <li>Minimum Trading Days: 5 days</li>
                        <li>No time limitations for first and second-stage challenges</li>
                    </ul>

                    <p class="font-semibold mt-4">Second Stage Rules:</p>
                    <ul class="list-disc ml-4">
                        <li>Account: Demo / Broker: Dedicated Server of Propridge Capital Markets Limited</li>
                        <li>Profit Target: 4%</li>
                        <li>Allowed Daily Drawdown: 5%</li>
                        <li>Allowed Overall Drawdown: 12%</li>
                        <li>Minimum Trading Days: 5 days</li>
                        <li>No time limitations</li>
                    </ul>

                    <p class="font-semibold mt-4">Prop Firm Stability Score Evaluation Criteria:</p>
                    <p>The "Stability Score" is applied from March 10, 2025, to measure performance consistency. Traders
                        with $25,000 and $50,000 accounts need at least 30% Stability Score to receive a real account or
                        withdraw profit.</p>
                    <p>This metric ensures professional and consistent performance, not just high-risk profits.</p>

                    <p class="font-semibold mt-4">Propiy Account Rules:</p>
                    <ul class="list-disc ml-4">
                        <li>Account: Demo / Broker: Dedicated Server of Propridge Capital Markets Limited</li>
                        <li>Time Limit: None</li>
                        <li>Profit Target: None</li>
                        <li>Daily Drawdown: 5%</li>
                        <li>Overall Drawdown: 12%</li>
                        <li>Minimum Trading Days: None</li>
                        <li>Profit split: 80% every two weeks, withdrawal in crypto</li>
                    </ul>

                    <p class="font-semibold mt-4">Identity Verification Rules:</p>
                    <p>After completing both challenge stages, traders must upload a valid ID and a selfie with the ID.
                        Names must match exactly.</p>

                    <p class="font-semibold mt-4">Challenge Account Information Rules:</p>
                    <p>Changing account info such as passwords is prohibited and will disqualify the challenge.</p>

                    <p class="font-semibold mt-4">Challenge Start Time Calculation Rules:</p>
                    <p>First trade in stage one must occur within 30 days of account creation. Stage two must be started
                        within 30 days of request after passing stage one.</p>

                    <p class="font-semibold mt-4">Drawdown Rules:</p>
                    <p>Daily drawdown is 5% of the day’s starting balance; overall drawdown is 12% of the initial balance.
                    </p>

                    <p class="font-semibold mt-4">Profit Withdrawal Rules:</p>
                    <p>After completing challenges, traders can withdraw profits (80%) via crypto. Violations lead to
                        disqualification from withdrawal.</p>

                    <p class="font-semibold mt-4">Refund Policy:</p>
                    <p>Refunds are only allowed if the challenge account has not been created. Requests must be made within
                        15 days.</p>

                    <p class="font-semibold mt-4">Trading Style Rules:</p>
                    <p>All styles are accepted: swing, day, scalping.</p>

                    <p class="font-semibold mt-4">Forbidden Trading Strategies:</p>
                    <p>High-risk or one-shot strategies (e.g., earning over 80% of target in one trade) are prohibited.</p>

                    <p class="font-semibold mt-4">Stop Loss Rules:</p>
                    <p>Stop loss is not mandatory but recommended.</p>

                    <p class="font-semibold mt-4">Hedging Rules:</p>
                    <p>Hedging across own or others’ accounts is forbidden and leads to disqualification with no refund.</p>

                    <p class="font-semibold mt-4">Support:</p>
                    <p>Contact via support ticket or live chat during business hours.</p>
                </div>

                <div class="flex items-center justify-between pb-8 pt-4">
                  <label class="custom-checkbox">
                    <input class="custom-checkbox-input" type="checkbox">
                    <span class="custom-checkbox-box"></span>
                    <span class="text-gray-900">I have read and accept all general and specific terms and conditions.</span>
                  </label>
                </div>

                <div class="flex justify-end gap-4">    
                  <button
                      class="px-4 py-1 rounded-lg text-gray-700  hover:text-orange-500 transition">
                      <div class="hover:bg-gray-100 px-4 py-1 rounded-lg text-sm">
                        Cancel
                      </div>
                      
                  </button>

                  <button
                  class="flex items-center gap-2 bg-orange-500 opacity-55 text-white font-medium px-4 py-1 rounded-lg transition duration-150"
                  disabled>
                  <span class="text-sm">Confirm & Continue</span>
                  <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6" />
                  </svg>
                </button>


              </div>


            </div>
            <!-- End Grid Right -->

        </div>
        <!-- End Two Grid -->

    </div>
@endsection
