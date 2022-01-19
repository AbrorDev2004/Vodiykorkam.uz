@extends('layouts.admin')

@section('content')

<div class="col-md-12 mt-3">
    <!-- Default box -->
    <div class="card">
        <div class="card-body row">
            <div class="col-12">
                <div class="form-group">
                    <label for="inputName">TITLE</label>
                    <p class="form-text">{{ $post->title }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputEmail">Description</label>
                    <p class="form-text">{{ $post->description  }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputEmail">BODY</label>
                    <p class="form-text">{!! $post->body  !!}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputEmail">STATUS</label>
                    <p class="form-text">{!!$post->status == 1 ? '<span class="badge badge-info right">Active</span>' : '<span class="badge badge-danger right">No Active</span>'!!}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputSubject">IMAGE</label>
                    <img src="/admin_r/images/{{$post->image}}" class="form-text" width="400px">
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputMessage">META-TITLE</label>
                    <p class="form-text">{{ $post->meta_title  }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputMessage">META-DESCRIPTION</label>
                    <p class="form-text">{{ $post->meta_description  }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputMessage">META-KEYWORDS</label>
                    <p class="form-text">{{ $post->meta_keywords }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection