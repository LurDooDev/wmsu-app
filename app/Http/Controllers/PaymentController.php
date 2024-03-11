<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request )
    {
        $session = $request->session()->all();
        
        if(isset($session['id'])){
            $user_details = DB::table('users as u')
            ->select(
                'u.id',
                'r.name as role_name'
              )
            ->where('u.id','=',$session['id'])
            ->join('roles as r','r.id','u.role_id')
            ->get()
            ->first();
            return view('payments.index',['user_details'=>$user_details]);
        }
    }

    public function paymentNext(Request $request )
    {
        $session = $request->session()->all();
        
        if(isset($session['id'])){
            $user_details = DB::table('users as u')
            ->select(
                'u.id',
                'r.name as role_name'
              )
            ->where('u.id','=',$session['id'])
            ->join('roles as r','r.id','u.role_id')
            ->get()
            ->first();
            return view('payments.paymentNext',['user_details'=>$user_details]);
        }
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
