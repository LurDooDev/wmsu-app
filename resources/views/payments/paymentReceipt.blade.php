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

            <div class="block justify-between items-center p-4 my-6 mx-4 bg-white rounded-2xl shadow-xl shadow-gray-200 sm:flex">
<div class="flex items-center mb-3 sm:divide-x sm:divide-gray-100 sm:mb-0">
<form class="flex-auto lg:pr-3" action="#" method="GET">
<label for="invoice-search" class="sr-only">Search</label>
<div class="relative mt-1 sm:w-64 md:w-96">
<input type="text" name="email" id="invoice-search" class="border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-2 focus:ring-fuchsia-50 focus:border-fuchsia-300 block w-full p-2.5" placeholder="Search for invoice number" />
</div>
</form>
<div class="flex pl-2 ml-auto space-x-1">
<a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
</svg>
</a>
<a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
</svg>
</a>
</div>
</div>
<div class="items-center space-y-4 sm:inline-flex sm:space-x-4 sm:space-y-0">
<div>
<a href="#" class="inline-flex justify-center items-center py-2 px-3 w-full text-sm font-medium text-center text-white rounded-lg bg-gradient-to-br from-pink-500 to-voilet-500 shadow-md shadow-gray-300 hover:scale-[1.02] transition-transform sm:w-auto">
<svg class="mr-2 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
</svg>
Download Invoice
</a>
</div>
<div>
<a href="#" class="inline-flex justify-center items-center py-2 px-3 w-full text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:scale-[1.02] transition-transformsm:w-auto">
<svg class="mr-2 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd"></path>
</svg>
Print
</a>
</div>
</div>
</div>
<div class="flex items-center">
<svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
</svg>
<span class="ml-1 text-sm font-medium text-gray-400 md:ml-2" aria-current="page">Invoice</span
                      >
</div>
</li>
</ol>
</nav>
<h1 class="text-xl font-semibold text-gray-900 sm:text-2xl">
Invoice
</h1>
</div>
<div class="bg-white shadow-lg shadow-gray-200 rounded-2xl p-4 col-span-12 2xl:col-start-3 2xl:col-span-8 md:mx-6 lg:my-6">
<div class="overflow-hidden p-4 space-y-6">
<div class="sm:flex">
<div class="mb-5 text-2xl font-bold sm:text-3xl sm:mb-0">
Invoice #0472
</div>
<div class="space-y-3 text-left sm:ml-auto sm:text-right">
<svg class="w-10 h-10 sm:ml-auto" viewBox="0 0 39 46" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M38.1622 1.47093L22.6807 5.26078C22.5339 5.29495 22.3817 5.2995 22.2331 5.27414C22.0844 5.24879 21.9424 5.19404 21.8152 5.11312L14.4967 0.331871C14.3629 0.244902 14.2118 0.187926 14.0539 0.164864C13.896 0.141802 13.7349 0.153201 13.5819 0.198277L0.915185 3.92484C0.799036 3.95271 0.695356 4.01814 0.620271 4.11096C0.545186 4.20379 0.502904 4.3188 0.5 4.43812V12.0178L13.5819 8.17171C13.7349 8.12664 13.896 8.11524 14.0539 8.1383C14.2118 8.16136 14.3629 8.21834 14.4967 8.30531L21.8152 13.0795C21.941 13.1635 22.0831 13.2201 22.2322 13.2455C22.3814 13.271 22.5342 13.2647 22.6807 13.2272L38.5 9.36V1.72406C38.4982 1.65256 38.4684 1.5846 38.4172 1.53469C38.3659 1.48477 38.2971 1.45685 38.2256 1.45687L38.1622 1.47093Z" fill="#FF7F66" />
<path d="M28.8241 19.7311L22.6808 21.2077C22.5341 21.2435 22.3816 21.2488 22.2327 21.2234C22.0838 21.198 21.9417 21.1424 21.8152 21.06L14.4967 16.2788C14.4675 16.2581 14.4344 16.2437 14.3995 16.2364C14.3645 16.2291 14.3284 16.2291 14.2934 16.2364C14.2584 16.2436 14.2253 16.258 14.1961 16.2786C14.1669 16.2992 14.1423 16.3256 14.1237 16.3561C14.0913 16.3957 14.0739 16.4455 14.0745 16.4967V23.6897C14.0742 23.7776 14.096 23.8642 14.1378 23.9415C14.1796 24.0189 14.2401 24.0846 14.3137 24.1327L21.8152 29.0545C21.9422 29.1358 22.0846 29.1901 22.2334 29.2143C22.3823 29.2385 22.5345 29.232 22.6808 29.1952L29.176 27.6413C30.2256 27.388 31.1601 26.7905 31.8298 25.9441C32.4995 25.0977 32.8659 24.0515 32.8704 22.9725V22.8248C32.8574 21.9645 32.5034 21.1445 31.8859 20.5447C31.2685 19.9449 30.4381 19.6144 29.5771 19.6256C29.323 19.6331 29.0705 19.6685 28.8241 19.7311Z" fill="#FF7F66" />
<path d="M28.8241 35.678L22.6808 37.1545C22.5339 37.1887 22.3817 37.1933 22.2331 37.1679C22.0845 37.1426 21.9424 37.0878 21.8152 37.0069L14.4967 32.2256C14.4676 32.2057 14.4349 32.1916 14.4004 32.1844C14.3658 32.1771 14.3302 32.1767 14.2956 32.1832C14.2609 32.1898 14.2279 32.2031 14.1984 32.2224C14.1689 32.2418 14.1435 32.2668 14.1237 32.296C14.0917 32.3386 14.0745 32.3904 14.0745 32.4436V39.6366C14.0742 39.7245 14.096 39.8111 14.1378 39.8884C14.1796 39.9658 14.24 40.0315 14.3137 40.0795L21.8152 45.0014C21.941 45.0854 22.0831 45.142 22.2322 45.1674C22.3814 45.1929 22.5342 45.1866 22.6808 45.1491L29.1759 43.5881C30.2268 43.3372 31.1626 42.7402 31.8328 41.8934C32.5029 41.0465 32.8684 39.999 32.8704 38.9194V38.7717C32.8574 37.9114 32.5034 37.0914 31.8859 36.4916C31.2685 35.8918 30.4381 35.5612 29.5771 35.5725C29.3227 35.5766 29.0698 35.612 28.8241 35.678Z" fill="#FF7F66" />
<path opacity="0.32" d="M22.2163 29.1881V21.2498C22.3695 21.2815 22.5276 21.2815 22.6808 21.2498L25.3267 20.5467L26.8748 28.1405L22.6526 29.167C22.5103 29.205 22.3616 29.2122 22.2163 29.1881ZM28.423 35.7483L22.6808 37.1545C22.5276 37.1862 22.3695 37.1862 22.2163 37.1545V45.1561C22.3695 45.1877 22.5276 45.1877 22.6808 45.1561L29.9711 43.3702L28.423 35.7483ZM22.2163 13.2483C22.3695 13.2799 22.5276 13.2799 22.6808 13.2483L23.7856 12.9811L22.2163 5.27484V13.2483Z" fill="#111928" />
<g opacity="0.16">
<path opacity="0.16" d="M14.0745 8.1436C14.2237 8.17206 14.3667 8.22682 14.4967 8.30532L21.8152 13.0866C21.936 13.1668 22.0729 13.2196 22.2163 13.2413V5.26782C22.0729 5.24617 21.936 5.19337 21.8152 5.11314L14.4967 0.331885C14.3667 0.253384 14.2237 0.198624 14.0745 0.170166V8.1436Z" fill="#111928" />
<path opacity="0.16" d="M22.2163 37.1686C22.0738 37.14 21.9377 37.0851 21.8152 37.0069L14.4967 32.2256C14.436 32.1856 14.3619 32.1713 14.2907 32.1858C14.2194 32.2003 14.1569 32.2424 14.1167 32.303C14.089 32.3447 14.0743 32.3936 14.0745 32.4436V39.6366C14.0742 39.7245 14.096 39.8111 14.1378 39.8884C14.1796 39.9658 14.24 40.0315 14.3137 40.0795L21.8152 45.0014C21.9387 45.0763 22.0745 45.1287 22.2163 45.1561V37.1686Z" fill="#111928" />
<path opacity="0.16" d="M14.4967 16.2788C14.436 16.2388 14.3619 16.2244 14.2907 16.2389C14.2194 16.2534 14.1569 16.2956 14.1167 16.3561C14.089 16.3978 14.0743 16.4467 14.0745 16.4968V23.6897C14.0742 23.7776 14.096 23.8642 14.1378 23.9416C14.1796 24.0189 14.24 24.0846 14.3137 24.1327L21.8152 29.0546C21.9376 29.1317 22.0738 29.1843 22.2163 29.2093V21.2499C22.0725 21.2257 21.9356 21.1705 21.8152 21.0882L14.4967 16.2788Z" fill="#111928" />
</g>
</svg>
<div class="space-y-1">
<div class="text-lg font-semibold text-gray-900">
CraftyDwarf LLC.
</div>
<div class="text-sm font-normal text-gray-900">
291 N 4th St, San Jose, CA 95112, USA
</div>
</div>
<div class="text-sm font-normal text-gray-500">
August 1, 2021
</div>
</div>
</div>
<div class="sm:w-72">
<div class="mb-4 text-base font-bold text-gray-900 uppercase">
Bill to
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
</div>
</div>
</div>
</div>
</div>
            