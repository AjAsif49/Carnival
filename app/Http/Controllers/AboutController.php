<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AboutController extends Controller
{
    public function About(){
        $abouts = About::latest()->get();
        return view('admin.about.index', compact('abouts'));
    }

    public function AddAbout(){
        return view('admin.about.create');
    }

    public function StoreAbout(Request $request){
        $image = $request->file('image');

        $name_generate = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_generate.'.'.$img_ext;
        $upload_location = 'image/about/';
        $last_img = $upload_location.$img_name;
        $image -> move($upload_location, $img_name);

        About::insert([
            'title'=> $request->title,
            'description'=> $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.about')->with('success','About Inserted Successfully');

    }

    public function EditAbout($id){
        $abouts = About::find($id);
        return view('admin.about.edit', compact('abouts'));
    }

    public function UpdateAbout(Request $request, $id){
        
        $old_image = $request->old_image;

        $image = $request->file('image');

        if($image){
            $name_generate = hexdec(uniqid());
            $img_ext = strtolower($image->getClientOriginalExtension());
            $img_name = $name_generate.'.'.$img_ext;
            $upload_location = 'image/about/';
            $last_img = $upload_location.$img_name;
            $image -> move($upload_location, $img_name);
    
            unlink($old_image);
    
            About::find($id)->update([
                'title'=> $request->title,
                'description'=> $request->description,
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
    
            return Redirect()->route('home.about')->with('success','About Updated Successfully');

        }else{
            About::find($id)->update([
                'title'=> $request->title,
                'description'=> $request->description,
                'created_at' => Carbon::now()
            ]);
    
            return Redirect()->route('home.about')->with('success','About Updated Successfully');
        }

    }

    public function DeleteAbout($id){

        $about = About::find($id);
        $old_image = $about->image;
        unlink($old_image);

        About::find($id)->delete();
        return Redirect()->back()->with('success','About Deleted Successfully');

    }

}
