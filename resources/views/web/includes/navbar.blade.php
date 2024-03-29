<!-- Header Start -->
<header id="header" class="fixed-top">
		<!-- Header Topbar Start -->
		<!-- <div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-8">
						<div class="header-left">
							<ul>
								<li>We Provide lifetime support</li>							
								<li><i class="icofont-ui-touch-phone"></i>+00 0123456789</li>							
								<li><i class="icofont-envelope"></i>info@finixpro.com</li>
							</ul>	
						</div>
					</div>				
					<div class="col-md-3 col-sm-4">
						<div class="header-right-div">
							<div class="soical-profile">
								<ul>
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-linkedin"></i></a></li>
									<li><a href="#"><i class="icofont-skype"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- Header Topbar End -->
		<!-- Main Bar Start -->
		<div class="navbar-light navbar-dark" style="background-color: #262a2e;">
			<div class="container">
				<div class="row">
					<!-- Logo Start -->
					<div class="col-md-3 col-sm-12 col-xs-8">
						<div class="logo">
							<a href="{{ url('/') }}" class="site-logo"><img src="frontend/img/logo.png" alt=""/></a>
							<a href="index.html" class="sticky-logo"><img src="frontend/img/logo.png" alt=""/></a>
						</div>
					</div>	
					<!-- Logo End -->

				
					<!-- Main Menu Start -->
					<div class="mobile-nav-menu"></div>						
					<div class="col-md-9 col-sm-9 nav-menu">
						<div class="menu">
							<nav id="main-menu" class="main-menu">
								<ul>

									@foreach ($menus as $menu)
										<li class="active"><a href="{{ url($menu->link) }}">{{ $menu->menu }}
										</a>
										@if(count(($menu->subMenus))>0)
											<ul>
												@foreach ($menu->subMenus as $submenu)
													<li class="navbar-brand"><a href="{{ $submenu->link }}">{{ $submenu->name }} </a></li>		
												@endforeach
											</ul>	
										@endif
										</li> 
									@endforeach 											
									
								</ul>
							</nav>
						</div>					
					</div>	
					<!-- Main Menu End -->
				</div>
			</div>
		</div>
		<!-- Main Bar End -->
	</header>
	<!-- Header 