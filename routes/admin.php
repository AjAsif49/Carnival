<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

/*
|--------------------------------------------------------------------------
| Web Routes for User Dashboard
|--------------------------------------------------------------------------
|
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/home', function () {
        return view('admin.pages.home');
    });

    //Slider routes
    Route::get('home/slider', [SliderController::class, 'Slider'])->name('home.slider');
    Route::get('add/slider', [SliderController::class, 'AddSlider'])->name('add.slider');
    Route::post('store/slider', [SliderController::class, 'StoreSlider'])->name('store.slider');
});

