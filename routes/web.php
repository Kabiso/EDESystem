<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StaffController;
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
    return view('welcome');
});

Auth::routes();

Route::get('staff/', [staffController::class, 'index'])
    ->name('staff.home');
Route::get('staff/login', [staffController::class, 'login'])
    ->name('staff.login');
Route::post('staff/login', [staffController::class, 'handleLogin'])
    ->name('staff.handleLogin');
Route::get('staff/logout', [staffController::class, 'index'])
    ->name('staff.logout');

Route::get('staff/', [staffController::class, 'index'])
    ->name('staff.home')
    ->middleware('auth:staff');
Route::view('staff/dashboard', 'staff.dashboard') -> middleware('auth:staff');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
