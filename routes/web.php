<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Route
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::get('home_setting',[App\Http\Controllers\Admin\HomeSettingController::class, 'index']);
    Route::post('home_setting', [App\Http\Controllers\Admin\HomeSettingController::class, 'store']);

    Route::get('about_setting',[App\Http\Controllers\Admin\AboutSettingController::class, 'index']);
    Route::post('about_setting', [App\Http\Controllers\Admin\AboutSettingController::class, 'store']);

    Route::get('/skills_setting', App\Http\Livewire\Admin\Skill\Index::class);
});

Route::get('/contact', function () {
    return view('frontend.contact');
});
