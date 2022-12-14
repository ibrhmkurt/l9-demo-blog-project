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

use App\Http\Controllers\Back\ArticleController;

Route::controller(ArticleController::class)->group(function(){
    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('makaleler/silinenler', 'trashed')->name('trashed.article');
        Route::get('makaleler/recover/{id}', 'recover')->name('recover.article');
        Route::resource('makaleler', ArticleController::class);
        Route::get('switch', 'switch')->name('switch');
        Route::get('delete/{id}', 'delete')->name('delete');
        Route::get('harddelete/{id}', 'hardDelete')->name('harddelete');
    });
});

use App\Http\Controllers\Back\CategoryController;

Route::controller(CategoryController::class)->group(function(){
    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('kategoriler', 'index')->name('category.index');
        Route::get('kategori/status', 'switch')->name('category.switch');
        Route::post('kategoriler/create', 'create')->name('category.create');
        Route::post('kategoriler/update', 'update')->name('category.update');
        Route::get('kategori/getData', 'getData')->name('category.getdata');
    });
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





