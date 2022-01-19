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
	body {
		margin-left: 2%;
		margin-right: 2%;
	}
	</style>
</head>

<body>
	<h1 style="text-align: center">EDIT</h1>
	<form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf 
        @method('put')
		<div class="form-group">
			<label for="">name</label>
			<input type="text" name="name" class="form-control" value="{{$service->name}}"> 
        </div>
		<div class="form-group">
			<label for="">Description</label>
			<input type="text" name="description" class="form-control" value="{{$service->description}}"> 
        </div>
		<div class="form-group">
			<label for=""><a href="https://www.flaticon.com/">icon</a> html tegi bilan</label>
			<input type="text" name="icon" class="form-control" value="{{$service->icon}}"> 
        </div>
		<div class="form-group">
			<label for="">Body</label>
			<textarea class="form-group" id="editor" name="body">{{$service->body}}</textarea>
		</div>
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" name="image" class="form-control" value="{{$service->image}}"> 
        </div>
        <div class="form-group">
            <label for="">Meta-Title</label>
            <input type="text" name="meta_title" class="form-control" value="{{$service->meta_title}}"> 
        </div><div class="form-group">
            <label for="">Meta-Description</label>
            <input type="text" name="meta_description" class="form-control" value="{{$service->meta_description}}"> 
        </div><div class="form-group">
            <label for="">Meta-Keywords</label>
            <input type="text" name="meta_keywords" class="form-control" value="{{$service->meta_keywords}}"> 
        </div>
		<br>
		<br>
		<div class="form-group">
			<input type="submit" name="s1" class="btn btn-primary" value="UPDATE"> </div>
	</form>
</body>

</html> 

@endsection