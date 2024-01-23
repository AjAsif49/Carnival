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