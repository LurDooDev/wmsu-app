<?php

namespace App\Http\Controllers;

use App\Models\LocalFee;
use Illuminate\Http\Request;

class LocalFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.settings.local_fee.index');
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
    public function show(LocalFee $localFee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LocalFee $localFee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LocalFee $localFee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LocalFee $localFee)
    {
        //
    }
}
