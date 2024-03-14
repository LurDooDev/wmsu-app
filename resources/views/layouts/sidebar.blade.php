<nav class="bg-white border-b border-gray-200 sm:px-0 sm:py-0 px-3 py-2 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
   <div class="flex flex-wrap justify-between items-center">
     <div class="flex justify-start items-center">
       <button
         data-drawer-target="drawer-navigation"
         data-drawer-toggle="drawer-navigation"
         aria-controls="drawer-navigation"
         class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
       >
         <svg
           aria-hidden="true"
           class="w-6 h-6"
           fill="currentColor"
           viewBox="0 0 20 20"
           xmlns="http://www.w3.org/2000/svg"
         >
           <path
             fill-rule="evenodd"
             d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
             clip-rule="evenodd"
           ></path>
         </svg>
         <svg
           aria-hidden="true"
           class="hidden w-6 h-6"
           fill="currentColor"
           viewBox="0 0 20 20"
           xmlns="http://www.w3.org/2000/svg"
         >
           <path
             fill-rule="evenodd"
             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
             clip-rule="evenodd"
           ></path>
         </svg>
         <span class="sr-only">Toggle sidebar</span>
       </button>
     </div>
   </div>
</nav>

<aside class="fixed md:pt-0 sm:pt-0 pt-14 top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidenav" id="drawer-navigation">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
      <img src="/images/logo.jpg" class="w-135 h-100" alt="logo">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"></span>
      <ul class="space-y-4 font-medium">
         <!--Admin Sidebar -->
         @if (Auth::user()->type == 'admin')
            <!--Admin Home (Dashboard) -->
            <li>
               <a href="{{route('admin.home')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                  {{ Route::is('admin.home') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                     <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M9 4.025A7.5 7.5 0 1 0 16.975 12H9V4.025Z"/>
                        <path d="M12.5 1c-.169 0-.334.014-.5.025V9h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 12.5 1Z"/>
                     </g>
                  </svg>
                  <span class="ms-3">Dashboard</span>
               </a>
            </li>
            <!--Admin Payments -->
            <a href="{{ route('admin.payments') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
   {{ Route::is(['admin.payments', 'admin.paymentNext', 'admin.paymentReceipt']) ? 'bg-red-200 hover:bg-red-200' : '' }}">
    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1M2 5h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
    </svg>
    <span class="ms-3">Payments</span>
</a>
            <!--Admin Payment Records -->
            <li>
               <a href="{{route('admin.payment.records')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                  {{ Route::is('admin.payment.records') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h8m-1-3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1m6 0v3H6V2m6 0h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m0 9.464 2.025 1.965L12 9.571"/>
                  </svg>
                  <span class="ms-3">Payment Records</span>
               </a>
            </li>
            <!-- Admin Remits -->
            <li>
               <a href="{{route('admin.remits')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                  {{ Route::is('admin.remits') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 17V2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M5 15V1m8 18v-4"/>
               </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">Remit Records</span>
               </a>
            </li>
            <!-- Admin Students -->
            <li>
               <a href="{{route('admin.students')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                  {{ Route::is('admin.students') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                  <svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.333 6.764a3 3 0 1 1 3.141-5.023M2.5 16H1v-2a4 4 0 0 1 4-4m7.379-8.121a3 3 0 1 1 2.976 5M15 10a4 4 0 0 1 4 4v2h-1.761M13 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-4 6h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                  </svg>
                  <span class="ms-3">Students</span>
               </a>
            </li>
            <li>
               <a href="{{route('admin.enrolled')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                  {{ Route::is('admin.enrolled') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                  <svg width="28px" height="28px" viewBox="0 0 48.00 48.00" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000" stroke-width="1.6799999999999997"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><style type="text/css"> .st0{fill:#010101;} </style><path class="st0" d="M8.04,41.5H32.7c0.276,0,0.5-0.224,0.5-0.5v-5.233l2.736,2.736c0.023,0.023,0.052,0.034,0.077,0.051 c0.019,0.025,0.029,0.056,0.053,0.079l0.64,0.64c0.417,0.417,0.969,0.646,1.554,0.646c0.592,0,1.146-0.229,1.563-0.646 c0.001-0.001,0.002-0.001,0.003-0.002c0.852-0.864,0.851-2.262-0.006-3.118l-0.646-0.637c-0.023-0.023-0.053-0.034-0.079-0.053 c-0.017-0.026-0.029-0.055-0.051-0.077L33.2,29.543V7c0-0.276-0.224-0.5-0.5-0.5H8.04c-0.276,0-0.5,0.224-0.5,0.5v34 C7.54,41.276,7.764,41.5,8.04,41.5z M26.74,27.239l-0.158,0.157l-1.006-2.367l2.367,1.012L26.74,27.239z M27.619,27.776l9.166,9.166 l-0.496,0.5l-3.235-3.235c0,0,0,0,0,0l-5.934-5.935L27.619,27.776z M39.114,38.568c-0.451,0.451-1.24,0.458-1.701-0.001 l-0.417-0.417l1.459-1.467l0.237-0.237l0.424,0.418C39.582,37.329,39.581,38.094,39.114,38.568z M37.49,36.233l-9.163-9.163 l0.493-0.493l3.526,3.526c0,0,0.001,0.001,0.001,0.001l5.636,5.636L37.49,36.233z M8.54,7.5H32.2v21.043l-3.026-3.026 c-0.04-0.04-0.088-0.067-0.136-0.09c-0.008-0.004-0.013-0.013-0.021-0.016l-4.19-1.79c-0.003-0.001-0.005,0-0.008-0.001 c-0.086-0.071-0.193-0.119-0.313-0.119H13.036c-0.276,0-0.5,0.224-0.5,0.5s0.224,0.5,0.5,0.5h11.229l1.683,3.961c0,0,0,0,0,0.001 l0.002,0.004c0.002,0.005,0.007,0.007,0.009,0.011c0.025,0.054,0.056,0.104,0.098,0.147l6.144,6.144V40.5H8.54V7.5z"></path>
                     <path class="st0" d="M13.39,14.293l1.197-1.197c0.416-0.417,1.144-0.417,1.562,0l0.231,0.232c0.796,0.796,2.182,0.795,2.976,0 l0.232-0.232c0.416-0.417,1.144-0.417,1.562,0l0.305,0.306c0.41,0.41,1.013,0.632,1.554,0.615c0.579-0.019,1.13-0.278,1.512-0.711 c0.21-0.238,0.512-0.374,0.828-0.374c0.001,0,0.001,0,0.001,0c0.317,0,0.618,0.137,0.828,0.375l1.088,1.236 c0.099,0.112,0.236,0.17,0.375,0.17c0.117,0,0.235-0.041,0.33-0.125c0.208-0.183,0.228-0.499,0.045-0.706l-1.088-1.236 c-0.398-0.454-0.974-0.714-1.577-0.714c-0.001,0-0.001,0-0.002,0c-0.604,0-1.179,0.26-1.578,0.713 c-0.203,0.231-0.485,0.363-0.793,0.373c-0.31,0.007-0.598-0.105-0.815-0.322l-0.305-0.306c-0.794-0.794-2.18-0.796-2.976,0 l-0.232,0.232c-0.418,0.417-1.146,0.417-1.562,0l-0.231-0.232c-0.795-0.794-2.18-0.796-2.976,0l-1.197,1.197 c-0.195,0.195-0.195,0.512,0,0.707S13.194,14.488,13.39,14.293z"></path>
                     <path class="st0" d="M13.39,19.016l1.197-1.197c0.431-0.431,1.131-0.43,1.562,0l0.231,0.232c0.796,0.796,2.182,0.795,2.976,0 l0.232-0.232c0.416-0.417,1.144-0.417,1.562,0l0.305,0.306c0.41,0.41,1.013,0.634,1.554,0.615c0.579-0.019,1.13-0.278,1.512-0.711 c0.21-0.238,0.512-0.374,0.828-0.374c0.001,0,0.001,0,0.002,0c0.316,0,0.617,0.137,0.827,0.375l1.088,1.236 c0.099,0.112,0.236,0.17,0.375,0.17c0.117,0,0.235-0.041,0.33-0.125c0.208-0.183,0.228-0.499,0.045-0.706l-1.087-1.236 c-0.398-0.454-0.974-0.714-1.577-0.714c-0.001,0-0.002,0-0.003,0c-0.604,0-1.179,0.259-1.578,0.712 c-0.203,0.231-0.485,0.363-0.793,0.373c-0.31,0.009-0.598-0.105-0.815-0.322l-0.305-0.306c-0.794-0.794-2.18-0.796-2.976,0 l-0.232,0.232c-0.418,0.417-1.146,0.417-1.562,0l-0.231-0.233c-0.822-0.819-2.155-0.82-2.976,0l-1.197,1.197 c-0.195,0.195-0.195,0.512,0,0.707S13.194,19.211,13.39,19.016z"></path></g></svg>
                  <span class="ms-3">Enrolled</span>
               </a>
            </li>
            <!-- Admin Colleges -->
            <li>
               <a href="{{route('admin.colleges')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                  {{ Route::is('admin.colleges', 'admin.collegeCS*',) ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 1h12M3 1v16M3 1H2m13 0v16m0-16h1m-1 16H3m12 0h2M3 17H1M6 4h1v1H6V4Zm5 0h1v1h-1V4ZM6 8h1v1H6V8Zm5 0h1v1h-1V8Zm-3 4h2a1 1 0 0 1 1 1v4H7v-4a1 1 0 0 1 1-1Z"/>
                  </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">Colleges</span>
               </a>
            </li>
            <!-- Admin Audit Trail -->
            <li>
               <a href="{{ route('admin.audit') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                   {{ Route::is('admin.audit') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                   <svg class="flex-shrink-0 w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h8m-1-3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1m6 0v3H6V2m6 0h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m0 9.464 2.025 1.965L12 9.571"/>
                   </svg>
                   <span class="flex-1 ms-3 whitespace-nowrap">Audit Trail</span>
               </a>
           </li>
           {{-- System Log --}}
           <li>
               <a href="{{ route('admin.system') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                   {{ Route::is('admin.system') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                   <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" width="23" height="25">
                       <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                       <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                       <g id="SVGRepo_iconCarrier">
                           <path d="M841 438.9v402.2H182.7V182.9H585v-73.2H109.6v804.6h804.6V438.9z" fill="#000000"></path>
                           <path d="M522.604 449.558l329.155-329.155 51.689 51.69-329.155 329.154zM255.9 548.6h219.4v73.1H255.9zM255.9 694.9h512V768h-512z" fill="#000000"></path>
                       </g>
                   </svg>
                   <span class="flex-1 ms-3 whitespace-nowrap">System Log</span>
               </a>
           </li>
         <!--Officer Sidebar -->
         @elseif (Auth::user()->type == 'officer')
            <!--Officer Home (Dashboard) -->
            <li>
               <a href="{{route('officer.home')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                  {{ Route::is('officer.home') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                     <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                     <path d="M9 4.025A7.5 7.5 0 1 0 16.975 12H9V4.025Z"/>
                     <path d="M12.5 1c-.169 0-.334.014-.5.025V9h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 12.5 1Z"/>
                     </g>
                  </svg>
                  <span class="ms-3">Dashboard</span>
               </a>
            </li>
            <!--Officer Payments -->
            <li>
               <a href="{{ route('officer.payments') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                  {{ Route::is(['officer.payments', 'officer.paymentNext','officer.paymentReceipt']) ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1M2 5h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                  </svg>
                  <span class="ms-3">Payments</span>
               </a>
            </li>
            <!--Officer Payment Records -->
            <li>
               <a href="{{route('officer.payment.records')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                  {{ Route::is('officer.payment.records') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h8m-1-3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1m6 0v3H6V2m6 0h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m0 9.464 2.025 1.965L12 9.571"/>
                  </svg>
                  <span class="ms-3">Payment Records</span>
               </a>
            </li>
            <!--Officer Students -->
            <li>
               <a href="{{route('officer.students')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                  {{ Route::is('officer.students') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.333 6.764a3 3 0 1 1 3.141-5.023M2.5 16H1v-2a4 4 0 0 1 4-4m7.379-8.121a3 3 0 1 1 2.976 5M15 10a4 4 0 0 1 4 4v2h-1.761M13 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-4 6h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                  </svg>
                  <span class="ms-3">Students</span>
               </a>
            </li>
         <!--Collector Sidebar -->
         @elseif (Auth::user()->type == 'collector')
            <!--Collector Home (Payments) -->
            <li>
               <a href="{{route('collector.home')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                  {{ Route::is(['collector.home', 'collector.paymentNext','collector.paymentReceipt']) ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1M2 5h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                  </svg>
                  <span class="ms-3">Payments</span>
               </a>
            </li>
            <!--Collector Payment Records -->
            <li>
               <a href="{{route('collector.payment.records')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                  {{ Route::is('collector.payment.records') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h8m-1-3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1m6 0v3H6V2m6 0h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m0 9.464 2.025 1.965L12 9.571"/>
                  </svg>
                  <span class="ms-3">Payment Records</span>
               </a>
            </li>
            <!--Collector Students -->
            <li>
               <a href="{{route('collector.students')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group
                  {{ Route::is('collector.students') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.333 6.764a3 3 0 1 1 3.141-5.023M2.5 16H1v-2a4 4 0 0 1 4-4m7.379-8.121a3 3 0 1 1 2.976 5M15 10a4 4 0 0 1 4 4v2h-1.761M13 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-4 6h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                  </svg>
                  <span class="ms-3">Students</span>
               </a>
            </li>
         @endif
         <li>
              <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="admin-settings-dropdown" data-collapse-toggle="admin-settings-dropdown">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.5 8C5.80777 8 5.13108 7.79473 4.55551 7.41015C3.97993 7.02556 3.53133 6.47893 3.26642 5.83939C3.00152 5.19985 2.9322 4.49612 3.06725 3.81719C3.2023 3.13825 3.53564 2.51461 4.02513 2.02513C4.51461 1.53564 5.13825 1.2023 5.81719 1.06725C6.49612 0.932205 7.19985 1.00152 7.83939 1.26642C8.47893 1.53133 9.02556 1.97993 9.41015 2.55551C9.79473 3.13108 10 3.80777 10 4.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M6.5 17H1V15C1 13.9391 1.42143 12.9217 2.17157 12.1716C2.92172 11.4214 3.93913 11 5 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M19.5 11H18.38C18.2672 10.5081 18.0714 10.0391 17.801 9.613L18.601 8.818C18.6947 8.72424 18.7474 8.59708 18.7474 8.4645C18.7474 8.33192 18.6947 8.20476 18.601 8.111L17.894 7.404C17.8002 7.31026 17.6731 7.25761 17.5405 7.25761C17.4079 7.25761 17.2808 7.31026 17.187 7.404L16.392 8.204C15.9647 7.93136 15.4939 7.73384 15 7.62V6.5C15 6.36739 14.9473 6.24021 14.8536 6.14645C14.7598 6.05268 14.6326 6 14.5 6H13.5C13.3674 6 13.2402 6.05268 13.1464 6.14645C13.0527 6.24021 13 6.36739 13 6.5V7.62C12.5081 7.73283 12.0391 7.92863 11.613 8.199L10.818 7.404C10.7242 7.31026 10.5971 7.25761 10.4645 7.25761C10.3319 7.25761 10.2048 7.31026 10.111 7.404L9.404 8.111C9.31026 8.20476 9.25761 8.33192 9.25761 8.4645C9.25761 8.59708 9.31026 8.72424 9.404 8.818L10.204 9.618C9.9324 10.0422 9.73492 10.5096 9.62 11H8.5C8.36739 11 8.24021 11.0527 8.14645 11.1464C8.05268 11.2402 8 11.3674 8 11.5V12.5C8 12.6326 8.05268 12.7598 8.14645 12.8536C8.24021 12.9473 8.36739 13 8.5 13H9.62C9.73283 13.4919 9.92863 13.9609 10.199 14.387L9.404 15.182C9.31026 15.2758 9.25761 15.4029 9.25761 15.5355C9.25761 15.6681 9.31026 15.7952 9.404 15.889L10.111 16.596C10.2048 16.6897 10.3319 16.7424 10.4645 16.7424C10.5971 16.7424 10.7242 16.6897 10.818 16.596L11.618 15.796C12.0422 16.0676 12.5096 16.2651 13 16.38V17.5C13 17.6326 13.0527 17.7598 13.1464 17.8536C13.2402 17.9473 13.3674 18 13.5 18H14.5C14.6326 18 14.7598 17.9473 14.8536 17.8536C14.9473 17.7598 15 17.6326 15 17.5V16.38C15.4919 16.2672 15.9609 16.0714 16.387 15.801L17.182 16.601C17.2758 16.6947 17.4029 16.7474 17.5355 16.7474C17.6681 16.7474 17.7952 16.6947 17.889 16.601L18.596 15.894C18.6897 15.8002 18.7424 15.6731 18.7424 15.5405C18.7424 15.4079 18.6897 15.2808 18.596 15.187L17.796 14.392C18.0686 13.9647 18.2662 13.4939 18.38 13H19.5C19.6326 13 19.7598 12.9473 19.8536 12.8536C19.9473 12.7598 20 12.6326 20 12.5V11.5C20 11.3674 19.9473 11.2402 19.8536 11.1464C19.7598 11.0527 19.6326 11 19.5 11ZM14 14.5C13.5055 14.5 13.0222 14.3534 12.6111 14.0787C12.2 13.804 11.8795 13.4135 11.6903 12.9567C11.5011 12.4999 11.4516 11.9972 11.548 11.5123C11.6445 11.0273 11.8826 10.5819 12.2322 10.2322C12.5819 9.8826 13.0273 9.6445 13.5123 9.54804C13.9972 9.45157 14.4999 9.50108 14.9567 9.6903C15.4135 9.87952 15.804 10.2 16.0787 10.6111C16.3534 11.0222 16.5 11.5055 16.5 12C16.5 12.663 16.2366 13.2989 15.7678 13.7678C15.2989 14.2366 14.663 14.5 14 14.5Z" fill="currentColor"/>
                  </svg>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Admin Settings</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
              </button>
              <ul id="admin-settings-dropdown" class="py-2 space-y-2">
                  <!-- Admin Settings -->
                  @if (Auth::user()->type == 'admin')
                     <li>
                        <a href="{{route('admin.overview')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700
                           {{ Route::is('admin.overview') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                           Overview
                        </a>
                     </li>
                     <li>
                        <a href="{{route('admin.university.fees')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700
                        {{ Route::is('admin.university.fees') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                           University Fee
                        </a>
                     </li>
                     <li>
                        <a href="{{route('admin.local.fees')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700
                        {{ Route::is('admin.local.fees') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                           Local Fee
                        </a>
                     </li>
                     <li>
                        <a href="{{route('admin.users')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700
                        {{ Route::is('admin.users') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                           User Management
                        </a>
                     </li>
                  <!-- Officer Settings -->
                  @elseif (Auth::user()->type == 'officer')
                     <li>
                        <a href="{{route('officer.local.fees')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700
                        {{ Route::is('officer.local.fees') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                           Local Fee
                        </a>
                     </li>
                     <li>
                        <a href="{{route('officer.users')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700
                        {{ Route::is('officer.users') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                           User Management
                        </a>
                     </li>
                  <!-- Collector Settings -->
                  @elseif (Auth::user()->type == 'collector')
                     <li>
                        <a href="{{route('collector.users')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700
                        {{ Route::is('collector.users') ? 'bg-red-200 hover:bg-red-200 pointer-events-none' : '' }}">
                           User Management
                        </a>
                     </li>
                  @endif
              </ul>
         </li>
         <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
            <li>
               <a href="{{ route('logout') }}" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                  </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
               </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
               </form>
            </li>
         </ul>
      </ul>
   </div>
</aside>
