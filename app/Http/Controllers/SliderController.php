<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class SliderController extends Controller
{
    public function Slider(){
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function AddSlider(){
        return view('admin.slider.create');
    }

    public function StoreSlider(Request $request){
        $slider_image = $request->file('image');

        $name_generate = hexdec(uniqid());
        $img_ext = strtolower($slider_image->getClientOriginalExtension());
        $img_name = $name_generate.'.'.$img_ext;
        $upload_location = 'image/slider/';
        $last_img = $upload_location.$img_name;
        $slider_image -> move($upload_location, $img_name);

        Slider::insert([
            'title'=> $request->title,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.slider')->with('success','Slider Inserted Successfully');

    }

    public function EditSlider($id){
        $sliders = Slider::find($id);
        return view('admin.slider.edit', compact('sliders'));
    }

    public function UpdateSlider(Request $request, $id){
        
        $old_image = $request->old_image;

        $slider_image = $request->file('image');

        if($slider_image){
            $name_generate = hexdec(uniqid());
            $img_ext = strtolower($slider_image->getClientOriginalExtension());
            $img_name = $name_generate.'.'.$img_ext;
            $upload_location = 'image/slider/';
            $last_img = $upload_location.$img_name;
            $slider_image -> move($upload_location, $img_name);
    
            unlink($old_image);
    
            Slider::find($id)->update([
                'title'=> $request->title,
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
    
            return Redirect()->route('home.slider')->with('success','Slider Updated Successfully');

        }else{
            Slider::find($id)->update([
                'title'=> $request->title,
                'created_at' => Carbon::now()
            ]);
    
            return Redirect()->route('home.slider')->with('success','Slider Updated Successfully');
        }

    }

    public function DeleteSlider($id){
        $slider = Slider::find($id);
        $old_image = $slider->image;
        unlink($old_image);
        
        Slider::find($id)->delete();
        return Redirect()->back()->with('success','Slider Deleted Successfully');

    }
}
