<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalFeeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RemitController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UniversityFeeController;
use App\Http\Controllers\UserController;
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

        } else if(Auth::user()->type == 'collector'){

            return redirect()->route('collector.home');

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
  
    // Dashboard Officer Route
    Route::get('/officer', [HomeController::class, 'officerHome'])->name('officer.home');

    // Payment Routes
    Route::get('/officer/payments', [PaymentController::class, 'index'])->name('officer.payments');
    Route::get('/officer/paymentNext', [PaymentController::class, 'paymentNext'])->name('officer.paymentNext');

    // Payment Records Routes
    Route::get('/officer/payment/records', [PaymentController::class, 'indexRecords'])->name('officer.payment.records');

    // Student Routes
    Route::get('/officer/students', [StudentController::class, 'index'])->name('officer.students');

    // Local Fee Route
    Route::get('/officer/fees/local', [LocalFeeController::class, 'index'])->name('officer.local.fees');

    // User Management Route
    Route::get('/officer/users', [UserController::class, 'index'])->name('officer.users');

    // University Fee Route
    Route::get('/officer/fees/university', [UniversityFeeController::class, 'index'])->name('officer.university.fees');
    
});
  
/*------------------------------------------
--------------------------------------------
All Collector Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:collector'])->group(function () {
    
    // Payments Routes
    Route::get('/collector/payments', [HomeController::class, 'collectorHome'])->name('collector.home');

    // Payment Records Routes
    Route::get('/collector/payment/records', [PaymentController::class, 'indexRecords'])->name('collector.payment.records');

    // Student Routes
    Route::get('/collector/students', [StudentController::class, 'index'])->name('collector.students');

    // User Management Route
    Route::get('/collector/users', [UserController::class, 'index'])->name('collector.users');

    
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    // Admin Dashboard Routes
    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');

    // Colleges Routes
    Route::get('/admin/colleges', [CollegeController::class, 'index'])->name('admin.colleges');

    // Payments Routes
    Route::get('/admin/payments', [PaymentController::class, 'index'])->name('admin.payments');

    // Payment Records Routes
    Route::get('/admin/payment/records', [PaymentController::class, 'indexRecords'])->name('admin.payment.records');

    // Remit Records Routes
    Route::get('/admin/remits', [RemitController::class, 'index'])->name('admin.remits');

    // Student Routes
    Route::get('/admin/students', [StudentController::class, 'index'])->name('admin.students');

    // Audit Routes
    Route::get('/admin/audit-log', [AuditController::class, 'index'])->name('admin.audit');

    // Overview Route
    Route::get('/admin/overview', [AdminController::class, 'index'])->name('admin.overview');

    // University Fee Route
    Route::get('/admin/fees/university', [UniversityFeeController::class, 'index'])->name('admin.university.fees');

    // Local Fee Route
    Route::get('/admin/fees/local', [LocalFeeController::class, 'index'])->name('admin.local.fees');

    // User Management Route
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');

});