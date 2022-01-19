<div id="main-slider" class="dl-slider">
	@foreach ($sliders as $item)
		<div class="single-slide">
			<div class="bg-img kenburns-top-right" style="background-image: url(/admin_r/images/{{ $item->image }});"></div>
			<div class="overlay"></div>
			<div class="slider-content-wrap d-flex align-items-center text-center">
				<div class="container">
					<div class="slider-content">
						<div class="dl-caption medium">
							<div class="inner-layer">
								<div data-animation="fade-in-top" data-delay="1s">Residencial</div>
							</div>
						</div>
						<div class="dl-caption big">
							<div class="inner-layer">
								<div data-animation="fade-in-bottom" data-delay="2s">{{$item->title}}</div>
							</div>
						</div>
						<div class="dl-caption small">
							<div class="inner-layer">
								<div data-animation="fade-in-bottom" data-delay="3s">{{$item->description}}</div>
							</div>
						</div>
						<div class="dl-btn-group">
							<div class="inner-layer"> <a href="/services" class="dl-btn" data-animation="fade-in-bottom" data-delay="3.5s">Barcha xizmatlar <i class="arrow_right"></i></a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	@endforeach

</div>
