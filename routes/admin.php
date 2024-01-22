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
    Route::get('slider/home', [SliderController::class, 'Slider'])->name('home.slider');
    Route::get('slider/add', [SliderController::class, 'AddSlider'])->name('add.slider');
    Route::post('slider/store', [SliderController::class, 'StoreSlider'])->name('store.slider');
    Route::get('slider/edit/{id}', [SliderController::class, 'EditSlider']);
    Route::post('slider/update/{id}', [SliderController::class, 'UpdateSlider']);
    Route::get('slider/delete/{id}', [SliderController::class, 'DeleteSlider']);

});

