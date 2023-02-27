@extends('../layout/' . $layout)

@section('subhead')
    <title>Dashboard - Smileville Dental Services</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Todays Payment Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Billing Summary for {{ date('F j, Y') }}</h2>
                        <a href="" class="ml-auto flex items-center text-primary">
                            <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data
                        </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5 ">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="33% Higher than last month">
                                                33% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        ${{ $totalPaymentsToday }}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">
                                        {{ $paidTransactionsToday->count() + $pendingTransactionsToday->count() + $failedTransactionsToday->count() }} Total Payments
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard-check" class="report-box__icon text-pending"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="2% Lower than last month">
                                                2% <i data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        {{ $transactionsPaidToday }}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">
                                        {{ $paidTransactionsToday->count() }} Completed Payments
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard-list" class="report-box__icon text-warning"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="12% Higher than last month">
                                                12% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        {{ $transactionsPendingToday }}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">
                                        {{ $pendingTransactionsToday->count() }} Pending Payments
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard-x" class="report-box__icon text-success"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="22% Higher than last month">
                                                22% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        {{ $transactionsFailedToday }}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">
                                        {{ $failedTransactionsToday->count() }} Failed Payments
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Todays Payment Report -->
                <!-- BEGIN: Overall Payment Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Overall Billing Summary</h2>
                        <a href="" class="ml-auto flex items-center text-primary">
                            <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data
                        </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5 ">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="33% Higher than last month">
                                                33% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        ${{ $totalPayments }}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">
                                        {{ $paidTransactions->count() + $pendingTransactions->count() + $failedTransactions->count() }} Total Payments
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard-check" class="report-box__icon text-pending"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="2% Lower than last month">
                                                2% <i data-lucide="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        {{ $transactionsPaid }}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">
                                        {{ $paidTransactions->count() }} Completed Payments
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard-list" class="report-box__icon text-warning"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="12% Higher than last month">
                                                12% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        {{ $transactionsPending }}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">
                                        {{ $pendingTransactions->count() }} Pending Payments
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-lucide="clipboard-x" class="report-box__icon text-success"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="22% Higher than last month">
                                                22% <i data-lucide="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6 text-center">
                                        {{ $transactionsFailed }}
                                    </div>
                                    <div class="text-base text-slate-500 mt-1 text-center">
                                        {{ $failedTransactions->count() }} Failed Payments
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Overall Payment Report -->
                <!-- BEGIN: Payments by Month (GRAPH)-->
                <div class="col-span-12 lg:col-span-6 mt-8">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Payments by Month</h2>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="flex flex-col md:flex-row md:items-center">
                            <div class="flex">
                                <div>
                                    <div class="text-primary dark:text-slate-300 text-lg xl:text-xl font-medium">
                                        {{-- {{ $appointmentsThisMonth }} --}}
                                    </div>
                                    <div class="mt-0.5 text-slate-500">This Month</div>
                                </div>
                                <div class="w-px h-12 border border-r border-dashed border-slate-200 dark:border-darkmode-300 mx-4 xl:mx-5"></div>
                                <div>
                                    <div class="text-slate-500 text-lg xl:text-xl font-medium">
                                        {{-- {{ $appointmentsPreviousMonth }} --}}
                                    </div>
                                    <div class="mt-0.5 text-slate-500">Last Month</div>
                                </div>
                            </div>
                        </div>
                        <div class="report-chart">
                            <div class="h-[275px]">
                                <canvas id="report-line-chart" class="mt-6 -mb-6" 
                                {{-- data-prevmonth-count="{{ $appointmentsPreviousMonth }}" data-thismonth-count="{{ $appointmentsThisMonth }}" data-nextmonth-count="{{ $appointmentsNextMonth }}" --}}
                                ></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Payments by Month (GRAPH) -->
                <!-- BEGIN: Payment Methods (PIE CHART)-->
                <div class="col-span-12 sm:col-span-6 lg:col-span-6 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Payment Methods</h2>
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        {{-- <div class="mt-3">
                            <div class="h-[213px]"> --}}
                                {{-- <canvas id="report-pie-chart" data-regularcheckup-percentage="{{ $regularCheckupPercentage }}" data-emergency-percentage="{{ $emergencyPercentage }}" data-cleaning-percentage="{{ $cleaningPercentage }}">></canvas> --}}
                            {{-- </div>
                        </div> --}}
                        {{-- <div class="card">
                            <div class="card-body">
                                <canvas id="payment-method-chart"></canvas>
                            </div>
                        </div> --}}

                        {{-- <canvas id="payment-methods-chart" width="400" height="400"></canvas> --}}

                        {{-- <canvas id="payment-methods-chart"></canvas> --}}


                        


                        <div class="w-52 sm:w-auto mx-auto mt-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                <span class="truncate">Regular Checkup</span>
                                {{-- <span class="font-medium ml-auto">{{ $regularCheckupPercentage }}%</span> --}}
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-danger rounded-full mr-3"></div>
                                <span class="truncate">Emergency</span>
                                {{-- <span class="font-medium ml-auto">{{ $emergencyPercentage }}%</span> --}}
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                <span class="truncate">Cleaning</span>
                                {{-- <span class="font-medium ml-auto">{{ $cleaningPercentage }}%</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: BEGIN: Payment Methods (PIE CHART)-->
                

                <div class="card">
                    <div class="card-header">
                        Payment Methods
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Payment Method</th>
                                    <th>Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($paymentMethods as $paymentMethod)
                                    <tr>
                                        <td>{{ $paymentMethod->payment_method }}</td>
                                        <td>{{ $paymentMethod->count }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                
                
                
                
                
                
                
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
                    <!-- BEGIN: Today's Appointment -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3 2xl:mt-8">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Today's Patients</h2>
                        </div>
                        <div class="mt-5">
                            @foreach ($appointmentsTodayList as $appointment)
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        {{-- <div class="ml-4 mr-auto">
                                            <p>Doctor's Name</p>
                                        </div> --}}
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">{{ $appointment->first_name }} {{ $appointment->last_name }}</div>
                                            <div class="text-slate-500 text-xs mt-0.5">{{ $appointment->appointment_type }}</div>
                                            <div class="font-medium">{{ $appointment->doctor_first_name }} {{ $appointment->doctor_last_name }}</div>
                                        </div>
                                        <div>
                                            @switch($appointment->status)
                                                @case('pending')
                                                    <p class="text-yellow-500">{{ ucfirst($appointment->status) }}</p>
                                                    @break
                                                @case('completed')
                                                    <p class="text-green-500">{{ ucfirst($appointment->status) }}</p>
                                                    @break
                                                @case('cancelled')
                                                    <p class="text-red-500">{{ ucfirst($appointment->status) }}</p>
                                                    @break
                                                @default
                                                    <p>Unknown Status</p>
                                            @endswitch
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                        </div>
                    </div>
                    <!-- END: Today's Appointment -->
                    
                    <!-- BEGIN: Important Notes -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-auto">Important Notes</h2>
                            <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-lucide="chevron-left" class="w-4 h-4"></i>
                            </button>
                            <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="mt-5 intro-x">
                            <div class="box zoom-in">
                                <div class="tiny-slider" id="important-notes">
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Safe Work Environment</div>
                                        <div class="text-slate-400 mt-1">Office Director</div>
                                        <div class="text-slate-500 text-justify mt-1">We want to remind you of the importance of maintaining a safe work environment. Please be sure to follow all safety procedures and report any concerns or incidents to your supervisor immediately. Thank you for your commitment to maintaining a safe workplace.</div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Work Schedule Changes</div>
                                        <div class="text-slate-400 mt-1">Office Scheduler</div>
                                        <div class="text-slate-500 text-justify mt-1">we would like to inform you that there will be a change in your work schedule starting March 1, 2023. Your new schedule will be from 9AM to 6PM and we appreciate your flexibility in accommodating this change.</div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Employee Appreciation Notice</div>
                                        <div class="text-slate-400 mt-1">Human Resources</div>
                                        <div class="text-slate-500 text-justify mt-1">To All Employees: We would like to express our appreciation for your hard work and dedication to our dental clinic. Your efforts have contributed to our success and we want to thank you for being a valuable member of our team.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                    <!-- BEGIN: Calendar -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Calendar</h2>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x box">
                                <div class="p-5">
                                    <div class="flex">
                                        <i data-lucide="chevron-left" class="w-5 h-5 text-slate-500"></i>
                                        <div class="font-medium text-base mx-auto">{{date('F')}}</div>
                                        <i data-lucide="chevron-right" class="w-5 h-5 text-slate-500"></i>
                                    </div>
                                    <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                        <div class="font-medium">Su</div>
                                        <div class="font-medium">Mo</div>
                                        <div class="font-medium">Tu</div>
                                        <div class="font-medium">We</div>
                                        <div class="font-medium">Th</div>
                                        <div class="font-medium">Fr</div>
                                        <div class="font-medium">Sa</div>
                                        <div class="py-0.5 rounded relative text-slate-500">29</div>
                                        <div class="py-0.5 rounded relative text-slate-500">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">31</div>
                                        <div class="py-0.5 rounded relative">1</div>
                                        <div class="py-0.5 rounded relative">2</div>
                                        <div class="py-0.5 rounded relative">3</div>
                                        <div class="py-0.5 rounded relative">4</div>
                                        <div class="py-0.5 rounded relative">5</div>
                                        <div class="py-0.5 rounded relative">6</div>
                                        <div class="py-0.5 rounded relative">7</div>
                                        <div class="py-0.5 rounded relative">8</div>
                                        <div class="py-0.5 rounded relative">9</div>
                                        <div class="py-0.5 rounded relative">10</div>
                                        <div class="py-0.5 rounded relative">11</div>
                                        <div class="py-0.5 rounded relative">12</div>
                                        <div class="py-0.5 rounded relative">13</div>
                                        <div class="py-0.5 rounded relative">14</div>
                                        <div class="py-0.5 rounded relative">15</div>
                                        <div class="py-0.5 rounded relative">16</div>
                                        <div class="py-0.5 rounded relative">17</div>
                                        <div class="py-0.5 rounded relative">18</div>
                                        <div class="py-0.5 rounded relative">19</div>
                                        <div class="py-0.5 rounded relative">20</div>
                                        <div class="py-0.5 rounded relative">21</div>
                                        <div class="py-0.5 rounded relative">22</div>
                                        <div class="py-0.5 rounded relative">23</div>
                                        <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">24</div>
                                        <div class="py-0.5 rounded relative">25</div>
                                        <div class="py-0.5 rounded relative">26</div>
                                        <div class="py-0.5 rounded relative">27</div>
                                        <div class="py-0.5 rounded relative">28</div>
                                        <div class="py-0.5 rounded relative">29</div>
                                        <div class="py-0.5 rounded relative">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">1</div>
                                        <div class="py-0.5 rounded relative text-slate-500">2</div>
                                        <div class="py-0.5 rounded relative text-slate-500">3</div>
                                        <div class="py-0.5 rounded relative text-slate-500">4</div>
                                        <div class="py-0.5 rounded relative text-slate-500">5</div>
                                        <div class="py-0.5 rounded relative text-slate-500">6</div>
                                        <div class="py-0.5 rounded relative text-slate-500">7</div>
                                        <div class="py-0.5 rounded relative text-slate-500">8</div>
                                        <div class="py-0.5 rounded relative text-slate-500">9</div>
                                    </div>
                                </div>
                                {{-- <div class="border-t border-slate-200/60 p-5">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                        <span class="truncate">UI/UX Workshop</span>
                                        <span class="font-medium xl:ml-auto">23th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                        <span class="truncate">VueJs Frontend Development</span>
                                        <span class="font-medium xl:ml-auto">10th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                        <span class="truncate">Laravel Rest API</span>
                                        <span class="font-medium xl:ml-auto">31th</span>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- END: Calendar -->
                </div>
            </div>
        </div>
    </div>
@endsection
