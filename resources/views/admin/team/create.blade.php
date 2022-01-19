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
    <h1>Create</h1>
     <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
         <label for="">name</label>
         <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
       <label for="">lavozimi</label>
       <input type="text" name="lavozimi" class="form-control">
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