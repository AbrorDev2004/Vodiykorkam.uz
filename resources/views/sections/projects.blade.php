<section class="projects-section padding">
	<div class="container">
		<div class="row">
            @foreach ($projects as $project)
                <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="project-item"> <img src="/admin_r/images/{{ $project->image }}" alt="projects">
                        <div class="overlay"></div>
                        <a href="/admin_r/images/{{ $project->image }}" class="view-icon ajax-popup-link"> <i class="fas fa-expand"></i></a>
                        <div class="projects-content"> <a href="#" class="category"></a>
                            <h3><a href="{{ Route('projectView', $project->id) }}" class="tittle">{{ $project->title }}</a></h3> </div>
                    </div>
                </div>
            @endforeach

		</div>
	</div>
</section>
