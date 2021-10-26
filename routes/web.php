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

        // videos
        Route::resource('videos', VideoController::class);

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

Route::get('/', 'HomeController')->name('home');

// wisata
Route::get('/wisata', 'TourController@index')->name('tour.index');
Route::get('/wisata/{slug}', 'TourController@show')->name('tour.show');

// berita
Route::get('/berita', 'NewsController@index')->name('news.index');
Route::get('/berita/{slug}', 'NewsController@show')->name('news.show');

// kuliner
Route::get('/kuliner', 'CulinaryController@index')->name('culinary.index');
Route::get('/kuliner/{slug}', 'CulinaryController@show')->name('culinary.show');

// tiket
Route::get('/tiket', 'TicketController@index')->name('ticket.index');
Route::get('/tiket/{slug}', 'TicketController@show')->name('ticket.show');

// kebudayaan
Route::get('/kebudayaan', 'CultureController@index')->name('culture.index');
Route::get('/kebudayaan/{slug}', 'CultureController@show')->name('culture.show');

// acara
Route::get('/event', 'EventController@index')->name('event.index');
Route::get('/event/{slug}', 'EventController@show')->name('event.show');

// galeri
Route::get('/galeri/foto', 'GalleryController@index')->name('gallery.index');

// videos
Route::get('/galeri/video', 'VideoController@index')->name('videos.index');
Route::get('/galeri/video/{slug}', 'VideoController@show')->name('videos.show');

// about
Route::get('/about', 'AboutController@index')->name('about');

// kontak
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@store')->name('contact.store');

// Penilaian
Route::post('evaluation', 'EvaluationController@store')->name('evaluation.store');