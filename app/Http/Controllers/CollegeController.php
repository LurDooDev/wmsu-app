<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colleges = College::all();
        
        return view('colleges.index', compact('colleges'));
    }

    public function collegeCS()
    {
        return view('colleges.collegeCS');
    }

    /**
     * Create College.
     */
    public function createCollege(Request $request)
    {
        try {
            // Validate the incoming request data
            $request->validate([
                'name' => 'required|string|max:255|unique:colleges,name',
                'college_code' => 'required|string|max:10|unique:colleges,code',
            ]);
        
            // Create a new College record
            $college = new College();
            $college->name = $request->name;
            $college->code = $request->college_code;
        
            // Save the college to the database
            $college->save();
        
            return redirect()->back()->with('success', 'College added successfully.');
        } catch (ValidationException $e) {
            // Redirect back with validation error messages
            return redirect()->back()->withErrors($e->validator->errors())->withInput()->with('error', 'There was an error.');
        } catch (\Exception $e) {
            // Redirect back with a generic error message
            return redirect()->back()->with('error', 'There was an error.');
        }
    }
}
