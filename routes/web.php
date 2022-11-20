<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Back Routes
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Back\AuthController;

Route::controller(AuthController::class)->group(function(){
    Route::get('admin/giris','login')->name('admin.login');
    Route::post('admin/login','loginPost')->name('admin.login.post');
    Route::get('admin/logout', 'logout')->name('admin.logout');
});

use App\Http\Controllers\Back\DashboardController;

Route::controller(DashboardController::class)->group(function(){
    Route::get('admin/panel','index')->name('admin.dashboard');
    
});



/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('front.homepage');
// });

use App\Http\Controllers\Front\HomepageController;

Route::controller(HomepageController::class)->group(function () {
    Route::get('/', 'index')->name('homepage');
    Route::get('/sayfa', 'index');
    Route::get('/kategori/{category}', 'category')->name('category');
    Route::get('/contact','contact')->name('contact');
    Route::post('/contact','contactpost')->name('contact.post');
    Route::get('/{category}/{slug}', 'single')->name('single');
    Route::get('/{sayfa}','page')->name('page');
    
});


