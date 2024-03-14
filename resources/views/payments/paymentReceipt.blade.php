@include('layouts.header')

    @include('layouts.sidebar')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <!--Main-->
    <main class="p-9 sm:ml-64 pt-20 sm:pt-8 h-auto">
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-1">


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
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Student Information</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Payment</span>
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
    <table class="w-full text-md mt-9 whitespace-pre border-collapse table-auto ">
        <thead class="text-md bg-gray-50 dark:bg-gray-700 text-md font-medium">
            <tr>
                <th class="p-4 text-md font-medium text-start">Payment Name</th>
                <th class="p-4 text-md font-medium text-start">Payment Type</th>
                <th class="p-4 text-md font-medium text-start">Date</th>
                <th class="p-4 pe-7 text-md font-medium text-center">Time</th>
                <th class="p-4 text-md font-medium text-end">Academic Year</th>
                <th class="p-4 text-md font-medium text-end">Semester</th>
                <th class="p-4 text-md font-medium text-end">Price</th>
                <th class="p-4 text-md font-medium text-end">Status</th>
            </tr>
        </thead>

        <tbody>
            <tr class="border-b dark:border-gray-700">
                <td class="p-4 text-base font-medium">CSB Fee</td>
                <td class="p-4 text-base font-medium">University Fee</td>
                <td class="p-4 text-base font-medium">2/10/24</td>
                <td class="p-4 text-base font-medium text-center">4:30 PM</td>
                <td class="p-4 text-base font-medium text-end">2023-2024</td>
                <td class="p-4 text-base font-medium text-end">1st Semester</td>
                <td class="p-4 text-base font-medium text-end">250</td>
                <td class="p-4 text-base font-medium text-end">
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border 
                    border-green-100 dark:border-green-500">Paid</span>
                </td>
            </tr>

            <tr class="border-b dark:border-gray-700">
                <td class="p-4 text-base font-medium">CSS Fee</td>
                <td class="p-4 text-base font-medium">Local Fee</td>
                <td class="p-4 text-base font-medium">1/10/24</td>
                <td class="p-4 text-base font-medium text-center">4:30 PM</td>
                <td class="p-4 text-base font-medium text-end">2023-2024</td>
                <td class="p-4 text-base font-medium text-end">2nd Semester</td>
                <td class="p-4 text-base font-medium text-end">250</td>
                <td class="p-4 text-base font-medium text-end">
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border 
                    border-green-100 dark:border-green-500">Paid</span>
                </td>
            </tr>

            <tr class="border-b dark:border-gray-700">
    <td class="p-4 text-base font-medium text-end" colspan="7">Total Amount:</td>
    <td class="p-4 text-base font-bold text-end">PHP 450</td>
</tr>
        </tbody>
    </table>
</div>
<div class="flex items-center justify-end gap-4 mt-4">
    @if (Auth::user()->type == 'officer')
            <a href="{{ route('officer.paymentNext') }}" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800  font-bold py-2 px-4 rounded">Back</a>
            <a href="#" id="printButton" class="inline-flex justify-center items-center py-2 px-3 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:scale-[1.02] transition-transform sm:w-auto">
                <svg class="mr-2 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd"></path>
                </svg>
                Print
            </a>
            <a href="{{ route('officer.payments') }}" class="text-white bg-primary-700 hover:bg-primary-800 px-4 py-2 rounded">New Payment</a>               
    @elseif (Auth::user()->type == 'admin')
    <a href="{{ route('admin.paymentNext') }}" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800  font-bold py-2 px-4 rounded">Back</a>
            <a href="#" id="printButton" class="inline-flex justify-center items-center py-2 px-3 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:scale-[1.02] transition-transform sm:w-auto">
                <svg class="mr-2 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd"></path>
                </svg>
                Print
            </a>
            <a href="{{ route('admin.payments') }}" class="text-white bg-primary-700 hover:bg-primary-800 px-4 py-2 rounded">New Payment</a>               
    @elseif (Auth::user()->type == 'collector')
    <a href="{{ route('collector.paymentNext') }}" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800  font-bold py-2 px-4 rounded">Back</a>
            <a href="#" id="printButton" class="inline-flex justify-center items-center py-2 px-3 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:scale-[1.02] transition-transform sm:w-auto">
                <svg class="mr-2 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd"></path>
                </svg>
                Print
            </a>
            <a href="{{ route('collector.home') }}" class="text-white bg-primary-700 hover:bg-primary-800 px-4 py-2 rounded">New Payment</a>               
         
    @endif
    </div>
</div>

    <div>
        </div>
    </div>
        </div>

            </section>
    </main>
    <!--End Main-->
    <script>
        document.getElementById('printButton').addEventListener('click', function (event) {
            event.preventDefault();
    
            Swal.fire({
                title: 'Print Confirmation',
                text: 'Are you sure you want to print?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Implement the print functionality here
                    // For demonstration purposes, you can call the browser's print function
                    window.print();
                }
                
            });
        });
    </script>

@include('layouts.footer') 