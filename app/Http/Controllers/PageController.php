<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function services(){
        return view('services');
    }
    public function projects(){
        return view('projects');
    }
    public function news(){
        return view('news');
    }
    public function contact(){
        return view('contact');
    }
    public function projectView($id){
        $project = Portfolio::findOrFail($id);
        return view('projectView',compact('project'));
    }
    public function newsView($id){
        $news = Post::findOrFail($id);
        $latest_news= Post::latest()->limit(5)->get();
        return view('newsView',compact('news', 'latest_news'));
    }
    public function serviceView($id){
        $service= Service::findOrFail($id);
        $services=Service::inRandomOrder()->limit(6)->get();
        return view('serviceView',compact('service', 'services'));
    }
}
