@extends('admin.index') 
 
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Sub Menu</h2>
        </div>
        <div class="card-body">
        <form action="{{ route('store.submenu') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="exampleFormControlInput1">Menu Id</label>

                <select class="form-control" id="menu_id" name="menu_id">
                    <option value=""> Select Menu </option>
                    @foreach ($menus as $menu)
                    <option value="{{$menu->id}}">{{$menu->menu}}</option>
                    @endforeach

                  </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name='name' class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
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
