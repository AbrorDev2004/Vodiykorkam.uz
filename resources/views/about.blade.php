@extends('layouts.site')
@section('content')
    <section class="page-header padding">
        <div class="container">
            <div class="page-content text-center">
                <h2>Biz Haqimizda</h2>
                <p>Lorem ipsum dolor sit amet consectetur </p>
            </div>
        </div>
    </section>
    <section class="about-section padding">
        <div class="container">
            <div class="row about-wrap">
                <div class="col-lg-6 sm-padding">
                    <div class="about-content wow fadeInLeft">
                        <h2>{{ $about[0]->title }}</h2>
                        <p>{{ $about[0]->description}}...</p> <a href="#" class="default-btn">To`liq o`qish</a> </div>
                </div>
                <div class="col-lg-6 sm-padding">
                    <ul class="about-promo">
                        @foreach ($advantages as $item)
                            <li class="about-promo-item wow fadeInUp">
                                {!! $item->image !!}
                                <div>
                                    <h3>{{ $item->title }}</h3>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                
            </div>
            <br><br>
            <h2>Sertifikatlar</h2>
            <div class="sponsor-section bg-white">
                <div class="container align-items-center text-center">
                    <div id="sponsor-carousel" class="sponsor-carousel owl-carousel ">
                        <div class="sponsor-item">
                            <a href="/sertifikatlar/ISO_4500.png" download="">
                                <img src="/sertifikatlar/ISO_4500.png" alt="sponsor">
                            </a>
                        </div>
                        <div class="sponsor-item"> 
                            <a href="/sertifikatlar/ISO_9001.png" download="">
                                <img src="/sertifikatlar/ISO_9001.png" alt="sponsor"> 
                            </a>
                        </div>
                        <div class="sponsor-item"> 
                            <a href="/sertifikatlar/ISO_14001.png" download="">
                                <img src="/sertifikatlar/ISO_14001.png" alt="sponsor"> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="work-pro-section padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="work-pro-item text-center"> <span class="number">1</span>
                        <div class="number-line"></div>
                        <h3>Rejalashtirish va tadqiqot</h3>
                        <p>Biz hamkorlik ruhini qo'llab-quvvatlovchi barqaror kelajakni qurishga intilamiz.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="work-pro-item text-center"> <span class="number">2</span>
                        <div class="number-line"></div>
                        <h3>Dizayn va g'oyalar</h3>
                        <p>Biz hamkorlik ruhini qo'llab-quvvatlovchi barqaror kelajakni qurishga intilamiz.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="work-pro-item text-center"> <span class="number">3</span>
                        <div class="number-line"></div>
                        <h3>Ixtisoslashtirilgan loyihalar</h3>
                        <p>Biz hamkorlik ruhini qo'llab-quvvatlovchi barqaror kelajakni qurishga intilamiz.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="work-pro-item text-center"> <span class="number">4</span>
                        <h3>Yakuniy natijalar</h3>
                        <p>Biz hamkorlik ruhini qo'llab-quvvatlovchi barqaror kelajakni qurishga intilamiz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    @include('sections.testimonial')
@endsection
