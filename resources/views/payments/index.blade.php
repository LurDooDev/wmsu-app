@include('layouts.header')

@include('layouts.sidebar')

<!-- Main -->
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
                                <svg class="rtl:rotate-180 w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Payments</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <!-- End Breadcrumb -->
                <!-- Table Header -->
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/4">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                            </div>
                        </form>
                    </div>
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2">
                        <div class="relative">
                            <select id="filter" name="filter" class="block appearance-none w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 pl-3 pr-10 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="1">2023</option>
                                <option value="2">2022</option>
                                <option value="3">2021</option>
                                <!-- Add more options as needed -->
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg aria-hidden="true" class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Table Header -->
                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead>
                            <tr class="text-left bg-gray-100 dark:bg-gray-800">
                                <th class="py-2 px-3 font-medium text-sm text-gray-700 dark:text-gray-400">Student ID</th>
                                <th class="py-2 px-3 font-medium text-sm text-gray-700 dark:text-gray-400">Name</th>
                                <th class="py-2 px-3 font-medium text-sm text-gray-700 dark:text-gray-400">College</th>
                                <th class="py-2 px-3 font-medium text-sm text-gray-700 dark:text-gray-400">Course</th>
                                <th class="py-2 px-3 font-medium text-sm text-gray-700 dark:text-gray-400">Email</th>
                                <th class="py-2 px-3 font-medium text-sm text-gray-700 dark:text-gray-400">Year Level</th>
                                <th class="py-2 px-3 font-medium text-sm text-gray-700 dark:text-gray-400">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table rows with data will go here -->
                            <tr>
                                <td class="py-3 px-4 text-sm font-medium text-gray-700 dark:text-gray-400">12345</td>
                                <td class="py-3 px-4 text-sm text-gray-700 dark:text-gray-400">Mc Loving</td>
                                <td class="py-3 px-4 text-sm text-gray-700 dark:text-gray-400">Engineering</td>
                                <td class="py-3 px-4 text-sm text-gray-700 dark:text-gray-400">Computer Science</td>
                                <td class="py-3 px-4 text-sm text-gray-700 dark:text-gray-400">mcloving.gmail.com</td>
                                <td class="py-3 px-4 text-sm text-gray-700 dark:text-gray-400">1std Year</td>
                                <td class="py-3 px-4 text-sm font-medium flex space-x-2">
                                    <a href="#" class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-900 dark:hover:text-indigo-500">Pay</a>
                                    <a href="#" class="text-red-600 dark:text-red-400 hover:text-red-900 dark:hover:text-red-500">Edit</a>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
                <!-- End Table -->
                <!-- Pagination -->
                <div class="mt-4 flex items-center justify-between">
                    <div class="flex-1 flex justify-between sm:hidden">
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring focus:ring-primary-500 focus:border-primary-500">
                            Previous
                        </a>
                        <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring focus:ring-primary-500 focus:border-primary-500">
                            Next
                        </a>
                    </div>
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700 dark:text-gray-300">
                                Showing
                                <span class="font-medium">1</span>
                                to
                                <span class="font-medium">10</span>
                                of
                                <span class="font-medium">20</span>
                                results
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex shadow-sm -space-x-px" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 border border-gray-300 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:z-10 focus:outline-none focus:ring focus:ring-primary-500 focus:border-primary-500">
                                    <span class="sr-only">Previous</span>
                                    <!-- Heroicon name: solid/chevron-left -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M11 19l-7-7 7-7"></path>
                                    </svg>
                                </a>
                                <!-- Current: "z-10 bg-primary-50 dark:bg-primary-700 text-primary-500 dark:text-primary-300", Default: "bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300" -->
                                <a href="#" aria-current="page" class="z-10 bg-primary-50 dark:bg-primary-700 text-primary-500 dark:text-primary-300 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    1
                                </a>
                                <a href="#" class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    2
                                </                                </a>
                                <a href="#" class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                    3
                                </a>
                                <!-- More pages... -->
                                <a href="#" class="relative inline-flex items-center px-2 py-2 border border-gray-300 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 focus:z-10 focus:outline-none focus:ring focus:ring-primary-500 focus:border-primary-500">
                                    <span class="sr-only">Next</span>
                                    <!-- Heroicon name: solid/chevron-right -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M9 19l7-7-7-7m8 14l-7-7 7-7"></path>
                                    </svg>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- End Pagination -->
            </div>
            <!-- End coding here -->
        </div>
    </section>
</main>

@include('layouts.footer')


