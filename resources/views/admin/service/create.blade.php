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
	<h1 style="text-align: center">CREATE</h1>
	<form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf 
        @method('post')
		<div class="form-group">
			<label for="">name</label>
			<input type="text" name="name" class="form-control"> 
        </div>
		<div class="form-group">
			<label for="">Description</label>
			<input type="text" name="description" class="form-control"> 
        </div>
		<div class="form-group">
			<label for=""><a href="https://www.flaticon.com/">icon</a> html tegi bilan</label>
			<input type="text" name="icon" class="form-control"> 
        </div>
		<div class="form-group">
			<label for="">Body</label>
			<textarea class="form-group" id="editor" name="body"></textarea>
		</div>
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" name="image" class="form-control"> 
        </div>
        <div class="form-group">
            <label for="">Meta-Title</label>
            <input type="text" name="meta_title" class="form-control"> 
        </div><div class="form-group">
            <label for="">Meta-Description</label>
            <input type="text" name="meta_description" class="form-control"> 
        </div><div class="form-group">
            <label for="">Meta-Keywords</label>
            <input type="text" name="meta_keywords" class="form-control"> 
        </div>
		<br>
		<br>
		<div class="form-group">
			<input type="submit" name="s1" class="btn btn-primary" value="CREATE"> </div>
	</form>
</body>

</html> @endsection