<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SummarySettingController;

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

    Route::get('contact_setting',[App\Http\Controllers\Admin\ContactSettingController::class, 'index']);
    Route::post('contact_setting', [App\Http\Controllers\Admin\ContactSettingController::class, 'store']);

    Route::get('summary_setting',[App\Http\Controllers\Admin\SummaryController::class, 'index']);
    Route::post('summary_setting', [App\Http\Controllers\Admin\SummaryController::class, 'store']);

    Route::get('fact_setting',[App\Http\Controllers\Admin\FactSettingController::class, 'index']);
    Route::post('fact_setting', [App\Http\Controllers\Admin\FactSettingController::class, 'store']);

    Route::get('footer_setting',[App\Http\Controllers\Admin\FooterSettingController::class, 'index']);
    Route::post('footer_setting', [App\Http\Controllers\Admin\FooterSettingController::class, 'store']);

         //Admin Links settings Route
    Route::controller(App\Http\Controllers\Admin\LinksSettingController::class)->group(function () {
        Route::get('/link_setting', 'index');
        Route::get('/link_setting/create', 'create');
        Route::post('/link_setting/create', 'store');
        Route::get('/link_setting/{link}/edit', 'edit');
        Route::put('/link_setting/{link}', 'update');
        Route::get('/link_setting/{link}/delete', 'destroy');
    });

     //Admin Professional settings Route
     Route::controller(App\Http\Controllers\Admin\ProSettingController::class)->group(function () {
        Route::get('/pro_settings', 'index');
        Route::get('/pro_settings/create', 'create');
        Route::post('/pro_settings/create', 'store');
        Route::get('/pro_settings/{profession}/edit', 'edit');
        Route::put('/pro_settings/{profession}', 'update');
        Route::get('/pro_settings/{profession}/delete', 'destroy');
    });

     //Admin Education settings Route
     Route::controller(App\Http\Controllers\Admin\EduSettingController::class)->group(function () {
        Route::get('/edu_setting', 'index');
        Route::get('/edu_setting/create', 'create');
        Route::post('/edu_setting/create', 'store');
        Route::get('/edu_setting/{education}/edit', 'edit');
        Route::put('/edu_setting/{education}', 'update');
        Route::get('/edu_setting/{education}/delete', 'destroy');
    });

     //Admin Skills settings Route
     Route::controller(App\Http\Controllers\Admin\SkillsSettingController::class)->group(function () {
        Route::get('/skill_setting', 'index');
        Route::get('/skill_setting/create', 'create');
        Route::post('/skill_setting/create', 'store');
        Route::get('/skill_setting/{skill}/edit', 'edit');
        Route::put('/skill_setting/{skill}', 'update');
        Route::get('/skill_setting/{skill}/delete', 'destroy');
    });

    //Admin Services settings Route
    Route::controller(App\Http\Controllers\Admin\ServiceSettingController::class)->group(function () {
        Route::get('/service_setting', 'index');
        Route::get('/service_setting/create', 'create');
        Route::post('/service_setting/create', 'store');
        Route::get('/service_setting/{service}/edit', 'edit');
        Route::put('/service_setting/{service}', 'update');
        Route::get('/service_setting/{service}/delete', 'destroy');
    });

    //Admin Testimonials settings Route
    Route::controller(App\Http\Controllers\Admin\TestimonialSettingController::class)->group(function () {
        Route::get('/testimonial_setting', 'index');
        Route::get('/testimonial_setting/create', 'create');
        Route::post('/testimonial_setting/create', 'store');
        Route::get('/testimonial_setting/{testimonial}/edit', 'edit');
        Route::put('/testimonial_setting/{testimonial}', 'update');
        Route::get('/testimonial_setting/{testimonial}/delete', 'destroy');
    });

    //Admin Testimonials settings Route
    Route::controller(App\Http\Controllers\Admin\ContactusSettingController::class)->group(function () {
        Route::get('/contact_us_setting', 'index');
    });

      //Admin Portfolio Category settings Route
      Route::controller(App\Http\Controllers\Admin\CategorySettingController::class)->group(function () {
        Route::get('/category_setting', 'index');
        Route::get('/category_setting/create', 'create');
        Route::post('/category_setting/create', 'store');
        Route::get('/category_setting/{category}/edit', 'edit');
        Route::put('/category_setting/{category}', 'update');
        Route::get('/category_setting/{category}/delete', 'destroy');
    });

      //Admin Portfolio Category settings Route
      Route::controller(App\Http\Controllers\Admin\PortfolioSettingController::class)->group(function () {
        Route::get('/portfolio_setting', 'index');
        Route::get('/portfolio_setting/create', 'create');
        Route::post('/portfolio_setting/create', 'store');
        Route::get('/portfolio_setting/{portfolio}/edit', 'edit');
        Route::put('/portfolio_setting/{portfolio}', 'update');
        Route::get('/portfolio_setting/{portfolio}/delete', 'destroy');
    });


});

Route::controller(App\Http\Controllers\Frontend\FrontendController::class)->group(function () {
    Route::get('/contact', function () {
        return view('frontend.contact');
    });
    Route::get('/contact','index');
    Route::get('frontend/contact_us/create', 'create');
    Route::post('frontend/contact_us/create', 'store');
    Route::get('/frontend/portfolio_details/{category_title}/{portfolio_title}','productView');
 });









