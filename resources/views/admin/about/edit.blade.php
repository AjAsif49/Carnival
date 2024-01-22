@extends('admin.index') 
 
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit About</h2>
        </div>
        <div class="card-body">
        <form action={{ url('about/update/'.$abouts->id) }} method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="old_image" value="{{ $abouts->image }}">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Update About Title</label>
                    <input type="text" name='title' class="form-control" id="exampleFormControlInput1"  value="{{ $abouts->title }}">

                    @error('title')
                     <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Update Slider Description</label>
                    <textarea type="text" name='description' class="form-control" id="exampleFormControlInput1">{{ $abouts->description }}</textarea>

                    @error('description')
                     <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlFile1">Update About Image</label>
                    <input type="file" name='image' class="form-control-file" id="exampleFormControlFile1" value="{{ $abouts->image }}">

                    @error('image')
                     <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>


                <div class="form-group">
                    <img src="{{ asset($abouts->image) }}" style="width: 400px; height:200px;">
                </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>
        </div>
    </div>

@endsection
