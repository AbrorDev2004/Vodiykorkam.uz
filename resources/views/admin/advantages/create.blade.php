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
    <h1>Advantages create</h1>
     <form action="{{ route('advantages.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
       <div class="form-group">
          <label for="">Title</label>
          <input type="text" name="title" class="form-control">
       </div>
       <div class="form-group">
        <label for="">Description</label>
        <input type="text" name="description" class="form-control">
       </div>
       <div class="form-group">
         <label for=""><a href="https://www.flaticon.com/">icon</a> html tegi bilan</label>
         <input type="text" name="image" class="form-control">
      </div>
       <div class="form-group">
          <input type="submit" name="s1" value="SEND" class="btn btn-primary">   
      </div>  
     </form>
</body>
</html>
@endsection