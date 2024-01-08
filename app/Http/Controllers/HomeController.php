<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard for Officer.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function officerHome()
    {
        return view('officer.officer');
    } 
  
    /**
     * Show the application dashboard for Admin.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.admin');
    }
  
    /**
     * Show the application dashboard for Collector.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function collectorHome()
    {
        return view('payments.index');
    }
}
