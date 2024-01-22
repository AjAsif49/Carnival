@extends('admin.index') 
 
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Menu</h2>
        </div>
        <div class="card-body">
        <form action="{{ url('menu/update/'.$menus->id) }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Update Menu</label>
                    <input type="text" name='menu' class="form-control" id="exampleFormControlInput1"  value="{{ $menus->menu }}">

                    @error('menu')
                     <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlInput1">Update Link</label>
                    <input type="text" name='link' class="form-control" id="exampleFormControlInput1"  value="{{ $menus->link }}">

                    @error('link')
                     <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>


                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>
        </div>
    </div>

@endsection
