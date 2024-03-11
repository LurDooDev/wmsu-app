<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Login Users
    public function login(Request $request)
    {   
        $input = $request->all();
     
        $this->validate($request, [
            'username' => 'required|string|max:255',
            'password' => 'required',
        ]);
        if($user_details = DB::table('users as u')
            ->select(
                'u.id',
                'password',
                'r.name as role_name'
              )
            ->where('username','=',$input['username'])
            ->join('roles as r','r.id','u.role_id')
            ->get()
            ->first()){
                if(password_verify($input['password'],$user_details->password)){
                    $request->session()->put('id', $user_details->id);
                    if ($user_details->role_name == 'officer') {
                        return redirect()->route('officer.home');
                    }else if ($user_details->role_name == 'admin') {
                        return redirect()->route('admin.home');
                    }elseif($user_details->role_name == 'collector'){
                        return redirect()->route('collector.home');
                    }
                }else{
                    return back()->withErrors(['username' => 'The provided credentials do not match our records.'])->onlyInput('username');
                }
            }else{
                return back()->withErrors(['username' => 'The provided credentials do not match our records.'])->onlyInput('username');
            }
        // if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])))
        // {
        //     if (auth()->user()->type == 'officer') {
        //         return redirect()->route('officer.home');
        //     }else if (auth()->user()->type == 'admin') {
        //         return redirect()->route('admin.home');
        //     }else{
        //         return redirect()->route('collector.home');
        //     }
        // }else{
        //     return back()->withErrors(['username' => 'The provided credentials do not match our records.'])->onlyInput('username');
        // }
          
    }
}
