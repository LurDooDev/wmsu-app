<div id="users-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add User
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="users-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-7 md:p-5">
                <div class="grid gap-5 mb-12 grid-cols-2">
                    <div class="col-span-6">
                        <label for="snumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                        <input type="snumber" name="snumber" id="snumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                        dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="First Name" required="">
                        </div>
                
                    <div class="col-span-6">
                        <label for="lname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                        <input type="lname" name="lname" id="lname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                        dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Last Name" required="">
                        </div>

                        <div class="col-span-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                        dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Username" required="">
                        </div>

                        <div class="col-span-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                        dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Password" required="">
                        </div>


                    <div class="col-span-6">
                        <label for="colleges" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colleges</label>
                        <select id="colleges" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                            <option selected="">Select Colleges</option>
                            <option value="ccs">Computer Science</option>
                            <option value="ccs">Computer of Engineering</option>
                        </select>
                    </div>
                    
                    <div class="col-span-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Roles</label>
    
                    <div class="flex items-center space-x-4">
                            <input type="radio" id="role-admin" name="roles" value="admin" class="text-primary-500 focus:ring-primary-500 dark:focus:ring-primary-500 dark:text-white">
                            <label for="role-admin" class="text-sm font-medium text-gray-900 dark:text-white">Admin</label>

                            <input type="radio" id="role-officer" name="roles" value="officer" class="text-primary-500 focus:ring-primary-500 dark:focus:ring-primary-500 dark:text-white">
                            <label for="role-officer" class="text-sm font-medium text-gray-900 dark:text-white">Officer</label>

                            <input type="radio" id="role-collector" name="roles" value="collector" class="text-primary-500 focus:ring-primary-500 dark:focus:ring-primary-500 dark:text-white">
                            <label for="role-collector" class="text-sm font-medium text-gray-900 dark:text-white">Collector</label>
                        </div>
                    </div>
        
                    <div class="col-span-6">
                        <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                        <select id="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                            <option selected="">Select Position</option>
                            <option value="">Mayor</option>
                            <option value="">Vice Mayor</option>
                            <option value="">Treasurer</option>
                            <option value="">Secretary</option>
                        </select>
                    </div>

                    
                </div>
                <div class="mt-auto flex items-center justify-end border-t rounded-t dark:border-gray-600 p-2">
                    <a href="" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 font-bold py-2 px-3 rounded">
                        Back
                    </a>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-bold rounded py-2 px-3 focus:outline-none ml-2">
                        Save User
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>