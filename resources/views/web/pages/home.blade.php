@extends('web.layouts.main')
@section('content')


@include('web.includes.slider')

	
@include('web.includes.about')



	<div class="counter-v2-sec">
	<!-- <div class="counter-v2-sec-overlay"></div> -->
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6 inner">
					<div class="counter-v2-up-inner">
						<div class="countup-text">
							<h2 class="counter">1,212</h2>
							<h4>Shipment Delivered</h4>						
						</div>
					</div>
				</div>				
				<div class="col-md-3 col-sm-6 col-xs-6 inner">
					<div class="counter-v2-up-inner">
						<div class="countup-text">
							<h2 class="counter">10</h2>
							<h4>Qualified Executives</h4>						
						</div>
					</div>
				</div>					
				<div class="col-md-3 col-sm-6 col-xs-6 inner">
					<div class="counter-v2-up-inner">
						<div class="countup-text">
							<h2 class="counter">60</h2>
							<h4>Expert Workers</h4>						
						</div>
					</div>
				</div>				
				<div class="col-md-3 col-sm-6 col-xs-6 inner">
					<div class="counter-v2-up-inner">
						<div class="countup-text">
							<h2 class="counter">35</h2>
							<h4>Happy Buyers</h4>						
						</div>
					</div>
				</div>	
			</div>		
		</div>		
	</div>	

	


<!--project Section Start -->	
	<div class="project-page-sec pt-100 pb-70">
		<div class="container">	
			<div class="row justify-content-center text-center">
				<div class="col-md-6">
					<div class="sec-title text-center">
						<h1>OUR PRODUCT</h1>
						<p>Our in-house team of designers are ready to work closely with clients</p>
					</div>				
				</div>
			</div>		
			<div class="row">	
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
			</div>					
		</div>
	</div>
	<!-- Project Section End -->	


	<!-- Testimonial Section Start -->
	<div class="testimonial-sec pt-100 pb-100">
		<div class="testimonial-overlay"></div>
		<div class="container">	
			<div class="row">
				<div class="col-md-12">
					<div class="all-testimonial">

						@foreach ($testimonials as $testimonial)
							
						
						<div class="single-testimonial">					
							<div class="client-comment">
								<div class="client-thumb">
									<img src="{{ asset($testimonial->image) }}" alt=""/>
								</div>							
								<h2>{{ $testimonial->name }}</h2>
								<h3>{{ $testimonial->role }}</h3>							
								<p>{{ $testimonial->details }}</p>									
							</div>													
						</div>																
						@endforeach
					</div>			
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial Section End --> 
@endsection