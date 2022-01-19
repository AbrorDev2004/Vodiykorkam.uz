    @extends('layouts.site')
@section('content')
    <section class="blog-section padding">
        <div class="container">
            <div class="blog-wrap row">
                <div class="col-lg-8 padding-15">
                    <div class="blog-single-wrap">
                        <div class="blog-thumb"> <img src="/admin_r/images/{{ $news->image }}" alt="img"> </div>
                        <div class="blog-single-content">
                            <h2><a href="#">{{ $news->title }}</a></h2>
                            {!! $news->body !!}
                        </div>
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
                            <h4>So`ngi yangilikar</h4>
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
@endsection