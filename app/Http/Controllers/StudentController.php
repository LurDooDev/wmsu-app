<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colleges = College::all();

        $students = Student::all();

        return view('students.index', compact('colleges', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate the incoming request data
            $request->validate([
                'snumber' => 'required|string|max:255|unique:students,student_id',
                'fname' => 'required|string|max:255',
                'mname' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:students,email|regex:/@wmsu\.edu\.ph$/i',
                'college' => 'required|exists:colleges,id',
                'course' => 'required|exists:courses,id',
                'year_level' => 'required|string|max:255',
            ]);

            // Create a new Student record
            $student = new Student();
            $student->student_id = $request->snumber;
            $student->firstname = $request->fname;
            $student->middlename = $request->mname;
            $student->lastname = $request->lname;
            $student->college_id = $request->college;
            $student->course_id = $request->course;
            $student->email = $request->email;
            $student->year_level = $request->year_level;

            // Save the college to the database
            $student->save();

            return redirect()->back()->with('success', 'Student added successfully.');
        } catch (ValidationException $e) {
            // Redirect back with validation error messages
            return redirect()->back()->withErrors($e->validator->errors())->withInput()->with('error', 'There was a validation error.');
        } catch (\Exception $e) {
            // Redirect back with a generic error message
            return redirect()->back()->with('error', 'There was an error.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        // Validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // Add more validation rules as needed
        ]);

        // Update the student
        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}
