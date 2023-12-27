@include('layouts.header')

    @include('layouts.sidebar')

@extends('layouts.app') <!-- Assuming you have a master layout named 'app.blade.php' -->

@section('content')
    <!-- Your custom content for the status page goes here -->
    <div class="mx-5 px-3">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden p-8">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">Payment Status</h1>

            <!-- Add your status information here -->
            <div class="mb-4">
                <p class="text-gray-700 dark:text-gray-300">Payment ID: 2</p>
                <p class="text-gray-700 dark:text-gray-300">Payment Description: CCS fee</p>
                <p class="text-gray-700 dark:text-gray-300">College: CCS</p>
                <p class="text-gray-700 dark:text-gray-300">Date: 01-01-2023</p>
                <!-- Add more status information as needed -->
            </div>

            <!-- Add any other elements or sections for your status page -->

        </div>
    </div>
@endsection

@include('layouts.footer')