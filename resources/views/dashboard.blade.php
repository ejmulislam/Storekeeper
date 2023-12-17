<x-guest-layout>
    
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

            {{-- All Overview --}}
            <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">All Overview</h2>
            <div class="grid grid-cols-2 gap-4 mb-4 lg:grid-cols-3">

                {{-- Card Item 1 --}}
                <div class="flex items-center flex-col justify-center rounded bg-gray-50 dark:bg-gray-800 px-4 py-6">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white">All Products</h2>
                    <p class="text-3xl text-gray-700 dark:text-gray-500">
                        {{ $products->count() }}
                    </p>
                </div>
                {{-- Card Item 2 --}}
                <div class="flex items-center flex-col justify-center rounded bg-gray-50 dark:bg-gray-800 px-4 py-6">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white">All Orders</h2>
                    <p class="text-3xl text-gray-700 dark:text-gray-500">
                        {{ $orders->count() }}
                    </p>
                </div>
                {{-- Card Item 1 --}}
                <div class="flex items-center flex-col justify-center rounded bg-gray-50 dark:bg-gray-800 px-4 py-6">
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white">All Seles</h2>
                    <p class="text-3xl text-gray-700 dark:text-gray-500">
                        {{ $totalSell }}
                    </p>
                </div>
            </div>

            {{-- Seles Report --}}
            <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Seles Report</h2>
            <div class="grid grid-cols-2 gap-4 mb-4 lg:grid-cols-3">
                
                {{-- Sale Card Item 2 --}}
                <div class="flex items-center justify-between rounded bg-gray-50 dark:bg-gray-800 px-4 py-6">
                    <div class="flex items-center justify-center p-4 rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5l.415-.207a.75.75 0 011.085.67V10.5m0 0h6m-6 0h-1.5m1.5 0v5.438c0 .354.161.697.473.865a3.751 3.751 0 005.452-2.553c.083-.409-.263-.75-.68-.75h-.745M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg> 
                    </div>
                    <div class="flex items-end  flex-col">
                        <p class="text-2xl text-gray-700 dark:text-gray-500 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5l.415-.207a.75.75 0 011.085.67V10.5m0 0h6m-6 0h-1.5m1.5 0v5.438c0 .354.161.697.473.865a3.751 3.751 0 005.452-2.553c.083-.409-.263-.75-.68-.75h-.745M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> 
                            {{ $totalSellToday }}
                        </p>
                        @if($totalSell > 0)
                            <p class="text-md text-gray-400 dark:text-gray-500">
                                Today Seles
                            </p>
                            @else
                            <p class="text-md text-gray-400 dark:text-gray-500">
                                No Seles
                            </p>
                        @endif
                    </div>
                </div>
                {{-- Sale Card Item 3 --}}
                <div class="flex items-center justify-between rounded bg-gray-50 dark:bg-gray-800 px-4 py-6">
                    <div class="flex items-center justify-center p-4 rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5l.415-.207a.75.75 0 011.085.67V10.5m0 0h6m-6 0h-1.5m1.5 0v5.438c0 .354.161.697.473.865a3.751 3.751 0 005.452-2.553c.083-.409-.263-.75-.68-.75h-.745M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg> 
                    </div>
                    <div class="flex items-end  flex-col">
                        <p class="text-2xl text-gray-700 dark:text-gray-500 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5l.415-.207a.75.75 0 011.085.67V10.5m0 0h6m-6 0h-1.5m1.5 0v5.438c0 .354.161.697.473.865a3.751 3.751 0 005.452-2.553c.083-.409-.263-.75-.68-.75h-.745M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> 
                            {{ $totalSellYesterday }}
                        </p>
                        @if($totalSellYesterday > 0)
                            <p class="text-md text-gray-400 dark:text-gray-500">
                                Yesterday Seles
                            </p>
                            @else
                            <p class="text-md text-gray-400 dark:text-gray-500">
                                Yesterday Seles
                            </p>
                        @endif
                    </div>
                </div>
                {{-- Sale Card Item 4 --}}
                <div class="flex items-center justify-between rounded bg-gray-50 dark:bg-gray-800 px-4 py-6">
                    <div class="flex items-center justify-center p-4 rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5l.415-.207a.75.75 0 011.085.67V10.5m0 0h6m-6 0h-1.5m1.5 0v5.438c0 .354.161.697.473.865a3.751 3.751 0 005.452-2.553c.083-.409-.263-.75-.68-.75h-.745M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg> 
                    </div>
                    <div class="flex items-end  flex-col">
                        <p class="text-2xl text-gray-700 dark:text-gray-500 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5l.415-.207a.75.75 0 011.085.67V10.5m0 0h6m-6 0h-1.5m1.5 0v5.438c0 .354.161.697.473.865a3.751 3.751 0 005.452-2.553c.083-.409-.263-.75-.68-.75h-.745M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> 
                            {{ $totalSellThisMonth }}
                        </p>
                        @if($totalSellThisMonth > 0)
                            <p class="text-md text-gray-400 dark:text-gray-500">
                                This Month Seles
                            </p>
                            @else
                            <p class="text-md text-gray-400 dark:text-gray-500">
                                This Month Sell
                            </p>
                        @endif
                    </div>
                </div>
                {{-- Sale Card Item 5  --}}
                <div class="flex items-center justify-between rounded bg-gray-50 dark:bg-gray-800 px-4 py-6">
                    <div class="flex items-center justify-center p-4 rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5l.415-.207a.75.75 0 011.085.67V10.5m0 0h6m-6 0h-1.5m1.5 0v5.438c0 .354.161.697.473.865a3.751 3.751 0 005.452-2.553c.083-.409-.263-.75-.68-.75h-.745M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg> 
                    </div>
                    <div class="flex items-end  flex-col">
                        <p class="text-2xl text-gray-700 dark:text-gray-500 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 7.5l.415-.207a.75.75 0 011.085.67V10.5m0 0h6m-6 0h-1.5m1.5 0v5.438c0 .354.161.697.473.865a3.751 3.751 0 005.452-2.553c.083-.409-.263-.75-.68-.75h-.745M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg> 
                            {{ $totalSellLastMonth }}
                        </p>
                        @if($totalSellLastMonth > 0)
                            <p class="text-md text-gray-400 dark:text-gray-500">
                                Last Month Seles
                            </p>
                            @else
                            <p class="text-md text-gray-400 dark:text-gray-500">
                                Last Month Sell
                            </p>
                        @endif
                    </div>
                </div>
                
            </div>

            {{-- Order Overview --}}
            <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white">Orders Overview</h2>
            <div class="grid grid-cols-2 gap-4 mb-4 lg:grid-cols-3">

                {{-- Card Item 1 --}}
                <div class="flex items-center justify-between rounded bg-gray-50 dark:bg-gray-800 px-4 py-6">
                    <div class="flex items-center justify-center p-4 rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </div>

                    <div class="flex items-end  flex-col">
                        <p class="text-2xl text-gray-700 dark:text-gray-500">
                            {{ $todayOrders->count() }}
                        </p>
                        @if($todayOrders->count() > 0)
                            <p class="text-md text-gray-400 dark:text-gray-500">
                                Today Orders
                            </p>

                            @else
                            <p class="text-md text-gray-400 dark:text-gray-500">
                                Today Order
                            </p>
                        @endif  
                    </div>

                </div>
                {{-- Card Item 2 --}}
                <div class="flex items-center justify-between rounded bg-gray-50 dark:bg-gray-800 px-4 py-6">
                    <div class="flex items-center justify-center p-4 rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </div>
                    <div class="flex items-end  flex-col">
                        <p class="text-2xl text-gray-700 dark:text-gray-500">
                            {{ $yesterdayOrders->count() }}
                        </p>
                        @if($yesterdayOrders->count() > 0)
                            <p class="text-md text-gray-400 dark:text-gray-500">
                                Yesterday Orders
                            </p>
                            @else
                            <p class="text-md text-gray-400 dark:text-gray-500">
                                Yesterday Order
                            </p>
                        @endif
                    </div>
                </div>
                {{-- Card Item 3 --}}
                <div class="flex items-center justify-between rounded bg-gray-50 dark:bg-gray-800 px-4 py-6">
                    <div class="flex items-center justify-center p-4 rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg> 
                    </div>
                    <div class="flex items-end  flex-col text-right">
                        <p class="text-2xl text-gray-700 dark:text-gray-500">
                            {{ $thisMonthOrders->count() }}
                        </p>
                        @if($thisMonthOrders->count() > 0)
                            <p class="text-md text-gray-400 dark:text-gray-500 ">
                                This Month Orders
                            </p>
                            @else
                            <p class="text-md text-gray-400 dark:text-gray-500">
                                This Month Order
                            </p>
                        @endif
                    </div>
                </div>
                {{-- Card Item 4 --}}
                <div class="flex items-center justify-between rounded bg-gray-50 dark:bg-gray-800 px-4 py-6">
                    <div class="flex items-center justify-center p-4 rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </div>
                    <div class="flex items-end  flex-col text-right">
                        <p class="text-2xl text-gray-700 dark:text-gray-500">
                            {{ $lastMonthOrders->count() }}
                        </p>
                        @if($lastMonthOrders->count() > 0)
                            <p class="text-md text-gray-400 dark:text-gray-500 ">
                                Last Month Orders
                            </p>
                            @else
                            <p class="text-md text-gray-400 dark:text-gray-500">
                                Last Month Order
                            </p>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-guest-layout>