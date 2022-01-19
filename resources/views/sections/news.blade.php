<section class="blog-section padding">
	<div class="container">
		<div class="blog-wrap row">
			<div class="col-lg-8 sm-padding">
				<div class="row">
					@foreach ($news as $new)
						<div class="col-sm-6 padding-15">
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
			<div class="col-lg-4 padding-15">
				<div class="sidebar-wrap">
					<div class="widget-content">
						<form action="#" class="search-form">
							<input type="text" class="form-control" placeholder="izlash">
							<button class="search-btn" type="button"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<div class="widget-content">
						<h4>So'ngi yangiliklar</h4>
						<ul class="thumb-post">
							@foreach ($latest_news as $new)
								<li>
									<img src="/admin_r/images/{{ $new->image }}" alt="post">
									<a href="{{ Route('newsView', $new->id) }}">{{ $new->title }}</a>
								</li>
							@endforeach
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>