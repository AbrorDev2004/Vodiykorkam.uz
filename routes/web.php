<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdvantagesController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\admin\PostsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\admin\ReviewsController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\teamController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/projects', [PageController::class, 'projects']);
Route::get('/news', [PageController::class, 'news']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/project/{id}', [PageController::class, 'projectView'])->name('projectView');
Route::get('/news/{id}', [PageController::class, 'newsView'])->name('newsView');
Route::get('/service/{id}', [PageController::class, 'serviceView'])->name('serviceView');

Route::prefix('admin')->middleware(['auth'])->group(function()
{

    Route::resource('about', AboutController::class);

    Route::resource('advantages', AdvantagesController::class);

    Route::resource('partners', PartnersController::class);

    Route::resource('category', CategoryController::class);

    Route::resource('product', ProductController::class);

    Route::resource('service', ServiceController::class);

    Route::resource('reviews', ReviewsController::class);

    Route::resource('portfolio', PortfolioController::class);

    Route::resource('posts', PostsController::class);

    Route::resource('contact', ContactController::class);
    
    Route::resource('team', teamController::class);
    
    Route::resource('slider', SliderController::class);



});


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
