<?php

use Illuminate\Support\Facades\Auth;
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

Route::redirect('/', '/login', 301);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
        Route::get('/','DashboardController')->name('dashboard');
        Route::get('/profile', 'ProfileController@show')->name('profile.show');
        Route::post('/profile', 'ProfileController@update')->name('profile.update');
        Route::resource('users', UserController::class)->except('show');

        // categories
        Route::get('/categories','CategoryController@index')->name('categories.index');

        // culinaries
        Route::resource('culinaries', CulinaryController::class)->except('show');

        // tours
         Route::resource('tours', TourController::class)->except('show');

        // tickets
        Route::resource('tickets', TicketController::class)->except('show');

        // cultures
        Route::resource('cultures', CultureController::class)->except('show');

        // news
        Route::resource('news', NewsController::class)->except('show');

        // galleries
        Route::resource('galleries', GalleryController::class)->except('show');

        // events
        Route::resource('events', EventController::class)->except('show');

        // inboxes
        Route::get('inboxes', 'InboxController@index')->name('inboxes.index');
        Route::post('inboxes/{id}/set-status', 'InboxController@setStatus')->name('inboxes.set-status');
        Route::delete('inboxes/{id}', 'InboxController@destroy')->name('inboxes.destroy');

        // evaluations
        Route::get('evaluations', 'EvaluationController@index')->name('evaluations.index');
        Route::delete('evaluations/{id}', 'EvaluationController@destroy')->name('evaluations.destroy');
    });
});
