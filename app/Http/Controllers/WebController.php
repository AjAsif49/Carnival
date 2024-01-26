<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\About;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function AboutUs(){
    $sliders        = Slider::all();   
    $abouts         = About::all();   
    $products       = Product::all();
    $testimonials   = Testimonial::all();
    $menus          = Menu::orderBy('id')->get();

    return view('web.pages.aboutus', compact('sliders', 'abouts', 'products', 'testimonials', 'menus'));
    }

    public function Products(){
        $sliders        = Slider::all();   
        $abouts         = About::all();   
        $products       = Product::all();
        $testimonials   = Testimonial::all();
        $menus          = Menu::orderBy('id')->get();
    
        return view('web.pages.products', compact('sliders', 'abouts', 'products', 'testimonials', 'menus'));
        }
}
