<section class="promo-section padding">
	<div class="container">
		<div class="row promo-wrap">
			@foreach ($advantages as $advantage)
				<div class="col-lg-3 col-sm-6 sm-padding">
					<div class="promo-item box-shadow text-center wow fadeInUp" data-wow-delay="100ms"> 
						{!! $advantage->image !!}
						<h3>{{ $advantage->title }}</h3>
						<p>{{ $advantage->description }}</p>
					</div>
				</div>
			@endforeach
			
		</div>
	</div>
</section>
