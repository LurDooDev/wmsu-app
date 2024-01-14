@include('layouts.header')

    @include('layouts.sidebar')

    <!--Main-->
    <main class="p-9 sm:ml-64 pt-20 sm:pt-4 h-auto">
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
                </ol>
            </nav>
            <div class="flex">
  <!-- Left Content -->
  <div class="w-1/2 border-b-2 border-gray-300 pb-4 mb-6 ml-5">
    <h2 class="text-2xl font-bold mb-4 mt-3">Bryan The Dunker</h2>
    <div class=" text-2xl mb-2 mt-3">Western Mindanao State University</div>
  </div>
  
  <!-- Right Content -->
  <div class="w-1/2 border-b-2 border-gray-300 pb-4 mb-6 ml-auto mr-6">
    <div class=" flex-shrink-0 text-right ">
      <div class="font-bold text-xl mb-2 mt-3">Student ID: 201503664</div>
      <div class="text-xl">College of Computing Studies</div>
      <div class="text-xl">Enrolled in 2024-2025</div>
    </div>
  </div>
</div>
            <!--Table-->
            <div class="overflow-x-auto">
                <table class="w-full text-md text-left  ">
                    <thead class="text-md   bg-gray-50 dark:bg-gray-700 text-md font-medium">
                        <tr>
                            <th scope="col" class="px-4 py-3 text-md font-medium">Academic Year</th>
                            <th scope="col" class="px-4 py-3 text-md font-medium">Semester</th>
                            <th scope="col" class="px-4 py-3 text-md font-medium">Payment Name</th>
                            <th scope="col" class="px-4 py-3 text-md font-medium">Payment Type</th>
                            <th scope="col" class="px-4 py-3 text-md font-medium">Amount</th>
                            <th scope="col" class="px-4 py-3 text-md font-medium">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 text-md font-medium">2023</th>
                            <td class="px-4 py-3 text-md font-medium">1st Semester</td>
                            <td class="px-4 py-3 text-md font-medium">CSB Fee</td>
                            <td class="px-4 py-3 text-md font-medium">University Fee</td>
                            <td class="px-4 py-3 text-md font-medium">500</td>
                            <td class="px-4 py-3 text-md font-medium">Paid</td>
                        
            </tr>
            <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 text-md font-medium">2023</th>
                            <td class="px-4 py-3 text-md font-medium">2nd Semester</td>
                            <td class="px-4 py-3 text-md font-medium">CCS Fee</td>
                            <td class="px-4 py-3 text-md font-medium">Local Fee</td>
                            <td class="px-4 py-3 text-md font-medium">200</td>
                            <td class="px-4 py-3 text-md font-medium">Paid</td>
                    
            </td> 
            </tr>
        </table>

        <div class="w-full mb-6 mt-7 border-t-4 border-gray-300 pt-4">
    <h6 class="text-1xl font-medium ml-3 mb-5 mr-3 ">University Fee</h6>
    <table class="w-full text-md text-left  ">
        <thead class="text-md  bg-gray-50 dark:bg-gray-700 text-md font-medium">
            <tr class = "border -b  dark:border-gray-700">
                <th scope="col" class="px-4 py-3 text-md font-medium">Select</th>
                <th scope="col" class="px-4 py-3 text-md font-medium">Id</th>
                <th scope="col" class="px-4 py-3 text-md font-medium">Payment Name</th>
                <th scope="col" class="px-4 py-3 text-md font-medium">Semester</th>
                <th scope="col" class="px-4 py-3 text-md font-medium">Amount</th>
            </tr>
        </thead>
        <tbody>
        <tr class="border-b dark:border-gray-700">
                <td class="px-4 py-3 text-md font-medium" ><input type="checkbox"></td>
                <td class="px-4 py-3 text-md font-medium">1</td>
                <td class="px-4 py-3 text-md font-medium">University Fee</td>
                <td class="px-4 py-3 text-md font-medium">1st Semester</td>
                <td class="px-4 py-3 text-md font-medium">350</td>
            </tr>
            <tr class="border-b dark:border-gray-700">
                <td class="px-4 py-3 text-md font-medium"><input type="checkbox"></td>
                <td class="px-4 py-3 text-md font-medium">2</td>
                <td class="px-4 py-3 text-md font-medium">University Fee</td>
                <td class="px-4 py-3 text-md font-medium">1st Semester</td>
                <td class="px-4 py-3 text-md font-medium">150</td>
            </tr>

        </tbody>
    </table>
</div>

<div class="w-full mb-6 mt-7 border-t-4 border-gray-300 pt-4">
    <h6 class="text-1xl font-medium ml-3 mb-5 mr-3 ">Local Fee</h6>
    <table class="w-full text-md text-left ">
        <thead class="text-md bg-gray-50 dark:bg-gray-700 text-md font-medium ">
        <tr class="border-b dark:border-gray-700">
                <th scope="col" class="px-4 py-3 text-md font-medium">Select</th>
                <th scope="col" class="px-4 py-3 text-md font-medium">Id</th>
                <th scope="col" class="px-4 py-3 text-md font-medium">Payment Name</th>
                <th scope="col" class="px-4 py-3 text-md font-medium ">Semester</th>
                <th scope="col" class="px-4 py-3 text-md font-medium">Amount</th>
            </tr>
        </thead>
        <tbody>
        <tr class="border-b dark:border-gray-700">
                <td class="px-4 py-3"><input type="checkbox"></td>
                <td class="px-4 py-3 text-md font-medium">1</td>
                <td class="px-4 py-3 text-md font-medium">Local Fee</td>
                <td class="px-4 py-3 text-md font-medium">1st Semester</td>
                <td class="px-4 py-3 text-md font-medium">350</td>
            </tr>
            <tr class="border-b dark:border-gray-700">
                <td class="px-4 py-3"><input type="checkbox"></td>
                <td class="px-4 py-3 text-md font-medium">2</td>
                <td class="px-4 py-3 text-md font-medium">Local Fee</td>
                <td class="px-4 py-3 text-md font-medium">1st Semester</td>
                <td class="px-4 py-3 text-md font-medium">150</td>
            </tr>
    
        </tbody>
    </table>
    <div class="flex justify-end mt-4 mr-4">
    <a href="{{ route('officer.payments') }}" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 font-bold py-2 px-4 rounded">Back</a>

    <button class="text-white bg-primary-700 hover:bg-primary-800 font-bold py-2 px-4 rounded ml-2"
            onclick="window.location='{{ route('officer.paymentReceipt') }}'">
        Pay Now
    </button>
</div>
</div>

            <!--End Table-->

        </div>
    </div>
    </section>
    </main>
    <!--End Main-->


@include('layouts.footer') 