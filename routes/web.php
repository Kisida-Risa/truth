<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', 'ItemController@index')->name('item.item');
Route::get('item/parts/{id}', 'ItemController@store')->name('item.store');

Route::get('/search', 'ItemController@search')->name('item.search');
Route::get('articles/index', 'ArticleController@index')->name('articles.index');
Route::resource('/articles', 'ArticleController')->middleware('auth');
Route::resource('/articles', 'ArticleController')->except(['index', 'show'])->middleware('auth'); 
Route::resource('/articles', 'ArticleController')->only(['show']);

Route::prefix('articles')->name('articles.')->group(function () {
    Route::put('/{article}/like', 'ArticleController@like')->name('like')->middleware('auth');
    Route::delete('/{article}/like', 'ArticleController@unlike')->name('unlike')->middleware('auth');
});
Route::get('/tags/{name}', 'TagController@show')->name('tags.show');
Route::prefix('users')->name('users.')->group(function () {
    Route::get('/{name}', 'UserController@show')->name('show');
    Route::middleware('auth')->group(function () {
        Route::put('/{name}/follow', 'UserController@follow')->name('follow');
        Route::delete('/{name}/follow', 'UserController@unfollow')->name('unfollow');
    });
});

Auth::routes();

Route::prefix('user')->middleware(['auth'])->group(function() {
    Route::get('/ajax/index', 'StripeController@index');
    Route::get('/ajax/status', 'StripeController@status');
    Route::post('ajax/subscribe', 'StripeController@subscribe');
    Route::post('ajax/cancel', 'StripeController@cancel');
    Route::post('ajax/resume', 'StripeController@resume');
    Route::post('ajax/change_plan', 'StripeController@change_plan');
    Route::post('ajax/update_card', 'StripeController@update_card');
});