<!-- <div class="about-us-sec pt-100 pb-100">
		<div class="container">		
			<div class="row">	
				<div class="col-md-6">
					<div class="about-img">
						<img src="img/about.jpg" alt=""/>
						<div class="company-exprience">
							<div class="company-exprience-inner">
								<div class="company-exprience-logo">
									<i class="icofont-award"></i>
								</div>
								<div class="company-exprience-text">
									<span class="foundend-year">1992</span>
									<span class="founded-title">Company Founded</span>
								</div>
							</div>
						</div>
					</div>				
				</div>				
				<div class="col-md-6">				
					<div class="about-desc">
						<div class="sec-title">
							<span class="sec-sub-title">Welcome to Carnival Offset Printers</span>
							<h1>  CARNIVAL OFFSET PRINTERS: The Most Innovative Professional Trims & Accessories Manufacturer</span></h1>
							<div class="border-shape"></div>
						</div>					
						<p>Are you looking for the finest quality Apparel Trims and Accessories for your brand? If yes then you are in the right place!

						Welcome to CARNIVAL OFFSET PRINTERS LTD. We thank you for taking your time to view our website and for showing interest in our Trims and Accessories Plant. CARNIVAL OFFSET PRINTERS Ltd. where you can find experts who really meets your demand according to your needs. We are the best manufacturer and supplier of trims & accessories and we have been in the industry since 2015.</p>
					<div  class="company-author">
											
					</div>	
					</div>				
				</div>
			
			</div>	
		</div>	
	</div> -->	

	<div class="service-cat-sec pt-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="sec-title text-center">
						<h1>WHAT WE ARE ABOUT</h1>
						<p>CARNIVAL OFFSET PRINTERS is the Trims and Accessories Manufacturer in Bangladesh that is defined by three things – innovative operational skills, expertise in professionalism and advanced technology.</p>
					</div>				
				</div>
			</div>	
		</div>
		<div class="container">
			<div class="row">
                @foreach ($abouts as $about)
				<div class="col-md-4">
					<div class="single-service-cat">  
						<div class="service-cat-img">
							<img src="{{ asset($about->image) }}" alt="">
							<a href="#" class="service-cat-btn">Read More</a>						
						</div>
						<div class="service-cat-desc">
							<span class="service-cat-icon"><i class="icofont-recycle-alt"></i></span>
							<div class="service-cat-title">
								<h2><a href="#">{{ $about->title }}</a></h2>	
							</div>
							<p>{{ $about->description }}</p>
							<a href="#" class="service-cat-redmore">View Details <i class="icofont-thin-right"></i></a>
						</div>
					</div>   
				</div>
                @endforeach
			</div>
		</div>
	</div>
	<!-- service Section End -->