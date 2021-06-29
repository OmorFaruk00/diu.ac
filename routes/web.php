<?php

use App\Http\Controllers\DiuController;
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

Route::get('/cache-clear', function () {

    \Artisan::call('route:clear');
    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');

    \Artisan::call('route:cache');
    \Artisan::call('config:cache');

    return response()->json(['message'=>'cache clear'],200);

});

Route::group(['middleware' => ['pageSpreed']], function () {
    Route::get('/', [DiuController::class, 'homePage'])->name('homePage');
    Route::get('/about-us', [DiuController::class, 'aboutUs'])->name('about-us');
    Route::get('/notice-board', [DiuController::class, 'noticeBoard'])->name('notice-board');
    Route::get('/notice-details/{slug}', [DiuController::class, 'noticeBoardDetails'])->name('notice-board-details');
    Route::get('/admission', [DiuController::class, 'admission'])->name('admission');
    Route::get('/institute', [DiuController::class, 'institute'])->name('institute');
    Route::get('/alumni', [DiuController::class, 'alumni'])->name('alumni');
    Route::get('/cell', [DiuController::class, 'cell'])->name('cell');
    Route::get('/contact-us', [DiuController::class, 'contactUs'])->name('contact-us');

    Route::get('/club', [DiuController::class, 'club'])->name('club');
    Route::get('/publications', [DiuController::class, 'publications'])->name('publications');
    Route::get('/convocation', [DiuController::class, 'convocation'])->name('convocation');
    Route::get('/certificate-verification', [DiuController::class, 'certificateVerification'])->name('certificate-verification');
    Route::get('/department/{slug}', [DiuController::class, 'departmentDetails'])->name('department-details');

    Route::get('/test', [DiuController::class, 'test'])->name('test');
});

