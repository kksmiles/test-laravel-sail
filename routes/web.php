<?php

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

Route::get('/', function () {
    return 'Visit thatepanhub.org. This domain is under testing and development.';
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::prefix('domains')->group(function() {
    
Route::domain('{domain}')->group(function() {
    Route::get('/{page}', 'App\Http\Controllers\PageController@index');
});
// });

Route::domain('{domain}.example-app.test')->group(function() {
    Route::get('/{page}', 'App\Http\Controllers\PageController@index');
});
