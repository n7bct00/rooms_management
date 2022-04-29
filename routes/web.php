<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
    return view('index');
})->name('index');
Route::get('/login', function(){
 return view('login');
})->name('login');
Route::get('/register', function(){
    return view('register');
})->name('register');

Route::post('/registeruser', [AuthController::class, 'registeruser']);
Route::post('/loginuser', [AuthController::class, 'loginuser']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [RoomController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/hotel_booking', [RoomController::class, 'hotel_booking'])->name('hotel_booking')->middleware('auth');
Route::post('/roomsadd', [RoomController::class, 'roomsadd'])->name('roomsadd');

Route::get('/hotel_report', [RoomController::class, 'hotel_report'])->name('hotel_report')->middleware('auth');
Route::get('/hotel_edit/{id}',[RoomController::class, 'Roomedit'])->name('hotel_edit')->middleware('auth');
Route::post('/room_update/{id}',[RoomController::class, 'Roomupdated'])->name('room_update');
Route::get('/room_book', [RentController::class, 'Roombook'])->name('room_book')->middleware('auth');
Route::post('/roomsbookadd',[RentController::class, 'Roombookadd'])->name('roomsbookadd');
Route::get('/hotel_reset', [RoomController::class, 'Roomreset'])->name('hotel_reset')->middleware('auth');
Route::get('/hotel_vacant/{id}',[RoomController::class, 'Roomselectdelete'])->name('hotel_vacant')->middleware('auth');