<!-- Main modal -->
<div id="overview-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full">
    <div class="relative w-8/12 max-w-6xl p-8 max-h-screen flex flex-col">
        <!-- Modal content -->
        <div class="relative p-5 bg-white rounded-lg shadow dark:bg-gray-800 flex-1">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                Overview Details
                </h3>
            </div>
            <!-- Close Button - Upper Right Corner -->
            <button type="button" class="absolute top-4 right-4 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-2 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="overview-modal">
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
    
            <div class="mt-8 ">
                <form action="#" class="grid gap-6">
                    <div class="mb-4">
                        <label for="academicyear" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Academic Year</label>
                        <input type="text" name="academicyear" id="academicyear" class="input-field-lg w-full" placeholder="Ex. 2022-2023&ldquo;">
                    </div>
                    <div class="mb-4">
                        <label for="start-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Academic Start At</label>
                        <input type="date" name="start-date" id="start-date" class="input-field-lg w-full" placeholder="Select start date">
                    </div>
                    <div class="mb-4">
                        <label for="end-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Academic End At</label>
                        <input type="date" name="end-date" id="end-date" class="input-field-lg w-full" placeholder="Select end date">
                    </div>
                </form>
            </div>
            <!-- Right Section - Semester  -->
            <div class="mt-8">
                <h3 class="text-2xl font-semibold mb-4">Semester Details</h3>
                <form action="#" class="grid gap-6">
                <div class="mb-4">
                        <label for="semestername" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester Name</label>
                        <input type="text" name="" id="" class="input-field-lg w-full" placeholder="Ex. 1st Semester&ldquo;">
                    </div>
                    <div class="mb-4">
                        <label for="semduration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration</label>
                        <input type="number" name="" id="" class="input-field-lg w-full" placeholder="Ex. 6months&ldquo;">
                    </div>
                </form>
            </div>
            <!-- Save Fees Button - Bottom Section -->
            <div class="mt-auto flex items-center justify-end border-t rounded-t dark:border-gray-600 p-2">
                <a href="" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 font-bold py-2 px-3 rounded">
                    Back
                </a>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-bold rounded py-2 px-3 focus:outline-none ml-2">
                    Save Details
                </button>
            </div>
        </div>
    </div>
</div>