@extends('web.layouts.main')
@section('content')

<!--project Section Start -->	
<div class="project-page-sec pt-100 pb-70">
    <div class="container">	
        <div class="row justify-content-center text-center">
            <div class="col-md-6">
                <div class="sec-title text-center">
                    <h1>OUR PRODUCTS</h1>
                    <p>Our in-house team of designers are ready to work closely with clients</p>
                </div>				
            </div>
        </div>	
        
        <div class="table">
            <tbody>
                <div class="row justify-content-center text-center">
                    @foreach ($products as $product)
                    <tr>
                        <div class="col-md-6">
                            <div class="sec-title text-center">
                                <h1><h2><a href="#">{{ $product->title }}</a></h2></h1>
                                <p>{{ $product->description }}</p>
                            </div>				
                        </div>
                    </tr>
                    <tr>
                        <div class="col-md-6">
                            <img src="{{ asset($product->image) }}" alt=""/>
                        </div>
                    </tr>
                    @endforeach
                </div>
            </tbody>
        </div>
        
        {{-- <div class="row">	
            <!-- Single project Inner Start -->
            @foreach ($products as $product)
            <div class="col-md-3 col-sm-6 inner">
                <div class="single-project-inner">
                    <div class="project-thumb">
                        <img src="{{ asset($product->image) }}" alt=""/>
                        <div class="project-thumb-overlay">
                            <div class="project-icon">
                                <a href="#"><i class="icofont-external-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="project-inner-desc">
                        <h2><a href="#">{{ $product->title }}</a></h2>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach						
        </div>					 --}}
    </div>
</div>
<!-- Project Section End -->
@endsection

