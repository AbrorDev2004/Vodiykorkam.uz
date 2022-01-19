@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       form{
          margin-left: 50px;
          margin-right: 70px;
       }
       h1{
          text-align: center;
       }
    </style>
</head>
<body>
    <h1>About ID:{{$about->id}}</h1>
     <form action="{{ route('about.update', $about->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
       <div class="form-group">
          <label for="">Title</label>
          <input type="text" name="title" class="form-control" value="{{$about->title}}">
       </div>
       <div class="form-group">
        <label for="">Description</label>
        <input type="text" name="description" class="form-control" value="{{$about->description}}">
       </div>
       <div class="form-group">
			<label for="">Body</label>
			<textarea class="form-group" id="editor" name="body">{{$about->body}}</textarea>
		</div>
       <div class="form-group">
        <label for="">Image</label>
        <input type="file" name="image" class="form-control" value="{{$about->image}}">
       </div>
       <div class="form-group">
        <label for="">Meta-Title</label>
        <input type="text" name="meta_title" class="form-control" value="{{$about->meta_title}}">
       </div>
       <div class="form-group">
        <label for="">Meta-Description</label>
        <input type="text" name="meta_description" class="form-control" value="{{$about->meta_description}}">
       </div>
       <div class="form-group">
        <label for="">Meta-Keywords</label>
        <input type="text" name="meta_keywords" class="form-control" value="{{$about->meta_keywords}}">
       </div>
       <div class="form-group">
          <input type="submit" name="s1" value="UPDATE" class="btn btn-primary">   
      </div>  
     </form>
</body>
</html>
@endsection