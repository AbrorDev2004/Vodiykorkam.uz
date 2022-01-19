<section class="projects-section padding">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-lg-8 col-md-6 sm-padding">
				<div class="section-heading mb-40">
                    <span>loyihalar</span>
					<h2>Biz qurgan inshoatlar</h2>
                </div>
			</div>
			<div class="col-lg-4 col-md-6 sm-padding text-right"> <a href="/projects" class="default-btn">Barcha loyihani ko`rish</a> </div>
		</div>
		<div id="projects-carousel" class="projects-carousel box-shadow owl-carousel">
			@foreach ($projects as $project)
				<div class="project-item">
					<img src="/admin_r/images/{{ $project->image }}" alt="projects">
					<div class="overlay"></div>
					<a href="/admin_r/images/{{ $project->image }}" class="view-icon img-popup" data-gall="project"> <i class="fas fa-expand"></i></a>
					<div class="projects-content">
						<h3><a href="{{ Route('projectView', $project->id) }}" class="tittle">{{ $project->title }}</a></h3>
					</div>
				</div>
			@endforeach

		</div>
	</div>
</section>
