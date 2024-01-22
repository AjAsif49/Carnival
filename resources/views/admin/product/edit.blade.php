@extends('admin.index') 
 
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Product</h2>
        </div>
        <div class="card-body">
        <form action="{{ url('product/update/'.$products->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="old_image" value="{{ $products->image }}">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" name='title' class="form-control" id="exampleFormControlInput1" value="{{ $products->title }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Description</label>
                    <textarea class="form-control" name='description' id="exampleFormControlTextarea1" rows="3"id="exampleFormControlInput1" placeholder="Enter Description">{{ $products->description }}</textarea> 
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" name='image' class="form-control-file" id="exampleFormControlFile1" value="{{ $products->image }}">
                </div>
                <div class="form-group">
                    <img src="{{ asset($products->image) }}" style="width: 400px; height:200px;">
                </div>
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection
