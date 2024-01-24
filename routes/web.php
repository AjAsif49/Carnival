<?php

use App\Models\About;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use App\Models\Menu;
use App\Models\Product;
use App\Models\SubMenu;
use App\Models\Testimonial;

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
    $sliders        = Slider::all();   
    $abouts         = About::all();   
    $products       = Product::all();
    $testimonials   = Testimonial::all();
    $menus          = Menu::orderBy('id')->get();

    return view('web.pages.home', compact('sliders', 'abouts', 'products', 'testimonials', 'menus'));
});

//web pages
Route::get('/aboutus', [WebController::class, 'AboutUs']);
Route::get('/products', [WebController::class, 'Products']);
Route::get('/photo-gallery', [WebController::class, 'PhotoGallery']);
Route::get('/contact', [WebController::class, 'Contacts']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
