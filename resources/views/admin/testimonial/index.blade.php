@extends('admin.index') 
 
@section('content')


<div class="py-12">
        
    <div class= "container">
        <div class="row">

        <h4 class="m-3">Testimonials</h4>
        <a href="{{ route('add.testimonial') }}"><button class= 'btn btn-info m-3'>Add Testimonial</button></a>

            <div class="col-md-12">
                <div class="card">

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="card-header"> All Testimonials </div>

            <table class="table">
                <thead>
                    <tr>
                        
                    <th scope="col" width="10%">SL No</th>
                    <th scope="col" width="10%"> Image </th>
                    <th scope="col" width="15%"> Name</th>
                    <th scope="col" width="15%"> Role</th>
                    <th scope="col" width="35%"> Details</th>
                    <th scope="col" width="15%">Action</th>
                    
                    </tr>
                </thead>
                <tbody>
                
                    @php($i=1) 
                    @foreach($testimonials as $testimonial)
                    <tr>       
                    <th scope="row">{{ $i++ }}</th>
                    <td> <img src="{{ asset($testimonial->image) }}" style="height:40px; width:70px;" alt=""> </td>
                    <td> {{ $testimonial->name }} </td>
                    <td> {{ $testimonial->role }} </td>
                    <td> {{ $testimonial->details }} </td>
                    <td><a href="{{ url('testimonial/edit/'.$testimonial->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ url('testimonial/delete/'.$testimonial->id) }}" onclick="return confirm('Are you Sure to Delete?')" class="btn btn-danger">Delete</a>
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