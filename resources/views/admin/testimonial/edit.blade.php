@extends('admin.index') 
 
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Testimonial</h2>
        </div>
        <div class="card-body">
        <form action="{{ url('testimonial/update/'.$testimonials->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="old_image" value="{{ $testimonials->image }}">

            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" name='image' class="form-control-file" id="exampleFormControlFile1" value="{{ $testimonials->image }}">
            </div>
            <div class="form-group">
                <img src="{{ asset($testimonials->image) }}" style="width: 400px; height:300px;">
            </div>
            
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" name='name' class="form-control" id="exampleFormControlInput1" value="{{ $testimonials->name }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Role</label>
                    <input type="text" name='role' class="form-control" id="exampleFormControlInput1" value="{{ $testimonials->role }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Details</label>
                    <textarea class="form-control" name='details' id="exampleFormControlTextarea1" rows="3"id="exampleFormControlInput1">{{ $testimonials->details }}</textarea> 
                </div>
                
                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection
