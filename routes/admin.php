<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;

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

    //About routes
    Route::get('about/home', [AboutController::class, 'About'])->name('home.about');
    Route::get('about/add', [AboutController::class, 'AddAbout'])->name('add.about');
    Route::post('about/store', [AboutController::class, 'StoreAbout'])->name('store.about');
    Route::get('about/edit/{id}', [AboutController::class, 'EditAbout']);
    Route::post('about/update/{id}', [AboutController::class, 'UpdateAbout']);
    Route::get('about/delete/{id}', [AboutController::class, 'DeleteAbout']);

    //Product Routes
    Route::get('product/home', [ProductController::class, 'Product'])->name('home.product');
    Route::get('product/add', [ProductController::class, 'AddProduct'])->name('add.product');
    Route::post('product/store', [ProductController::class, 'StoreProduct'])->name('store.product');
    Route::get('product/edit/{id}', [ProductController::class, 'EditProduct']);
    Route::post('product/update/{id}', [ProductController::class, 'UpdateProduct']);
    Route::get('product/delete/{id}', [ProductController::class, 'DeleteProduct']);

    //Testimonial Routes
    Route::get('testimonial/home', [TestimonialController::class, 'Testimonial'])->name('home.testimonial');
    Route::get('testimonial/add', [TestimonialController::class, 'AddTestimonial'])->name('add.testimonial');
    Route::post('testimonial/store', [TestimonialController::class, 'StoreTestimonial'])->name('store.testimonial');
    Route::get('testimonial/edit/{id}', [TestimonialController::class, 'EditTestimonial']);
    Route::post('testimonial/update/{id}', [TestimonialController::class, 'UpdateTestimonial']);
    Route::get('testimonial/delete/{id}', [TestimonialController::class, 'DeleteTestimonial']);


    //Menu Routes
    Route::get('menu/home', [MenuController::class, 'Menu'])->name('home.menu');
    Route::get('menu/add', [MenuController::class, 'AddMenu'])->name('add.menu');
    Route::post('menu/store', [MenuController::class, 'StoreMenu'])->name('store.menu');
    Route::get('menu/edit/{id}', [MenuController::class, 'EditMenu']);
    Route::post('menu/update/{id}', [MenuController::class, 'UpdateMenu']);
    Route::get('menu/delete/{id}', [MenuController::class, 'DeleteMenu']);

    //Sub-Menu Routes
    Route::get('submenu/home', [MenuController::class, 'SubMenu'])->name('home.submenu');
    Route::get('submenu/add', [MenuController::class, 'AddSubMenu'])->name('add.submenu');
    Route::post('submenu/store', [MenuController::class, 'StoreSubMenu'])->name('store.submenu');
    Route::get('submenu/edit/{id}', [MenuController::class, 'EditSubMenu']);
    Route::post('submenu/update/{id}', [MenuController::class, 'UpdateSubMenu']);
    Route::get('submenu/delete/{id}', [MenuController::class, 'DeleteSubMenu']);

});

