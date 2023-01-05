<?php



// Route::group(['namespace'=>'Bitfumes\Contact\Http\Controllers'], function() {

use Illuminate\Support\Facades\Route;
use Araib\Contact\Http\Controllers\ContactController;

    Route::get('contact', [ContactController::class, 'index']) ->name('contact');

    Route::post('contact', [ContactController::class, 'send']);
// });

