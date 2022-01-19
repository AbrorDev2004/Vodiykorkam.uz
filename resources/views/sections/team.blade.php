<section class="team-section bg-gray padding">
	<div class="dots"></div>
	<div class="container">
		<div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms"> <span>Team</span>
			<h2>Ixtisoslashgan jamoa</h2> </div>
		<div class="row team-wrap box-shadow">
			@foreach ($team as $item)
				<div class="col-lg-3 col-sm-6 padding-15">
					<div class="team-item">
						<div class="overlay"></div> <img src="/admin_r/images/{{ $item->image }}" alt="team">
						<div class="team-content">
							<h3>{{ $item->name }}</h3> <span>{{ $item->lavozimi }}</span> </div>
					</div>
				</div>
			@endforeach

		</div>
	</div>
</section>
