<div id="create-student-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100% - 1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add Student
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="create-student-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-7 md:p-5" method="POST" action="{{ route('admin.students.store') }}">
                @csrf
                <div class="grid gap-4 mb-12 grid-cols-2">
                    <div class="col-span-6">
                        <label for="snumber"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student ID</label>
                        <input type="number" name="snumber" id="snumber"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                         focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                          dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Student ID" required="" value="{{ old('snumber') }}">
                        @error('snumber')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-6">
                        <label for="fname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                            Name</label>
                        <input type="fname" name="fname" id="fname"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-
                         focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                          dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="First Name" required="" value="{{ old('fname') }}">
                        @error('fname')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-6">
                        <label for="mname"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle
                            Name</label>
                        <input type="mname" name="mname" id="mname"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-
                         focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                          dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Middle Name" required="" value="{{ old('mname') }}">
                        @error('mname')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-6">
                        <label for="lname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                            Name</label>
                        <input type="lname" name="lname" id="lname"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                         focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                          dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Last Name" required="" value="{{ old('lname') }}">
                        @error('lname')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-6">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                         focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                          dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Email Address" required="" value="{{ old('email') }}">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-6">
                        <label for="college"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colleges</label>
                        <select id="college" name="college"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected disabled>Select your college</option>
                            @foreach ($colleges as $college)
                                <option value="{{ $college->id }}">{{ $college->name }}</option>
                            @endforeach
                        </select>
                        @error('college')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-6">
                        <label for="course"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course</label>
                        <select id="course" name="course"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected disabled>Select your course</option>
                        </select>
                        @error('course')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-6">
                        <label for="year_level"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year Level</label>
                        <select id="year_level" name="year_level"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected disabled>Select Year Level</option>
                            <option value="First" @if (old('year_level') == 'First') selected @endif>1st Year</option>
                            <option value="Second" @if (old('year_level') == 'Second') selected @endif>2nd Year</option>
                            <option value="Third" @if (old('year_level') == 'Third') selected @endif>3rd Year</option>
                            <option value="Fourth" @if (old('year_level') == 'Fourth') selected @endif>4th Year</option>
                        </select>
                        @error('year_level')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <div class="mt-auto flex items-center justify-end dark:border-gray-600 p-2">
                    <button data-modal-toggle="create-student-modal"
                        class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 font-bold py-2 px-3 rounded">
                        Back
                    </button>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-bold rounded py-2 px-3 focus:outline-none ml-2">
                        Save Students
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<script type="module">
    $(document).ready(function() {
        // Add event listener to the college select input
        $('#college').change(function() {
            var collegeId = $(this).val(); // Get the selected college ID

            // Make AJAX request to fetch courses based on the selected college ID
            $.ajax({
                url: '/fetch-courses/' + collegeId, // Adjust the URL to your backend route
                type: 'GET',
                success: function(response) {
                    var courses = response.courses; // Get the fetched courses

                    // Clear existing options in the courses select input
                    $('#course').empty();

                    // Add default "Select your course" option
                    $('#course').append('<option value="">Select your course</option>');

                    // Add fetched courses to the courses select input
                    $.each(courses, function(index, course) {
                        $('#course').append('<option value="' + course.id + '">' +
                            course.name + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(error);
                }
            });
        });
    });
</script>
