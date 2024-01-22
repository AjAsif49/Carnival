@extends('admin.index') 
 
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Menu</h2>
        </div>
        <div class="card-body">
        <form action="{{ route('store.menu') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Menu</label>
                    <input type="text" name='menu' class="form-control" id="exampleFormControlInput1" placeholder="Enter Menu">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Link</label>
                    <input type="text" name='link' class="form-control" id="exampleFormControlInput1" placeholder="Enter Link">
                </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>

@endsection
