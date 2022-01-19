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
	<form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" name="image" class="form-control" value=" {{$portfolio->image}} ">
		</div>
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" name="title" class="form-control" value=" {{$portfolio->title}} ">
        </div>
		<div class="form-group">
			<label for="">Description</label>
			<input type="text" name="description" class="form-control" value="{{$portfolio->description}} ">
        </div>
		<div class="form-group">
			<label for="">Joylashuv</label>
			<input type="text" name="location" class="form-control" value=" {{$portfolio->location}}">
        </div>
		<div class="form-group">
			<label for="">Sanasi</label>
			<input type="text" name="date" class="form-control" value=" {{$portfolio->date}}">
        </div>
        <div class="form-group">
			<label for="">Arxitektorlar</label>
			<input type="text" name="arxitektor" class="form-control" value=" {{$portfolio->arxitektor}}">
        </div>
		<div class="form-group">
			<label for="">Umumiy maydoni</label>
			<input type="text" name="maydon" class="form-control" value=" {{$portfolio->maydon}}">
        </div>
        <div class="form-group">
            <label for="">Meta-Title</label>
            <input type="text" name="meta_title" class="form-control" value=" {{$portfolio->meta_title}} ">
        </div><div class="form-group">
            <label for="">Meta-Description</label>
            <input type="text" name="meta_description" class="form-control" value=" {{$portfolio->meta_description}} ">
        </div><div class="form-group">
            <label for="">Meta-Keywords</label>
            <input type="text" name="meta_keywords" class="form-control" value=" {{$portfolio->meta_keyword}} ">
        </div>
		<br>
		<br>
		<div class="form-group">
			<input type="submit" name="s1" class="btn btn-primary" value="CREATE"> </div>
	</form>
</body>

</html>
@endsection
