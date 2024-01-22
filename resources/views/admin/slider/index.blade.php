@extends('admin.index') 
 
@section('content')


<div class="py-12">
        
    <div class= "container">
        <div class="row">

        <h4 class="m-3">Home Slider</h4>
        <a href="{{ route('add.slider') }}"><button class= 'btn btn-info m-3'>Add Slider</button></a>

            <div class="col-md-12">
                <div class="card">

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="card-header"> All Slider </div>

            <table class="table">
                <thead>
                    <tr>
                        
                    <th scope="col" width="5%">SL No</th>
                    <th scope="col" width="15%"> Title</th>
                    <th scope="col" width="15%"> image </th>
                    <th scope="col" width="15%">Action</th>
                    
                    </tr>
                </thead>
                <tbody>
                
                    @php($i=1) 
                    @foreach($sliders as $slider)
                    <tr>       
                    <th scope="row">{{ $i++ }}</th>
                    <td> {{ $slider->title }} </td>
                    <td> <img src="{{ asset($slider->image) }}" style="height:40px; width:70px;" alt=""> </td>
                    <td><a href="{{ url('slider/edit/'.$slider->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ url('slider/delete/'.$slider->id) }}" onclick="return confirm('Are you Sure to Delete?')" class="btn btn-danger">Delete</a>
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