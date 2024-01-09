<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('payments.index');
    }

    public function paymentNext()
    {
        return view('payments.paymentNext');
    }

    public function paymentReceipt()
    {
        return view('payments.paymentReceipt');
    }
    /**
     * Display a listing of the resource.
     */
    public function indexRecords()
    {
        return view('payment_records.index');
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
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
