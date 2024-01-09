@include('layouts.header')

    @include('layouts.sidebar')

    <!--Main-->
    <main class="p-7 sm:ml-64 pt-20 sm:pt-4 h-auto">
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-6">

    <div class="mx-5 px-3 ">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <!-- Breadcrumb -->
            <nav class="flex px-5 py-3 text-gray-700" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <span class="inline-flex items-center text-sm font-medium text-gray-700 dark:text-gray-400">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                            </svg>
                            Home
                        </span>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Payments</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Payment Next</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Payment Receipt</span>
                        </div>
                    </li>
                </ol>
            </nav>
<div class="overflow-hidden p-3 space-y-3">
<div class="sm:flex">
<div class="space-y-3 text-left sm:ml-auto sm:text-right">
</div>
</div>
<div class="sm:w-72">
<div class="mb-4 text-base text-gray-900 uppercase">
  <span style="font-weight: bold;">Bill to:</span> <span style="font-weight: 700;">Bryan the Dunker</span>
</div>

<address class="text-base font-normal text-gray-500">
Bergside Inc., LOUISVILLE, Selby 3864 Johnson Street, United
States of America VAT Code: AA-1234567890
</address>
</div>
<div class="flex flex-col my-8">

<div class="overflow-x-auto border-b border-gray-200">

<div class="inline-block min-w-full align-middle">
<div class="overflow-hidden shadow-lg">
<table class="min-w-full divide-y divide-gray-200">
<thead class="text-gray-900 bg-gray-50">
<tr>
<th scope="col" class="p-4 text-xs font-semibold tracking-wider text-left uppercase">
Item
</th>
<th scope="col" class="p-4 text-xs font-semibold tracking-wider text-left uppercase">
Price
</th>
<th scope="col" class="p-4 text-xs font-semibold tracking-wider text-left uppercase">
Qty
</th>
<th scope="col" class="p-4 text-xs font-semibold tracking-wider text-left uppercase">
Off
</th>
<th scope="col" class="p-4 text-xs font-semibold tracking-wider text-left uppercase">
Total
</th>
</tr>
</thead>
<tbody class="text-gray-900 bg-white">
<tr>
<td class="p-4 text-sm font-normal whitespace-nowrap">
<div class="text-base font-semibold">
Pixel Design System
</div>
<div class="text-sm font-normal text-gray-500">
Html components
</div>
</td>
<td class="p-4 text-base font-normal text-gray-500 whitespace-nowrap">
$128.00
</td>
<td class="p-4 text-base font-semibold text-gray-900 whitespace-nowrap">
1
</td>
<td class="p-4 text-base font-normal whitespace-nowrap">
50%
</td>
<td class="p-4 text-base font-semibold whitespace-nowrap">
$64.00
</td>
</tr>
<tr>
<td class="p-4 text-sm font-normal whitespace-nowrap">
<div class="text-base font-semibold">
Volt Dashboard Template
</div>
<div class="text-sm font-normal text-gray-500">
Tailwind template
</div>
</td>
<td class="p-4 text-base font-normal text-gray-500 whitespace-nowrap">
$69.00
</td>
<td class="p-4 text-base font-semibold text-gray-900 whitespace-nowrap">
1
</td>
<td class="p-4 text-base font-normal whitespace-nowrap">
0%
</td>
<td class="p-4 text-base font-semibold whitespace-nowrap">
$69.00
</td>
</tr>
<tr>
<td class="p-4 text-sm font-normal whitespace-nowrap">
<div class="text-base font-semibold">
Neumorphism UI
</div>
<div class="text-sm font-normal text-gray-500">
Html template
</div>
</td>
<td class="p-4 text-base font-normal text-gray-500 whitespace-nowrap">
$69.00
</td>
<td class="p-4 text-base font-semibold text-gray-900 whitespace-nowrap">
1
</td>
<td class="p-4 text-base font-normal whitespace-nowrap">
0%
</td>
<td class="p-4 text-base font-semibold whitespace-nowrap">
$69.00
</td>
</tr>
<tr>
<td class="p-4 text-sm font-normal whitespace-nowrap">
<div class="text-base font-semibold">
Glassmorphism UI
</div>
<div class="text-sm font-normal text-gray-500">
Figma template
</div>
</td>
<td class="p-4 text-base font-normal text-gray-500 whitespace-nowrap">
$149.00
</td>
<td class="p-4 text-base font-semibold text-gray-900 whitespace-nowrap">
1
</td>
<td class="p-4 text-base font-normal whitespace-nowrap">
0%
</td>
<td class="p-4 text-base font-semibold whitespace-nowrap">
$149.00
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="space-y-3 sm:text-right sm:ml-auto sm:w-72">
<div class="flex justify-between">
<div class="text-sm font-medium text-gray-500 uppercase">
Subtotal
</div>
<div class="text-base font-medium text-gray-900">
$415.00
</div>
</div>
<div class="flex justify-between">
<div class="text-sm font-medium text-gray-500 uppercase">
Tax rate
</div>
<div class="text-base font-medium text-gray-900">5%</div>
</div>
<div class="flex justify-between">
<div class="text-sm font-medium text-gray-500 uppercase">
Discount
</div>
<div class="text-base font-medium text-gray-900">
$64.00
</div>
</div>
<div class="flex justify-between">
<div class="text-base font-semibold text-gray-900 uppercase">
Total
</div>
<div class="text-base font-bold text-gray-900">$351.00</div>
<div><a href="#" class="inline-flex justify-center items-center py-2 px-3 w-full text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:scale-[1.02] transition-transformsm:w-auto">
    <svg class="mr-2 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd"></path>
    </svg>
    Print
    </a> </div>
</div>
</div>
</div>
</div>
</div>
            