@extends('admin.index') 
 
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Edit Sub Menu</h2>
        </div>
        <div class="card-body">
        <form action="{{ url('submenu/update/'.$submenu->id) }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="exampleFormControlInput1">Menu Id</label>

                <select class="form-control" id="menu_id" name="menu_id">
                    <option value=""> Select Menu </option>

                    @foreach ($menus as $menu)
                        
                    <option value="{{$menu->id}}" {{ $menu->id == $submenu->menu->id ? 'selected': '' }} >{{$menu->menu}}</option>
                    
                    @endforeach

                  </select>
                  @error('menu_id')
                     <span class="text-danger">{{ $message }}</span>   
                    @enderror
            </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Update Name</label>
                    <input type="text" name='name' class="form-control" id="exampleFormControlInput1"  value="{{ $submenu->name }}">

                    @error('name')
                     <span class="text-danger">{{ $message }}</span>   
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="exampleFormControlInput1">Update Link</label>
                    <input type="text" name='link' class="form-control" id="exampleFormControlInput1"  value="{{ $submenu->link }}">

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
