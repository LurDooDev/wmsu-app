<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function fetchCourses($collegeId)
    {
        // Fetch courses based on the received college ID
        $courses = Course::where('college_id', $collegeId)->get();

        return response()->json(['courses' => $courses]);
    }
}
