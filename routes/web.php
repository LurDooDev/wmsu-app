<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    if(Auth::check()) {

        if(Auth::user()->type == 'officer'){

            return redirect()->route('officer.home');

        } else if(Auth::user()->type == 'admin'){

            return redirect()->route('admin.home');

        } else if(Auth::user()->type == 'superadmin'){

            return redirect()->route('super.home');

        }

    }

    return view('auth.login');

});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Officer Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:officer'])->group(function () {
  
    Route::get('/officer/home', [HomeController::class, 'officerHome'])->name('officer.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All SuperAdmin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:superadmin'])->group(function () {
  
    Route::get('/super/home', [HomeController::class, 'superHome'])->name('super.home');
});