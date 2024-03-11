<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
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
    public function adminHome(Request $request )
    {
        $session = $request->session()->all();
        
        if(isset($session['id']) && $user_details = DB::table('users as u')
            ->select(
                'u.id',
                'r.name as role_name'
              )
            ->where('u.id','=',$session['id'])
            ->join('roles as r','r.id','u.role_id')
            ->get()
            ->first()){
            return view('admin.admin',['user_details'=>$user_details]);
        }else{
            return redirect('/login');
        }
       
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
