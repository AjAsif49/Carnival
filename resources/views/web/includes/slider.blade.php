
    
<!-- Slider Section Start -->
<div class="slider">
    <div class="all-slide owl-item">	
        <!-- Slider Single Item Start -->
        @foreach ($sliders as $slider)
        <div class="single-slide" style="background-image:url({{ asset($slider->image) }});">
            <div class="slider-overlay"></div>
            <div class="slider-wrapper">
                <div class="slider-text">
                    <div class="slider-caption">
                        <h1>{{ $slider->title }}</h1>	
                        <ul>
                            <li><a href="#">learn more</a></li>					
                            <li><a href="#">contact us</a></li>
                        </ul>							
                    </div>	
                </div>
            </div>				
        </div>
        <!-- Slider Single Item End -->
@endforeach

    </div>			
</div>
<!-- Slider Section End -->	