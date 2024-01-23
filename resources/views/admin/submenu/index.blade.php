@extends('admin.index') 
 
@section('content')


<div class="py-12">
        
    <div class= "container">
        <div class="row">

        <h4 class="m-3"> Sub Menu</h4>
        <a href="{{ route('add.submenu') }}"><button class= 'btn btn-info m-3'>Add Menu</button></a>

            <div class="col-md-12">
                <div class="card">

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="card-header"> Sub Menu </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" width="10%">SL No</th>
                        <th scope="col" width="25%"> Name</th>
                        <th scope="col" width="25%"> Main Menu</th>
                        <th scope="col" width="25%"> Link</th>
                        <th scope="col" width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                
                    @php($i=1) 
                    @foreach($submenus as $submenu)
                    <tr>       
                    <th scope="row">{{ $i++ }}</th>
                    <td> {{ $submenu->name }} </td>
                    <td> {{ $submenu->menu->menu }} </td>
                    <td> {{ $submenu->link }} </td>
                    <td><a href="{{ url('submenu/edit/'.$submenu->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ url('submenu/delete/'.$submenu->id) }}" onclick="return confirm('Are you Sure to Delete?')" class="btn btn-danger">Delete</a>
                    </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
    
            </div>
        </div>

            </div>
        </div>

</div>
@endsection