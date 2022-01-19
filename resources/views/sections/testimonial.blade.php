<section class="testimonial-section bg-grey padding">
	<div class="dots"></div>
	<div class="container">
		<div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms"> <span>Testimonial</span>
			<h2>Odamlar fikri qanday?</h2>
        </div>
		<div id="testimonial-carousel" class="testimonial-carousel box-shadow owl-carousel">
			@foreach ($testimonial as $item)
			<div class="testi-item d-flex align-items-center"> <img src="/admin_r/images/{{ $item->image }}" alt="img">
					<div class="testi-content">
						<p>{{ $item->message }}</p>
						<h3>{{ $item->name}}</h3>
						<ul class="rattings">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>
						<span>{{ $item->position }}</span> </div> <i class="fa fa-quote-right"></i>
			</div>
			@endforeach
		</div>
	</div>
</section>
