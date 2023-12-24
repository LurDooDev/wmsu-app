<?php

namespace App\Http\Controllers;

use App\Models\UniversityFee;
use Illuminate\Http\Request;

class UniversityFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.settings.university_fee.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UniversityFee $universityFee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UniversityFee $universityFee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UniversityFee $universityFee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UniversityFee $universityFee)
    {
        //
    }
}
