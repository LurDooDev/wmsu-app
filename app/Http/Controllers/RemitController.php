<?php

namespace App\Http\Controllers;

use App\Models\Remit;
use Illuminate\Http\Request;

class RemitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('remit_records.index');
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
    public function show(Remit $remit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Remit $remit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Remit $remit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Remit $remit)
    {
        //
    }
}
