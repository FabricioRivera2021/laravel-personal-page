<?php

use App\Http\Controllers\Blog;
use App\Providers\RouteServiceProvider;
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




Route::group([
    'prefix' => '/{locale}',
    'middleware' => 'locale'],
    function ($locale) {
        
        Route::get('/', function ($locale) { return view('main', ['locale' => $locale]); })->name('root');
        
        Route::get('/contact', function ($locale) {
            app()->setLocale($locale); // Set the current locale
            return view('contact', ['locale' => $locale]);})->name('contact');

        Route::get('/projects', function ($locale) {
        app()->setLocale($locale); // Set the current locale
        return view('projects', ['locale' => $locale]);})->name('projects');
            
        Route::get('/legacy', function ($locale) {
            app()->setLocale($locale); // Set the current locale
            return view('legacy', ['locale' => $locale]);})->name('legacy');

        Route::get('/cv', function ($locale) {
            return view('showcv', ['locale' => $locale]);
        })->name('cv');

        Route::resource('blog', Blog::class)->only(['index', 'show']);
});
