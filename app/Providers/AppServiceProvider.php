<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Advantages;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Review;
use App\Models\Service;
use App\Models\Slider;
use App\Models\team;
use Facade\Ignition\Middleware\AddLogs;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('welcome', function ($view) {
            $sliders= Slider::latest()->limit(3)->get();
            $advantages= Advantages::latest()->limit(4)->get();
            $projects= Portfolio::latest()->limit(5)->get();
            $testimonial= Review::latest()->limit(5)->get();
            $team= team::latest()->limit(4)->get();
            $services= Service::latest()->limit(4)->get();
            $news= Post::latest()->limit(3)->get();
            $view->with(compact('sliders','advantages', 'projects', 'testimonial', 'team', 'services', 'news'));
        });
        view()->composer('services', function ($view) {
            $testimonial= Review::latest()->limit(5)->get();
            $services= Service::all();
            $view->with(compact('testimonial','services'));
        });
        view()->composer('projects', function ($view) {
            $projects= Portfolio::all();
            $view->with(compact('projects'));
        });
        view()->composer('about', function ($view) {
            $about= About::latest()->limit(1)->get();
            $testimonial= Review::latest()->limit(5)->get();
            $advantages= Advantages::latest()->limit(3)->get();
            $view->with(compact('about','testimonial','advantages'));
        });
        view()->composer('news', function ($view) {
            $news= Post::inRandomOrder()->limit(8)->get();
            $latest_news= Post::latest()->limit(5)->get();
            $view->with(compact('news','latest_news'));
        });
    }
}
