<section class="service-section bg-grey padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="service-carousel" class="service-carousel box-shadow owl-carousel">
					@foreach ($services as $item)
						<div class="service-item">
							<div class="service-icon"> 
								{!! $item->icon !!} 
							</div>
							<h3>{{ $item->name }}</h3>
							<p>{{ $item->description }}</p>
							 <a href="{{ Route('serviceView', $item->id) }}" class="read-more">Batafsil</a>
							<div class="overlay-icon"> {!! $item->icon !!}</i> </div>
						</div>			
					@endforeach		
				</div>
			</div>
		</div>
	</div>
</section>