<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostImgUploadController;
use App\Http\Middleware\Authenticate;
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

Route::get('/', function () {
    return redirect('/' . app()->getLocale());
});


Route::get('/public/{filename}', [ImageController::class, 'getImage'] )->name('private.image');

Route::get('login', fn() => to_route('auth.create'))->name('login'); //redirects to the create page
Route::resource('auth', AuthController::class)
    ->only(['create', 'store']);

Route::post('/uploadImg', [PostImgUploadController::class, 'uploadImg']);
Route::delete('/deleteImg/{id}', [PostImgUploadController::class, 'deleteImg']);

Route::delete('logout', fn() => to_route('auth.destroy'))->name('logout');
Route::delete('auth', [AuthController::class, 'destroy'])->name('auth.destroy');

Route::get('/legacy', function(){
    return view('legacy');
});

Route::group([
    'prefix' => '/{locale}',
    'middleware' => 'locale'],
    function ($locale) {
        
        Route::get('/', function ($locale) { return view('main', ['locale' => $locale]); })->name('root');
        
        // Route::get('/contact', function ($locale) {
        //     app()->setLocale($locale); // Set the current locale
        //     return view('contact', ['locale' => $locale]);})->name('contact');
        
        Route::resource('contact', MailController::class)->only(['index', 'store']);
            
        Route::get('/projects', function ($locale) {
        app()->setLocale($locale); // Set the current locale
        return view('projects', ['locale' => $locale]);})->name('projects');
            
        Route::get('/legacy', function ($locale) {
            app()->setLocale($locale); // Set the current locale
            return view('legacy', ['locale' => $locale]);})->name('legacy');

        Route::get('/cv', function ($locale) {
            return view('showcv', ['locale' => $locale]);
        })->name('cv');

        
        Route::middleware(Authenticate::class)->group(function (){
            Route::resource('posts', PostController::class)
            ->only(['create','store','edit','update','destroy']);
        });

        Route::resource('posts', PostController::class)->only(['index','show']);
});
