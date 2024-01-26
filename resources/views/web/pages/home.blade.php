@extends('web.layouts.main')
@section('content')


@include('web.pages.home_sections.slider')

	
@include('web.pages.home_sections.about')



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

	
@include('web.pages.home_sections.products')


@include('web.pages.home_sections.testimonial')
	



@endsection