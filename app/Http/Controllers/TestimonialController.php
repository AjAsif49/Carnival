<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function Testimonial(){
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    public function AddTestimonial(){
        return view('admin.testimonial.create');
    }

    public function StoreTestimonial(Request $request){
        $image = $request->file('image');

        $name_generate = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_generate.'.'.$img_ext;
        $upload_location = 'image/testimonial/';
        $last_img = $upload_location.$img_name;
        $image -> move($upload_location, $img_name);

        Testimonial::insert([
            'image' => $last_img,
            'name'  => $request->name,
            'role'  => $request->role,
            'details'  => $request->details,
            'created_at' => Carbon::now()

        ]);

        return redirect()->route('home.testimonial')->with('success', 'Testimonial Inserted Successfully');
    }

    public function EditTestimonial($id){
        $testimonials = Testimonial::find($id);
        return view('admin.testimonial.edit', compact('testimonials'));
    }

    public function UpdateTestimonial(Request $request, $id){
        $old_image = $request->old_image;
        $image = $request->file('image');

        if($image){
            $name_generate = hexdec(uniqid());
            $img_ext = strtolower($image->getClientOriginalExtension());
            $img_name = $name_generate.'.'.$img_ext;
            $upload_location = 'image/testimonial/';
            $last_img = $upload_location.$img_name;
            $image -> move($upload_location, $img_name);
    
            unlink($old_image);
            Testimonial::find($id)->update([
                'image' => $last_img,
                'name'  => $request->name,
                'role'  => $request->role,
                'details'  => $request->details,
                'created_at' => Carbon::now()
            ]);
    
            return redirect()->route('home.testimonial')->with('success', 'Testimonial Updated Successfully');
        }else{
            Testimonial::find($id)->update([
                'name'  => $request->name,
                'role'  => $request->role,
                'details'  => $request->details,
                'created_at' => Carbon::now()
            ]);
    
            return redirect()->route('home.testimonial')->with('success', 'Testimonial Updated Successfully');
        }
        
    }
    
    public function DeleteTestimonial($id){
        $testimonial = Testimonial::find($id);
        $old_image = $testimonial->image;
        unlink($old_image);

        Testimonial::find($id)->delete();
        return redirect()->back()->with('success', 'Testimonial Deleted Successfully');
    }
}
