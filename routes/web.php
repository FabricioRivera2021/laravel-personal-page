<?php

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

// Route::get('/contact', function () {
//     return redirect(app()->getLocale() . '/contact');
// });

// Route::prefix('{locale}')
//     ->where(['locale' => '[a-zA-Z]{2}'])
//     ->middleware('setlocale')
//     ->group(function () {
//         Route::get('/', function () {
//             return view('main');});
        
//         Route::get('/contact', function () {
//             return view('contact');
//         });
// });

Route::group([
    'prefix' => '/{locale}',
    'middleware' => 'locale'],
    function ($locale) {
        Route::get('/', function ($locale) { return view('main',['locale' => $locale]); });
        Route::get('/contact', function () { return view('contact'); });
});
