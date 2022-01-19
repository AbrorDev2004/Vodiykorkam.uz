<section class="blog-section padding">
	<div class="container">
		<div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms"> <span>news</span>
			<h2>So`ngi yangiliklar</h2> </div>
		<div class="row blog-wrap">
			@foreach ($news as $new)
				<div class="col-lg-4 col-sm-6 sm-padding">
					<div class="blog-item box-shadow">
						<div class="blog-thumb"> <img src="/admin_r/images/{{ $new->image }}" alt="post"> <span class="category"></span> </div>
						<div class="blog-content">
							<h3><a href="#">{{ $new->title }}</a></h3>
							<p>{{ $new->description }}</p> 
							<a href="{{ Route('newsView', $new->id) }}" class="read-more">To`liq o`qish</a> </div>
					</div>
				</div>	
			@endforeach
		</div>
	</div>
</section>
