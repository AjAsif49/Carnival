<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    public function Product(){
        $products = Product::latest()->get();
        return view('admin.product.index', compact('products'));
    }

    public function AddProduct(){
        return view('admin.product.create');
    }

    public function StoreProduct(Request $request){
        $image = $request->file('image');

        $name_generate = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_generate.'.'.$img_ext;
        $upload_location = 'image/product/';
        $last_img = $upload_location.$img_name;
        $image -> move($upload_location, $img_name);

        Product::insert([
            'title'=> $request->title,
            'description'=> $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.product')->with('success','Product Inserted Successfully');

    }

    public function EditProduct($id){
        $products = Product::find($id);
        return view('admin.product.edit', compact('products'));
    }

    public function UpdateProduct(Request $request, $id){
        $image = $request->file('image');
        $old_image = $request->old_image;

        if($image){
            $name_generate = hexdec(uniqid());
            $img_ext = strtolower($image->getClientOriginalExtension());
            $img_name = $name_generate.'.'.$img_ext;
            $upload_location = 'image/product/';
            $last_img = $upload_location.$img_name;
            $image -> move($upload_location, $img_name);
    
            unlink($old_image);
    
            Product::find($id)->update([
                'title'=> $request->title,
                'description'=> $request->description,
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
    
            return Redirect()->route('home.product')->with('success','Product Updated Successfully');

        }else{
            Product::find($id)->update([
                'title'=> $request->title,
                'description'=> $request->description,
                'created_at' => Carbon::now()
            ]);
    
            return Redirect()->route('home.product')->with('success','Product Updated Successfully');
        }
       
    }

    public function DeleteProduct($id){
        $product = Product::find($id);
        $old_image = $product->image;
        unlink($old_image);

        Product::find($id)->delete();
        return Redirect()->back()->with('success','Product Deleted Successfully');

    }
}
