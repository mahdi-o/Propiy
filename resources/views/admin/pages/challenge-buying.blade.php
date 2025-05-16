@extends('admin.layouts.master')
@section('content')
    {{-- <div class="flex flex-col gap-10 bg-white dark:bg-slate-850 dark:shadow-dark-xl mx-auto py-5 px-7 rounded-2xl w-full">
        <!-- Start One Grid -->
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <div
                    class="bg-white hover:bg-gray-100 dark:bg-slate-850 dark:shadow-dark-xl w-full px-6 md:px-10 py-4 rounded-2xl">
                    <div class="flex flex-col lg:flex-row justify-between gap-6">

                        <!-- متن -->
                        <div class="flex flex-col gap-0 flex-1">
                            <div class="text-left text-gray-700 dark:text-white">
                                <p class="text-xl font-bold">New Challenge</p>
                            </div>

                            <div class="text-gray-700 dark:text-white/80">
                                <p class="text-md font-bold leading-relaxed">
                                    Please complete the information below and create your custom challenge.
                                </p>
                            </div>

                            <div class="bg-orange-100 flex flex-row p-5 items-center justify-center text-left gap-5 rounded-xl">
                                
                                <svg class="h-12 w-12 text-orange-500" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                                <span class="text-orange-500 font-bold">
                                    For purchasing through the Rial gateway, the second authentication step is required, and
                                    for purchasing Jet Jump, the third authentication step is mandatory.
                                </span>

                                <button type="button" class="w-80 bg-orange-500 text-sm p-2 font-bold text-white rounded-lg shadow-md transition 
                                hover:shadow-lg hover:-translate-y-px active:opacity-85 ">
                                Second Authentication Step
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
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
                    class="custom-scroll max-h-48 overflow-y-auto border-b border-t border-slate-700 py-2 pl-1 text-xs leading-5 text-gray-500">
                    <p>Rules</p>
                    <p>Here, we have outlined the rules that traders must be fully aware of and comply with throughout their
                        collaboration with the prop firm Propiy. Please read carefully, as account status evaluations,
                        acceptance into challenges, and the granting of a Propiy account will be subject to the following
                        conditions:</p><br><br>
                    <h3>Membership on the Website:</h3>
                    <p>To purchase a challenge, it is recommended to first create a user account on the website and then
                        proceed with the challenge purchase.</p>
                    <p>We recommend starting with $5,000 challenges. Before purchasing a challenge, test your strategy on
                        demo accounts and ensure its profitability before starting the challenge.</p>
                    <p>Additionally, when depositing funds with cryptocurrencies, enter your email address on the deposit
                        page. After purchasing a challenge, the challenge account details will be automatically emailed to
                        you.</p><br>
                    <h3>First Stage Rules:</h3>
                    <ul>
                        <li>Account: Demo / Broker: Dedicated Server of Propridge Capital Markets Limited</li>
                        <li>Profit Target: 8%</li>
                        <li>Allowed Daily Drawdown: 5%</li>
                        <li>Allowed Overall Drawdown: 12%</li>
                        <li>Minimum Trading Days: 5 days</li>
                    </ul>
                    <p>(Broker Propridge Capital Markets Limited has no time limitations for first and second-stage
                        challenges.)</p>
                    <h3>Second Stage Rules:</h3>
                    <ul>
                        <li>Account: Demo / Broker: Dedicated Server of Propridge Capital Markets Limited</li>
                        <li>Profit Target: 4%</li>
                        <li>Allowed Daily Drawdown: 5%</li>
                        <li>Allowed Overall Drawdown: 12%</li>
                        <li>Minimum Trading Days: 5 days</li>
                    </ul>
                    <p>(Broker Propridge Capital Markets Limited has no time limitations for first and second-stage
                        challenges.)</p><br><br>
                    <h3>Prop Firm Stability Score Evaluation Criteria:</h3>
                    <p>In the Prop Firm platform, besides profitability, the stability of performance and risk management by
                        traders are given special importance. For this reason, for new accounts created from March 10, 2025,
                        the "Stability Score" criterion is applied as a measure to evaluate the consistency of traders’
                        performance.<br>Conditions and Requirements:<br>Traders with $25,000 and $50,000 Challenge accounts
                        will be eligible to receive a Prop Firm Real account only if their Stability Score is at least 30%.
                        Otherwise, they must first raise their score above 30%. At the Prop Firm Real account stage, traders
                        will only be allowed to request profit withdrawals when their Stability Score exceeds 30%. Purpose
                        of this Criterion: This criterion is designed to encourage stable and professional traders and to
                        prevent high-risk, unstable strategies. A high Stability Score indicates a trader’s ability to
                        manage risk and maintain consistent performance, meaning that the trader is not only capable of
                        being profitable but also able to sustain profitability over time and pave a smooth path to success.
                    </p><br><br>
                    <h3>Propiy Account Rules:</h3>
                    <ul>
                        <li>Account: Demo / Broker: Dedicated Server of Propridge Capital Markets Limited</li>
                        <li>Time Limit: None</li>
                        <li>Profit Target: None</li>
                        <li>Allowed Daily Drawdown: 5%</li>
                        <li>Allowed Overall Drawdown: 12%</li>
                        <li>Minimum Trading Days: None</li>
                        <li>Profit split: 80% every two weeks (first withdrawal after 30 days), payout in cryptocurrencies.
                        </li>
                    </ul>
                    <h3>Identity Verification Rules:</h3>
                    <p>After successfully meeting the targets for both challenge stages, reviewing account status, and
                        confirming completion, the trader must upload identity verification documents (national ID card or
                        passport) along with a selfie holding the ID card or passport in the Propiy user panel. After review
                        and confirmation, the Propiy account will be granted to the trader. The full name must match the
                        identity card details.</p><br>
                    <h3>Challenge Account Information Rules:</h3>
                    <p>The trader must not change the account information, including the main password and investor
                        password. If this rule is violated, the challenge will be disqualified.</p><br>
                    <h3>Challenge Start Time Calculation Rules:</h3>
                    <p>Account creation on Propiy is done by the trader. According to this rule, after creating an account
                        on Propiy and purchasing a challenge, the trader has 30 days to start the challenge and place the
                        first trade in the first stage.</p>
                    <p>In the second stage, after passing the first stage, the trader has 15 days to request the start of
                        the second-stage challenge. After submitting the request and receiving the second-stage challenge,
                        the trader has 30 days to place the first trade.</p><br>
                    <h3>Drawdown (Drawdown) Rules:</h3>
                    <p>The calculation basis for daily drawdown is the starting balance of the day, and for overall
                        drawdown, it is the initial account balance. During a trading day, the account equity must not fall
                        below 5% of the day's starting balance; otherwise, it is a rule violation.</p>
                    <p>If the account balance increases during a day, the daily drawdown is still calculated from the
                        starting balance, allowing for more risk. For example, if the starting balance is $10,000 and
                        reaches $10,200, the trader has $700 of risk allowance for the same day.</p>
                    <p>If the balance carries over to the next day at $10,200, the new daily drawdown is 5% of the new
                        starting balance, meaning (10,200 * 5% = 510).</p>
                    <p>The overall drawdown limit is 12%, calculated from the initial account balance.</p><br>
                    <h3>Profit Withdrawal Rules:</h3>
                    <p>After passing both challenge stages, the trader is given an account with an 80% profit split, while
                        20% remains for Propiy. Deposits and withdrawals are done via cryptocurrencies (USDT). Upon
                        withdrawal, the trader submits a profit withdrawal request to Propiy, and after reviewing the
                        account status, the profit is split and deposited. The account is then reset for the next cycle. If
                        violations are detected, the trader will not be eligible for any withdrawal.</p><br>
                    <h3>Refund Policy:</h3>
                    <p>A challenge refund is only possible if the trader has not created a challenge account. If the
                        challenge has already been created, a refund is not applicable. If the challenge is not created, the
                        trader has 15 days after order placement to request a refund; otherwise, a refund will not be
                        granted.</p><br>
                    <h3>Trading Style Rules:</h3>
                    <p>All trading styles, including swing trading, day trading, and scalping, are accepted.</p><br>
                    <h3>Forbidden Trading Strategies:</h3>
                    <p>Traders using excessively high leverage and risk strategies that do not align with proper prop firm
                        management may be disqualified.</p>
                    <p>Any trader attempting to pass the challenge by taking excessive risk on a single or few trades (over
                        80% of the profit target) will be considered in violation, and their challenge or real account will
                        be disqualified. This rule does not apply to traders using multiple strategies but aims to prevent
                        abusive risk-taking.</p><br>
                    <h3>Stop Loss Rules:</h3>
                    <p>Stop loss usage is not mandatory in challenge stages or Propiy accounts. However, for proper risk
                        management, we recommend using stop loss orders.</p><br>
                    <h3>Hedging Rules:</h3>
                    <p>Traders must not hedge between their own accounts or accounts of other traders on Propiy or other
                        prop firms. If such a violation occurs, the accounts will be revoked, and no refund will be given.
                        Propiy reserves the right to immediately terminate cooperation with the violating trader.</p><br>
                    <hr><br>
                    <p>If you have any questions, you can contact support via a support ticket in the user panel or through
                        live chat on the Propiy website during business hours.</p>
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

    </div> --}}






    {{-- <div
        class="flex flex-col gap-6 sm:gap-8 md:gap-10 bg-white dark:bg-slate-850 dark:shadow-dark-xl mx-autopy-4 sm:py-5 px-4 sm:px-6 md:px-7 rounded-2xl w-full  max-w-7xl">
        <!-- Start One Grid -->
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12">
                <div
                    class="bg-white hover:bg-gray-100 dark:bg-slate-850 dark:shadow-dark-xl w-full px-4 sm:px-6 md:px-10 py-4 rounded-2xl">
                    <div class="flex flex-col lg:flex-row justify-between gap-4 sm:gap-6">

                        <!-- متن -->
                        <div class="flex flex-col gap-0 flex-1">
                            <div class="text-left text-gray-700 dark:text-white">
                                <p class="text-xl font-bold">New Challenge</p>
                            </div>

                            <div class="text-gray-700 dark:text-white/80">
                                <p class="text-md font-bold leading-relaxed">
                                    Please complete the information below and create your custom challenge.
                                </p>
                            </div>

                            <div
                                class="bg-orange-100 flex flex-wrap  p-5 items-center justify-center text-left gap-5 rounded-xl">

                                <svg class="h-12 w-12 text-orange-500" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>

                                <span class="text-orange-500 font-bold">
                                    For purchasing through the Rial gateway, the second authentication step is required, and
                                    for purchasing Jet Jump, the third authentication step is mandatory.
                                </span>

                                <button type="button"
                                    class="w-80 bg-orange-500 text-sm p-2 font-bold text-white rounded-lg shadow-md transition 
                                hover:shadow-lg hover:-translate-y-px active:opacity-85 ">
                                    Second Authentication Step
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End One Grid -->

        <!-- Start Two Grid -->
        <div class="flex flex-col lg:flex-row gap-4 md:gap-6">
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
                            <span class="text-gray-600 font-bold w-35 sm:w-40 py-4">Two-Step</span>
                        </label>

                        <label
                            class="group flex items-center text-center justify-center gap-3 border px-6 py-3 rounded-md cursor-pointer">
                            <span class="ant-radio ant-wave-target mt-1 relative">
                                <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio"
                                    value="3" name="challengeType">
                                <span
                                    class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                            </span>
                            <span class="text-gray-600 font-bold w-35 sm:w-40 py-4">Jet Jump</span>
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
                    <p class="text-sm sm:text-2xl">Please read the Prop challenge terms and conditions.</p>
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
                    class="custom-scroll max-h-48 overflow-y-auto border-b border-t border-slate-700 py-2 pl-1 text-xs sm:text-sm lg:text-md leading-5 text-gray-500">
                    <p>Rules</p>
                    <p>Here, we have outlined the rules that traders must be fully aware of and comply with throughout their
                        collaboration with the prop firm Propiy. Please read carefully, as account status evaluations,
                        acceptance into challenges, and the granting of a Propiy account will be subject to the following
                        conditions:</p><br>
                    <p class="text-sm sm:text-3xl font-bold text-gray-700">Membership on the Website:</p>
                    <p>To purchase a challenge, it is recommended to first create a user account on the website and then
                        proceed with the challenge purchase.</p>
                    <p>We recommend starting with $5,000 challenges. Before purchasing a challenge, test your strategy on
                        demo accounts and ensure its profitability before starting the challenge.</p>
                    <p>Additionally, when depositing funds with cryptocurrencies, enter your email address on the deposit
                        page. After purchasing a challenge, the challenge account details will be automatically emailed to
                        you.</p><br>
                    <p>First Stage Rules:</p>
                    <ul>
                        <li>Account: Demo / Broker: Dedicated Server of Propridge Capital Markets Limited</li>
                        <li>Profit Target: 8%</li>
                        <li>Allowed Daily Drawdown: 5%</li>
                        <li>Allowed Overall Drawdown: 12%</li>
                        <li>Minimum Trading Days: 5 days</li>
                    </ul>
                    <p>(Broker Propridge Capital Markets Limited has no time limitations for first and second-stage
                        challenges.)</p>
                    <p class="text-sm sm:text-3xl font-bold text-gray-700">Second Stage Rules:</h3>
                    <ul>
                        <li>Account: Demo / Broker: Dedicated Server of Propridge Capital Markets Limited</li>
                        <li>Profit Target: 4%</li>
                        <li>Allowed Daily Drawdown: 5%</li>
                        <li>Allowed Overall Drawdown: 12%</li>
                        <li>Minimum Trading Days: 5 days</li>
                    </ul>
                    <p>(Broker Propridge Capital Markets Limited has no time limitations for first and second-stage
                        challenges.)</p><br><br>
                    <p class="text-sm sm:text-3xl font-bold text-gray-700">Prop Firm Stability Score Evaluation Criteria:
                        </h3>
                    <p>In the Prop Firm platform, besides profitability, the stability of performance and risk management by
                        traders are given special importance. For this reason, for new accounts created from March 10, 2025,
                        the "Stability Score" criterion is applied as a measure to evaluate the consistency of traders’
                        performance.<br>Conditions and Requirements:<br>Traders with $25,000 and $50,000 Challenge accounts
                        will be eligible to receive a Prop Firm Real account only if their Stability Score is at least 30%.
                        Otherwise, they must first raise their score above 30%. At the Prop Firm Real account stage, traders
                        will only be allowed to request profit withdrawals when their Stability Score exceeds 30%. Purpose
                        of this Criterion: This criterion is designed to encourage stable and professional traders and to
                        prevent high-risk, unstable strategies. A high Stability Score indicates a trader’s ability to
                        manage risk and maintain consistent performance, meaning that the trader is not only capable of
                        being profitable but also able to sustain profitability over time and pave a smooth path to success.
                    </p><br><br>
                    <p class="text-sm sm:text-3xl font-bold text-gray-700">Propiy Account Rules:</h3>
                    <ul>
                        <li>Account: Demo / Broker: Dedicated Server of Propridge Capital Markets Limited</li>
                        <li>Time Limit: None</li>
                        <li>Profit Target: None</li>
                        <li>Allowed Daily Drawdown: 5%</li>
                        <li>Allowed Overall Drawdown: 12%</li>
                        <li>Minimum Trading Days: None</li>
                        <li>Profit split: 80% every two weeks (first withdrawal after 30 days), payout in cryptocurrencies.
                        </li>
                    </ul>
                    <p class="text-sm sm:text-3xl font-bold text-gray-700">Identity Verification Rules:</h3>
                    <p>After successfully meeting the targets for both challenge stages, reviewing account status, and
                        confirming completion, the trader must upload identity verification documents (national ID card or
                        passport) along with a selfie holding the ID card or passport in the Propiy user panel. After review
                        and confirmation, the Propiy account will be granted to the trader. The full name must match the
                        identity card details.</p><br>
                    <p class="text-sm sm:text-3xl font-bold text-gray-700">Challenge Account Information Rules:</h3>
                    <p>The trader must not change the account information, including the main password and investor
                        password. If this rule is violated, the challenge will be disqualified.</p><br>
                    <p class="text-sm sm:text-3xl font-bold text-gray-700">Challenge Start Time Calculation Rules:</h3>
                    <p>Account creation on Propiy is done by the trader. According to this rule, after creating an account
                        on Propiy and purchasing a challenge, the trader has 30 days to start the challenge and place the
                        first trade in the first stage.</p>
                    <p>In the second stage, after passing the first stage, the trader has 15 days to request the start of
                        the second-stage challenge. After submitting the request and receiving the second-stage challenge,
                        the trader has 30 days to place the first trade.</p><br>
                    <p class="text-sm sm:text-3xl font-bold text-gray-700">Drawdown (Drawdown) Rules:</h3>
                    <p>The calculation basis for daily drawdown is the starting balance of the day, and for overall
                        drawdown, it is the initial account balance. During a trading day, the account equity must not fall
                        below 5% of the day's starting balance; otherwise, it is a rule violation.</p>
                    <p>If the account balance increases during a day, the daily drawdown is still calculated from the
                        starting balance, allowing for more risk. For example, if the starting balance is $10,000 and
                        reaches $10,200, the trader has $700 of risk allowance for the same day.</p>
                    <p>If the balance carries over to the next day at $10,200, the new daily drawdown is 5% of the new
                        starting balance, meaning (10,200 * 5% = 510).</p>
                    <p>The overall drawdown limit is 12%, calculated from the initial account balance.</p><br>
                    <p class="text-sm sm:text-3xl font-bold text-gray-700">Profit Withdrawal Rules:</h3>
                    <p>After passing both challenge stages, the trader is given an account with an 80% profit split, while
                        20% remains for Propiy. Deposits and withdrawals are done via cryptocurrencies (USDT). Upon
                        withdrawal, the trader submits a profit withdrawal request to Propiy, and after reviewing the
                        account status, the profit is split and deposited. The account is then reset for the next cycle. If
                        violations are detected, the trader will not be eligible for any withdrawal.</p><br>
                    <p class="text-sm sm:text-3xl font-bold text-gray-700">Refund Policy:</h3>
                    <p>A challenge refund is only possible if the trader has not created a challenge account. If the
                        challenge has already been created, a refund is not applicable. If the challenge is not created, the
                        trader has 15 days after order placement to request a refund; otherwise, a refund will not be
                        granted.</p><br>
                    <p class="text-sm sm:text-3xl font-bold text-gray-700">Trading Style Rules:</h3>
                    <p>All trading styles, including swing trading, day trading, and scalping, are accepted.</p><br>
                    <p class="text-sm sm:text-3xl font-bold text-gray-700">Forbidden Trading Strategies:</h3>
                    <p>Traders using excessively high leverage and risk strategies that do not align with proper prop firm
                        management may be disqualified.</p>
                    <p>Any trader attempting to pass the challenge by taking excessive risk on a single or few trades (over
                        80% of the profit target) will be considered in violation, and their challenge or real account will
                        be disqualified. This rule does not apply to traders using multiple strategies but aims to prevent
                        abusive risk-taking.</p><br>
                    <p class="text-sm sm:text-3xl font-bold text-gray-700">Stop Loss Rules:</h3>
                    <p>Stop loss usage is not mandatory in challenge stages or Propiy accounts. However, for proper risk
                        management, we recommend using stop loss orders.</p><br>
                    <p class="text-sm sm:text-3xl font-bold text-gray-700">Hedging Rules:</h3>
                    <p>Traders must not hedge between their own accounts or accounts of other traders on Propiy or other
                        prop firms. If such a violation occurs, the accounts will be revoked, and no refund will be given.
                        Propiy reserves the right to immediately terminate cooperation with the violating trader.</p><br>
                    <p>If you have any questions, you can contact support via a support ticket in the user panel or through
                        live chat on the Propiy website during business hours.</p>
                </div>

                <div class="flex items-center justify-between pb-8 pt-4">
                    <label class="custom-checkbox">
                        <input class="custom-checkbox-input" type="checkbox">
                        <span class="custom-checkbox-box"></span>
                        <span class="text-gray-900">I have read and accept all general and specific terms and
                            conditions.</span>
                    </label>
                </div>

                <div class="flex justify-end gap-4">
                    <button class="px-4 py-1 rounded-lg text-gray-700  hover:text-orange-500 transition">
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


            <!-- End Two Grid -->

        </div> --}}


        <div class="bg-gray-100 dark:bg-slate-900">
            <div class="flex flex-col gap-6 sm:gap-8 md:gap-10 bg-white dark:bg-slate-850 dark:shadow-dark-xl mx-auto py-4 sm:py-5 px-4 sm:px-6 md:px-7 rounded-2xl w-full max-w-7xl">
                <!-- Start One Grid -->
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <div class="bg-white hover:bg-gray-100 dark:bg-slate-850 dark:shadow-dark-xl w-full px-4 sm:px-6 md:px-10 py-4 rounded-2xl">
                            <div class="flex flex-col lg:flex-row justify-between gap-4 sm:gap-6">
                                <!-- متن -->
                                <div class="flex flex-col gap-0 flex-1">
                                    <div class="text-left text-gray-700 dark:text-white">
                                        <p class="text-xl sm:text-2xl font-bold">New Challenge</p>
                                    </div>
                                    <div class="text-gray-700 dark:text-white/80">
                                        <p class="text-md sm:text-lg font-bold leading-relaxed">
                                            Please complete the information below and create your custom challenge.
                                        </p>
                                    </div>
                                    <div class="bg-orange-100 flex flex-wrap p-3 sm:p-5 items-center justify-center text-left gap-3 sm:gap-5 rounded-xl">
                                        <svg class="h-10 w-10 sm:h-12 sm:w-12 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-orange-500 font-bold text-sm sm:text-base">
                                            For purchasing through the Rial gateway, the second authentication step is required, and for purchasing Jet Jump, the third authentication step is mandatory.
                                        </span>
                                        <button type="button" class="w-full sm:w-80 bg-orange-500 text-sm sm:text-base p-2 font-bold text-white rounded-lg shadow-md transition hover:shadow-lg hover:-translate-y-px active:opacity-85">
                                            Second Authentication Step
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End One Grid -->
        
                <!-- Start Two Grid -->
                <div class="flex flex-col lg:flex-row gap-4 md:gap-6">
                    <!-- Start Grid Left -->
                    <div class="flex flex-col gap-6 sm:gap-9 border px-4 sm:px-5 py-5 rounded-xl w-full">
                        <div>
                            <h3 class="text-black dark:text-white text-lg sm:text-xl font-extrabold mb-4">Challenge Type</h3>
                            <div class="flex flex-row flex-wrap gap-4 items-center text-center justify-center">
                                <label class="group flex items-center text-center justify-center gap-3 border px-4 sm:px-6 py-3 rounded-md cursor-pointer">
                                    <span class="ant-radio ant-wave-target mt-1 relative">
                                        <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio" value="3" name="challengeType">
                                        <span class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                                    </span>
                                    <span class="text-gray-600 dark:text-white font-bold w-50 sm:w-40 py-4">Two-Step</span>
                                </label>
                                <label class="group flex items-center text-center justify-center gap-3 border px-4 sm:px-6 py-3 rounded-md cursor-pointer">
                                    <span class="ant-radio ant-wave-target mt-1 relative">
                                        <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio" value="3" name="challengeType">
                                        <span class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                                    </span>
                                    <span class="text-gray-600 dark:text-white font-bold w-50 sm:w-40 py-4">Jet Jump</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-black dark:text-white text-lg sm:text-xl font-extrabold mb-4">Account Balance</h3>
                            <div class="flex flex-row flex-wrap gap-4 items-center text-center justify-center">
                                <label class="group flex items-center text-center justify-center gap-3 border px-4 sm:px-6 py-3 rounded-md cursor-pointer">
                                    <span class="ant-radio ant-wave-target mt-1 relative">
                                        <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio" value="3" name="AccountBalance">
                                        <span class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                                    </span>
                                    <span class="text-gray-600 dark:text-white font-bold w-20 sm:w-50 py-4">5,000</span>
                                </label>
                                <label class="group flex items-center text-center justify-center gap-3 border px-4 sm:px-6 py-3 rounded-md cursor-pointer">
                                    <span class="ant-radio ant-wave-target mt-1 relative">
                                        <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio" value="3" name="AccountBalance">
                                        <span class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                                    </span>
                                    <span class="text-gray-600 dark:text-white font-bold w-20 sm:w-50 py-4">10,000</span>
                                </label>
                                <label class="group flex items-center text-center justify-center gap-3 border px-4 sm:px-6 py-3 rounded-md cursor-pointer">
                                    <span class="ant-radio ant-wave-target mt-1 relative">
                                        <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio" value="3" name="AccountBalance">
                                        <span class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                                    </span>
                                    <span class="text-gray-600 dark:text-white font-bold w-20 sm:w-50 py-4">25,000</span>
                                </label>
                                <label class="group flex items-center text-center justify-center gap-3 border px-4 sm:px-6 py-3 rounded-md cursor-pointer">
                                    <span class="ant-radio ant-wave-target mt-1 relative">
                                        <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio" value="3" name="AccountBalance">
                                        <span class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                                    </span>
                                    <span class="text-gray-600 dark:text-white font-bold w-20 sm:w-50 py-4">50,000</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-black dark:text-white text-lg sm:text-xl font-extrabold mb-4">Broker</h3>
                            <div class="flex flex-row flex-wrap gap-4 items-center text-center justify-center">
                                <label class="group flex items-center text-center justify-center gap-3 border px-4 sm:px-6 py-3 rounded-md cursor-pointer">
                                    <span class="ant-radio ant-wave-target mt-1 relative">
                                        <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio" value="3" name="Broker">
                                        <span class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                                    </span>
                                    <span class="text-gray-600 dark:text-white font-bold w-full sm:w-125 py-4">Dedicated Server - Propridge Capital Markets Limited</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-black dark:text-white text-lg sm:text-xl font-extrabold mb-4">Platform</h3>
                            <div class="flex flex-row flex-wrap gap-4 items-center text-center justify-center">
                                <label class="group flex items-center text-center justify-center gap-3 border px-4 sm:px-6 py-3 rounded-md cursor-pointer">
                                    <span class="ant-radio ant-wave-target mt-1 relative">
                                        <input class="ant-radio-input absolute inset-0 opacity-0 cursor-pointer z-10" type="radio" value="3" name="Platform">
                                        <span class="ant-radio-inner w-5 h-5 border-2 border-gray-400 rounded-full block transition-all duration-300"></span>
                                    </span>
                                    <span class="text-gray-600 dark:text-white font-bold w-50 sm:w-125 py-4">MT5</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- End Grid Left -->
        
                    <!-- Start Grid Right -->
                    <div class="w-full border rounded-xl p-4 sm:p-5 space-y-2 text-white text-lg">
                        
                        <div class="w-full border rounded-xl bg-orange-400 p-4 sm:p-5 space-y-0 text-white text-base sm:text-lg">
                            <!-- Header Row -->
                            <div class="flex justify-between font-extrabold text-center">
                                <div class="w-1/4"></div>
                                <div class="w-2/3 grid grid-cols-3 gap-x-0">
                                    <div><p class="text-sm sm:text-md">Phase 1</p></div>
                                    <div><p class="text-sm sm:text-md">Phase 2</p></div>
                                    <div><p class="text-sm sm:text-md">Real Account</p></div>
                                </div>
                            </div>
                            <!-- Row: Duration -->
                            <div class="flex justify-between items-center px-3 py-2 pb-0 mb-0 even:bg-orange-500 even:rounded-xl">
                                <div class="w-1/4 whitespace-nowrap "><p class="text-sm sm:text-md ">Duration</p></div>
                                <div class="w-2/3 grid grid-cols-3 gap-x-0 text-center">
                                    <div><p class="text-sm sm:text-md">Unlimited</p></div>
                                    <div><p class="text-sm sm:text-md">Unlimited</p></div>
                                    <div><p class="text-sm sm:text-md">Unlimited</p></div>
                                </div>
                            </div>
                            <!-- Row: Daily Drawdown -->
                            <div class="flex justify-between items-center px-3 py-2 pb-0 mb-0 even:bg-orange-500 even:rounded-xl">
                                <div class="w-1/4 whitespace-nowrap font-medium"><p class="text-sm sm:text-md">Daily Drawdown</p></div>
                                <div class="w-2/3 grid grid-cols-3 gap-x-0 text-center">
                                    <div><p class="text-sm sm:text-md">5%</p></div>
                                    <div><p class="text-sm sm:text-md">5%</p></div>
                                    <div><p class="text-sm sm:text-md">5%</p></div>
                                </div>
                            </div>
                            <!-- Row: Overall Drawdown -->
                            <div class="flex justify-between items-center px-3 py-2 pb-0 mb-0 even:bg-orange-500 even:rounded-xl">
                                <div class="w-1/4 whitespace-nowrap font-medium"><p class="text-sm sm:text-md">Overall Drawdown</p></div>
                                <div class="w-2/3 grid grid-cols-3 gap-x-4 text-center">
                                    <div><p class="text-sm sm:text-md">12%</p></div>
                                    <div><p class="text-sm sm:text-md">12%</p></div>
                                    <div><p class="text-sm sm:text-md">12%</p></div>
                                </div>
                            </div>
                            <!-- Row: Profit Target -->
                            <div class="flex justify-between items-center px-3 py-2 pb-0 mb-0 even:bg-orange-500 even:rounded-xl">
                                <div class="w-1/4 whitespace-nowrap font-medium"><p class="text-sm sm:text-md">Profit Target</p></div>
                                <div class="w-2/3 grid grid-cols-3 gap-x-4 text-center">
                                    <div><p class="text-sm sm:text-md">8%</p></div>
                                    <div><p class="text-sm sm:text-md">4%</p></div>
                                    <div><p class="text-sm sm:text-md">-</p></div>
                                </div>
                            </div>
                            <!-- Row: Minimum Trading Days -->
                            <div class="flex justify-between items-center px-3 py-2 pb-0 mb-0 even:bg-orange-500 even:rounded-xl">
                                <div class="w-1/4 whitespace-nowrap font-medium"><p class="text-sm sm:text-md">Minimum Trading Days</p></div>
                                <div class="w-2/3 grid grid-cols-3 gap-x-4 text-center">
                                    <div><p class="text-sm sm:text-md">5 days</p></div>
                                    <div><p class="text-sm sm:text-md">5 days</p></div>
                                    <div><p class="text-sm sm:text-md">-</p></div>
                                </div>
                            </div>
                            <!-- Row: Total Price -->
                            <div class="flex justify-between items-center px-3 py-2 pb-0 mb-0 even:bg-orange-500 even:rounded-xl">
                                <div class="w-1/4 whitespace-nowrap font-medium"><p class="text-sm sm:text-md">Total Price</p></div>
                                <div class="w-2/3 grid grid-cols-3 gap-x-0 text-center">
                                    <div></div>
                                    <div></div>
                                    <div class="text-center"><p class="text-sm sm:text-md">$0</p></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-row justify-between text-gray-900 dark:text-white py-5">
                            <p class="text-sm sm:text-xl">Please read the Prop challenge terms and conditions.</p>
                            <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M2 9.98V9c0-5 2-7 7-7h6c5 0 7 2 7 7v6c0 5-2 7-7 7h-1" stroke="#FF8A65" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="m13 11 5.01-5.02H14M18.01 5.98v4.01M11 16.15v2.7C11 21.1 10.1 22 7.85 22h-2.7C2.9 22 2 21.1 2 18.85v-2.7C2 13.9 2.9 13 5.15 13h2.7c2.25 0 3.15.9 3.15 3.15Z" stroke="#FF8A65" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="custom-scroll max-h-48 overflow-y-auto border-b border-t border-slate-700 py-2 pl-1 text-xs sm:text-sm lg:text-md leading-5 text-gray-500 dark:text-gray-400">
                            <p>Rules</p>
                    <p>Here, we have outlined the rules that traders must be fully aware of and comply with throughout their collaboration with the prop firm Propiy. Please read carefully, as account status evaluations, acceptance into challenges, and the granting of a Propiy account will be subject to the following conditions:</p><br>
                    <p class="text-sm sm:text-2xl font-bold text-gray-700 dark:text-white">Membership on the Website:</p>
                    <p>To purchase a challenge, it is recommended to first create a user account on the website and then proceed with the challenge purchase.</p>
                    <p>We recommend starting with $5,000 challenges. Before purchasing a challenge, test your strategy on demo accounts and ensure its profitability before starting the challenge.</p>
                    <p>Additionally, when depositing funds with cryptocurrencies, enter your email address on the deposit page. After purchasing a challenge, the challenge account details will be automatically emailed to you.</p><br>
                    <p>First Stage Rules:</p>
                    <ul>
                        <li>Account: Demo / Broker: Dedicated Server of Propridge Capital Markets Limited</li>
                        <li>Profit Target: 8%</li>
                        <li>Allowed Daily Drawdown: 5%</li>
                        <li>Allowed Overall Drawdown: 12%</li>
                        <li>Minimum Trading Days: 5 days</li>
                    </ul>
                    <p>(Broker Propridge Capital Markets Limited has no time limitations for first and second-stage challenges.)</p>
                    <p class="text-sm sm:text-2xl font-bold text-gray-700 dark:text-white">Second Stage Rules:</p>
                    <ul>
                        <li>Account: Demo / Broker: Dedicated Server of Propridge Capital Markets Limited</li>
                        <li>Profit Target: 4%</li>
                        <li>Allowed Daily Drawdown: 5%</li>
                        <li>Allowed Overall Drawdown: 12%</li>
                        <li>Minimum Trading Days: 5 days</li>
                    </ul>
                    <p>(Broker Propridge Capital Markets Limited has no time limitations for first and second-stage challenges.)</p><br><br>
                    <p class="text-sm sm:text-2xl font-bold text-gray-700 dark:text-white">Prop Firm Stability Score Evaluation Criteria:</p>
                    <p>In the Prop Firm platform, besides profitability, the stability of performance and risk management by traders are given special importance. For this reason, for new accounts created from March 10, 2025, the "Stability Score" criterion is applied as a measure to evaluate the consistency of traders’ performance.<br>Conditions and Requirements:<br>Traders with $25,000 and $50,000 Challenge accounts will be eligible to receive a Prop Firm Real account only if their Stability Score is at least 30%. Otherwise, they must first raise their score above 30%. At the Prop Firm Real account stage, traders will only be allowed to request profit withdrawals when their Stability Score exceeds 30%. Purpose of this Criterion: This criterion is designed to encourage stable and professional traders and to prevent high-risk, unstable strategies. A high Stability Score indicates a trader’s ability to manage risk and maintain consistent performance, meaning that the trader is not only capable of being profitable but also able to sustain profitability over time and pave a smooth path to success.</p><br><br>
                    <p class="text-sm sm:text-2xl font-bold text-gray-700 dark:text-white">Propiy Account Rules:</p>
                    <ul>
                        <li>Account: Demo / Broker: Dedicated Server of Propridge Capital Markets Limited</li>
                        <li>Time Limit: None</li>
                        <li>Profit Target: None</li>
                        <li>Allowed Daily Drawdown: 5%</li>
                        <li>Allowed Overall Drawdown: 12%</li>
                        <li>Minimum Trading Days: None</li>
                        <li>Profit split: 80% every two weeks (first withdrawal after 30 days), payout in cryptocurrencies.</li>
                    </ul>
                    <p class="text-sm sm:text-2xl font-bold text-gray-700 dark:text-white">Identity Verification Rules:</p>
                    <p>After successfully meeting the targets for both challenge stages, reviewing account status, and confirming completion, the trader must upload identity verification documents (national ID card or passport) along with a selfie holding the ID card or passport in the Propiy user panel. After review and confirmation, the Propiy account will be granted to the trader. The full name must match the identity card details.</p><br>
                    <p class="text-sm sm:text-2xl font-bold text-gray-700 dark:text-white">Challenge Account Information Rules:</p>
                    <p>The trader must not change the account information, including the main password and investor password. If this rule is violated, the challenge will be disqualified.</p><br>
                    <p class="text-sm sm:text-2xl font-bold text-gray-700 dark:text-white">Challenge Start Time Calculation Rules:</p>
                    <p>Account creation on Propiy is done by the trader. According to this rule, after creating an account on Propiy and purchasing a challenge, the trader has 30 days to start the challenge and place the first trade in the first stage.</p>
                    <p>In the second stage, after passing the first stage, the trader has 15 days to request the start of the second-stage challenge. After submitting the request and receiving the second-stage challenge, the trader has 30 days to place the first trade.</p><br>
                    <p class="text-sm sm:text-2xl font-bold text-gray-700 dark:text-white">Drawdown (Drawdown) Rules:</p>
                    <p>The calculation basis for daily drawdown is the starting balance of the day, and for overall drawdown, it is the initial account balance. During a trading day, the account equity must not fall below 5% of the day's starting balance; otherwise, it is a rule violation.</p>
                    <p>If the account balance increases during a day, the daily drawdown is still calculated from the starting balance, allowing for more risk. For example, if the starting balance is $10,000 and reaches $10,200, the trader has $700 of risk allowance for the same day.</p>
                    <p>If the balance carries over to the next day at $10,200, the new daily drawdown is 5% of the new starting balance, meaning (10,200 * 5% = 510).</p>
                    <p>The overall drawdown limit is 12%, calculated from the initial account balance.</p><br>
                    <p class="text-sm sm:text-2xl font-bold text-gray-700 dark:text-white">Profit Withdrawal Rules:</p>
                    <p>After passing both challenge stages, the trader is given an account with an 80% profit split, while 20% remains for Propiy. Deposits and withdrawals are done via cryptocurrencies (USDT). Upon withdrawal, the trader submits a profit withdrawal request to Propiy, and after reviewing the account status, the profit is split and deposited. The account is then reset for the next cycle. If violations are detected, the trader will not be eligible for any withdrawal.</p><br>
                    <p class="text-sm sm:text-2xl font-bold text-gray-700 dark:text-white">Refund Policy:</p>
                    <p>A challenge refund is only possible if the trader has not created a challenge account. If the challenge has already been created, a refund is not applicable. If the challenge is not created, the trader has 15 days after order placement to request a refund; otherwise, a refund will not be granted.</p><br>
                    <p class="text-sm sm:text-2xl font-bold text-gray-700 dark:text-white">Trading Style Rules:</p>
                    <p>All trading styles, including swing trading, day trading, and scalping, are accepted.</p><br>
                    <p class="text-sm sm:text-2xl font-bold text-gray-700 dark:text-white">Forbidden Trading Strategies:</p>
                    <p>Traders using excessively high leverage and risk strategies that do not align with proper prop firm management may be disqualified.</p>
                    <p>Any trader attempting to pass the challenge by taking excessive risk on a single or few trades (over 80% of the profit target) will be considered in violation, and their challenge or real account will be disqualified. This rule does not apply to traders using multiple strategies but aims to prevent abusive risk-taking.</p><br>
                    <p class="text-sm sm:text-2xl font-bold text-gray-700 dark:text-white">Stop Loss Rules:</p>
                    <p>Stop loss usage is not mandatory in challenge stages or Propiy accounts. However, for proper risk management, we recommend using stop loss orders.</p><br>
                    <p class="text-sm sm:text-2xl font-bold text-gray-700 dark:text-white">Hedging Rules:</p>
                    <p>Traders must not hedge between their own accounts or accounts of other traders on Propiy or other prop firms. If such a violation occurs, the accounts will be revoked, and no refund will be given. Propiy reserves the right to immediately terminate cooperation with the violating trader.</p><br>
                    <p>If you have any questions, you can contact support via a support ticket in the user panel or through live chat on the Propiy website during business hours.</p>
                </div>
                <div class="flex items-center justify-between pb-8 pt-4">
                    <label class="custom-checkbox flex items-center gap-2">
                        <input class="custom-checkbox-input hidden" type="checkbox">
                        <span class="custom-checkbox-box relative w-5 h-5 border-2 border-gray-400 rounded bg-white"></span>
                        <span class="text-gray-900 dark:text-white text-sm sm:text-base">I have read and accept all general and specific terms and conditions.</span>
                    </label>
                </div>
                <div class="flex justify-end gap-4">
                    <button class="px-4 py-1 rounded-lg text-gray-700 dark:text-white hover:text-orange-500 transition">
                        <div class="hover:bg-gray-100 dark:hover:bg-slate-900 px-4 py-1 rounded-lg text-sm">Cancel</div>
                    </button>
                    <button class="flex items-center gap-2 bg-orange-500 opacity-55 text-white font-medium px-4 py-1 rounded-lg transition duration-150" disabled>
                        <span class="text-sm">Confirm & Continue</span>
                        <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="9 18 15 12 9 6" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- End Grid Right -->
        </div>
        <!-- End Two Grid -->
    </div>
        </div>













        
    @endsection
