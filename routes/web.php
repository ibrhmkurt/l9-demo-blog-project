<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Back Routes
|--------------------------------------------------------------------------
*/

Route::get('site-bakımda',function(){
    return view('front.offline');
});

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
        Route::post('kategoriler/delete', 'delete')->name('category.delete');
        Route::get('kategori/getData', 'getData')->name('category.getdata');
    });
});

use App\Http\Controllers\Back\PageController;

Route::controller(PageController::class)->group(function(){
    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('sayfalar', 'index')->name('page.index');
        Route::get('sayfalar/create', 'create')->name('page.create');
        Route::post('sayfalar/olustur', 'post')->name('page.post');
        Route::get('sayfalar/guncelle/{id}', 'update')->name('page.edit');
        Route::post('sayfalar/guncelle/{id}', 'updatePost')->name('page.edit.post');
        Route::get('sayfa/status', 'switch')->name('page.switch');
        Route::get('sayfa/sil/{id}', 'delete')->name('page.delete');
        Route::get('sayfa/siralama', 'orders')->name('page.orders');
    });
});

use App\Http\Controllers\Back\ConfigController;

Route::controller(ConfigController::class)->group(function(){
    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('ayarlar', 'index')->name('config.index');
        Route::post('ayarlar/update', 'update')->name('config.update');
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
    Route::get('/contact','contact')->name('contact');
    Route::post('/contact','contactpost')->name('contact.post');
    Route::get('/kategori/{category}', 'category')->name('category');
    Route::get('/{sayfa}','page')->name('page');
    Route::get('/{category}/{slug}', 'single')->name('single');
});





