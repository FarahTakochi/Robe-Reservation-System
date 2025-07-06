<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ReserveCon;
Use App\Http\Controllers\RobeCon;
Use App\Http\Controllers\AdminCon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('landing');
});

Route::get('redirects', 'App\Http\Controllers\HomeCon@index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/reserverobe', [RobeCon::class, 'getList'])->name('reserverobe');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/reservation', [ReserveCon::class, 'check'])->name('reservation');

Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/reservation', [ReserveCon::class, 'submit'])->name('reservation');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/reservation/details', [ReserveCon::class, 'showData'])->name('status');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/reservation/details/edit/{id}', [ReserveCon::class, 'edit'])->name('edit');

Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/reservation/details/update/{id}', [ReserveCon::class, 'update'])->name('update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/showdata', [ReserveCon::class, 'showData'])->name('showdata');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard/', [AdminCon::class, 'showAllData'])->name('allstatus');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard/edit/{id}', [AdminCon::class, 'editStatus'])->name('editstatus');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard/delete/{id}', [AdminCon::class, 'delete'])->name('deletestatus');

Route::middleware(['auth:sanctum', 'verified'])->post('/admin/dashboard/update/{id}', [AdminCon::class, 'update'])->name('updatestatus');