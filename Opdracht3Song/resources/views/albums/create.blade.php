<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Create Album</title>
</head>
{{-- @if(count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif
@if(\Session::has('success'))
<div class="alert alert-success">
    <p>{{\Session::get('success')}}</p>
</div>
@endif--}}












<div class="bg-gray-800 text-gray-50 text-2xl">Create Album</div>

<a href="/albums/create" class="button">Create album</a>
<a href="/albums" class="button">Show album</a>

<body>
    <form action="{{route('albums.store')}}" method="POST">
        @csrf
        <label for="name">album naam:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="year">jaar:</label>
        <input type="number" id="year" name="year" ><br><br>

        <label for="times_sold">aantal keer verkocht:</label>
        <input type="number" id="times_sold" name="times_sold" ><br><br>

        <input type="Submit" value="album toevoegen" >
        
      </form>

</body>
</html>

