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
     </style>
</head>
<body>
<form action="{{route('contact.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" placeholder="name" name="name" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" placeholder="phone" name="phone" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" placeholder="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" placeholder="message" name="message" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" name="s1" value="SEND" class="btn btn-primary">
    </div>
</form>
</body>
</html>

@endsection