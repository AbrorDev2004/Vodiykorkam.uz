@extends('layouts.admin') @section('content')
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
	body {
		margin-left: 2%;
		margin-right: 2%;
	}
	</style>
</head>

<body>
	<h1 style="text-align: center">UPDATE</h1>
	<form action="{{ route('posts.update', $post->id ) }}" method="POST" enctype="multipart/form-data"> 
        @csrf 
        @method('put')
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" name="title" class="form-control" value="{{$post->title}}"> 
        </div>
		<div class="form-group">
			<label for="">Description</label>
			<input type="text" name="description" class="form-control" value="{{$post->description}}"> 
        </div>
		<div class="form-group">
			<label for="">Body</label>
			<textarea class="form-group" id="editor" name="body">{{$post->body}}</textarea> 
        </div>
        <select class="form-select" aria-label="Default select example" name="status">
            <option selected>select post mode</option>
            <option value="1">Active</option>
            <option value="0">No-Active</option>
        </select>
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" name="image" class="form-control" value="{{$post->image}}"> 
        </div>
        <div class="form-group">
            <label for="">Meta-Title</label>
            <input type="text" name="meta_title" class="form-control" value="{{$post->meta_title}}"> 
        </div><div class="form-group">
            <label for="">Meta-Description</label>
            <input type="text" name="meta_description" class="form-control" value="{{$post->meta_description}}"> 
        </div><div class="form-group">
            <label for="">Meta-Keywords</label>
            <input type="text" name="meta_keywords" class="form-control" value="{{$post->meta_keywords}}"> 
        </div>
		<br>
		<br>
		<div class="form-group">
			<input type="submit" name="s1" class="btn btn-primary" value="UPDATE"> </div>
	</form>
</body>

</html> @endsection