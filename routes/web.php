<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Back Routes
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Back\AuthController;

Route::controller(AuthController::class)->group(function(){
    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('giris','login')->middleware('isLogin')->name('login');
        Route::post('login','loginPost')->middleware('isLogin')->name('login.post');
        Route::get('logout', 'logout')->middleware('isAdmin')->name('logout');
    });
});

use App\Http\Controllers\Back\DashboardController;

Route::controller(DashboardController::class)->middleware('isAdmin')->group(function(){
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


