@extends('layouts.admin')

@section('content')

<div class="col-md-12 mt-3">
    <!-- Default box -->
    <div class="card">
        <div class="card-body row">
            <div class="col-12">
                <div class="form-group">
                    <label for="inputName">TITLE</label>
                    <p class="form-text">{{ $about->title }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputEmail">Description</label>
                    <p class="form-text">{{ $about->description  }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputEmail">BODY</label>
                    <p class="form-text">{{ $about->body  }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputSubject">IMAGE</label>
                    <img src="/admin_r/images/{{$about->image}}" class="form-text" width="400px">
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputMessage">META-TITLE</label>
                    <p class="form-text">{{ $about->meta_title  }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputMessage">META-DESCRIPTION</label>
                    <p class="form-text">{{ $about->meta_description  }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputMessage">META-KEYWORDS</label>
                    <p class="form-text">{{ $about->meta_keywords }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <a href="{{ route('about.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection