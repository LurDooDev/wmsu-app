<div id="create-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add College
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="create-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-7 md:p-5" method="POST" action="{{ route('admin.colleges.create') }}">
                @csrf
                <div class="grid gap-4 mb-5 grid-cols-2">
                    <div class="col-span-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">College Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                        dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="College Of Computing Studies" required="" value="{{ old('name') }}">
                        <span class="text-sm font-thin text-gray-500 dark:text-gray-400">Enter the full name of the college</span>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{$message}}</p>
                        @enderror 
                    </div>
                    <div class="col-span-6">
                        <label for="college_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">College Code</label>
                        <input type="text" name="college_code" id="college_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                        dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="CCS" required="" value="{{ old('college_code') }}">
                        <span class="text-sm font-thin text-gray-500 dark:text-gray-400">Enter the code for the college  </span>
                        @error('college_code')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{$message}}</p>
                         @enderror 
                    </div>
                </div>
                <div id="courses-container">
                    <!-- Dynamic Input for Courses -->
                </div>
                <div class="flex justify-between items-center mt-2">
                    <button type="button" id="add-course-btn" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add Course</button>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Add Colleges
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- preview modal --}}
<div id="preview-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    View Departments
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="preview-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-7 md:p-5" method="POST" action="">
                @csrf
                <div class="grid gap-4 mb-5 grid-cols-2">
                    <div class="col-span-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">College Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                        dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="College Of Computing Studies" required="" value="{{ old('name') }}"disabled>
                        <span class="text-sm font-thin text-gray-500 dark:text-gray-400">Enter the full name of the college</span>

                    </div>
                    <div class="col-span-6">
                        <label  for="college_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">College Code</label>
                        <input type="text" name="college_code" id="college_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                        dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="CCS" required="" value="{{ old('college_code') }}"disabled>
                        <span class="text-sm font-thin text-gray-500 dark:text-gray-400">Enter the code for the college  </span>
    
                    </div>
                </div>
                <div id="courses-container">
                    <!-- Dynamic Input for Courses -->
                </div>
                <div class="flex justify-between items-center mt-2">
                    <button type="button" id="add-course-btn" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add Course</button>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Done
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="module">
    $(document).ready(function () {
        // Counter for dynamically added courses
        let courseCounter = 1;

        // Function to add a new course
        function addCourse() {
            let newCourseHtml = `
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="sm:col-span-2">
                        <label for="course" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course Name</label>
                        <input type="text" name="courses[${courseCounter}][name]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                            focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Computer Science" required="">
                        <span class="text-sm font-thin text-gray-500 dark:text-gray-400">Enter the name of the course</span>
                    </div>
                    <div class="sm:col-span-2 mb-1">
                        ${courseCounter === 1 ? '' : `<button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900" onclick="removeCourse(this)">Remove</button>`}
                    </div>
                </div>
            `;

            $('#courses-container').append(newCourseHtml);
            courseCounter++;
        }

        // Function to remove a course
        window.removeCourse = function (btn) {
            // Ensure at least one course is present
            if (courseCounter > 1) {
                $(btn).closest('.grid').remove();
                courseCounter--;
            }
        };

        // Add the first course by default
        addCourse();

        // Event listener for adding more courses
        $('#add-course-btn').on('click', function () {
            addCourse();
        });
    });
</script>