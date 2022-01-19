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
    <h1>faqs ID:{{$team->id}}</h1>
     <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('put')
        <div class="form-group">
           <label for="">name</label>
           <input type="text" name="name" class="form-control" value="{{ $team->name }}" >
        </div>
        <div class="form-group">
         <label for="">lavozimi</label>
         <input type="text" name="lavozim" class="form-control" value="{{ $team->lavozimi }}">
        </div>
        <div class="form-group">
          <label for="">image</label>
          <input type="file" name="image" class="form-control">
       </div>
        <div class="form-group">
           <input type="submit" name="s1" value="SEND" class="btn btn-primary">   
       </div>  
     </form>
</body>
</html>
@endsection