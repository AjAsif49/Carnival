@extends('admin.index') 
 
@section('content')


<div class="py-12">
        
    <div class= "container">
        <div class="row">

        <h4 class="m-3">Home Product</h4>
        <a href="{{ route('add.product') }}"><button class= 'btn btn-info m-3'>Add Product</button></a>

            <div class="col-md-12">
                <div class="card">

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="card-header"> All Products </div>

            <table class="table">
                <thead>
                    <tr>
                        
                    <th scope="col" width="10%">SL No</th>
                    <th scope="col" width="15%"> Title</th>
                    <th scope="col" width="35%"> Description</th>
                    <th scope="col" width="25%"> Image </th>
                    <th scope="col" width="15%">Action</th>
                    
                    </tr>
                </thead>
                <tbody>
                
                    @php($i=1) 
                    @foreach($products as $product)
                    <tr>       
                    <th scope="row">{{ $i++ }}</th>
                    <td> {{ $product->title }} </td>
                    <td> {{ $product->description }} </td>
                    <td> <img src="{{ asset($product->image) }}" style="height:40px; width:70px;" alt=""> </td>
                    <td><a href="{{ url('product/edit/'.$product->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ url('product/delete/'.$product->id) }}" onclick="return confirm('Are you Sure to Delete?')" class="btn btn-danger">Delete</a>
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