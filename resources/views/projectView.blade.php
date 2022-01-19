@extends('layouts.site')
@section('content')
    <section class="page-header padding">
        <div class="container">
            <div class="page-content text-center">
                <h2>Loyiha haqida</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
    </section>
    <section class="project-single-section padding">
        <div class="container">
            <div class="row project-single-wrap align-items-center">
                <div class="col-md-6 sm-padding">
                    <div class="single-carousel"> <img src="/admin_r/images/{{ $project->image }}" alt="img"> </div>
                </div>
                <div class="col-md-6 sm-padding">
                    <div class="project-single-content">
                        <h2>{{ $project->title }}</h2>
                        <p>{{ $project->description }}</p>
                        <ul class="project-details">
                            <li><span>Arxitektorlar</span>: {{ $project->arxitektor }}</li>
                            <li><span>Joylashuv</span>: {{ $project->location }}</li>
                            <li><span>Sanasi</span>: {{ $project->date }}</li>
                            <li><span>Maydoni</span>: {{ $project->maydon }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
