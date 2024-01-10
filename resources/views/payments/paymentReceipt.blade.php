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
            
            <div class="  border-b-2 p-6  border-gray-300">

<div class="flex items-center justify-between gap-6 mb-5">
    <div>
        <h2 class="text-lg font-normal"><span class="font-bold">Invoice No: </span> 12345678</h2>
        <h5 class="text-base font-normal"><span class="font-bold">Date: </span> 01/10/2024</h5>
    </div>
    <img src="" alt="">
</div>
<hr>
<div class="flex flex-wrap items-center justify-between gap-6 mt-4">
    <div>
        <h4 class="text-base font-bold">Student Info:</h4>
        <p class="text-2xl font-normal">
        Bryan The Dunker <br>
        Western Mindanao State University
        </p>
    </div>
    <div class="text-end">
        <h4 class="text-2xl font-bold">Student ID: 201503664</h4>
        <p class="font-md font-normal">
        College of Computing Studies<br>
        Enrolled in 2024-2025
        </p>
    </div>
</div>
<div class="overflow-x-auto">
    <table class="border-collapse table-auto w-full text-sm mt-9 whitespace-pre">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-4  text-lg font-medium text-start">Payment Name</th>
                <th class="p-4  text-lg font-medium text-start">Payment Type</th>
                <th class="p-4 text-lg font-medium text-start">Date</th>
                <th class="p-4  pe-7 text-lg font-medium text-center">Time</th>
                <th class="p-4  text-lg font-medium text-end">Academic Year</th>
                <th class="p-4 ext-lg font-medium text-end">Semester</th>
                <th class="p-4 text-lg font-medium text-end">Price</th>
                <th class="p-4 text-lg font-medium text-end">Status</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <tr>
                <td class="p-4  text-base font-normal">CCS Fee</td>
                <td class="p-4  text-base font-normal">Local Fee</td>
                <td class="p-4  text-base font-normal">1/10/24</td>
                <td class="p-4  text-base font-normal text-center">4:30 PM</td>
                <td class="p-4  text-base font-normal text-end">2023-2024</td>
                <td class="p-4  text-base font-normal text-end">2nd Semester</td>
                <td class="p-4  text-base font-normal text-end">250</td>
                <td class="p-4  text-base font-normal text-end">Paid</td>
            </tr>
            <tr>
                <td class="p-4  text-base font-normal">CSB Fee</td>
                <td class="p-4  text-base font-normal">University Fee</td>
                <td class="p-4 text-base font-normal">2/10/24</td>
                <td class="p-4  text-base font-normal text-center">8:30 PM</td>
                <td class="p-4  text-base font-normal text-end">2023-2024</td>
                <td class="p-4  text-base font-normal text-end">1st Semester</td>
                <td class="p-4  text-base font-normal text-end">150</td>
                <td class="p-4  text-base font-normal text-end">Paid</td>
            </tr>

            <tr>
                <td colspan="10" class="p-4 text-base font-normal border text-end"><span class="pe-2 font-bold">Total Amount:</span>$1020</td>
            </tr>

        </tbody>
    </table>
    <div class="flex items-center justify-end gap-4 mt-4">
        <a href="{{ route('officer.paymentNext') }}" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800  font-bold py-2 px-4 rounded">Back</a>

        <a href="{{ route('officer.payments') }}" class="text-white bg-primary-700 hover:bg-primary-800 px-4 py-2 rounded">New Payment</a>
    </div>
</div>

    <div>
        </div>
    </div>
    
</div>
</div>

            </section>
    </main>
    <!--End Main-->


@include('layouts.footer') 