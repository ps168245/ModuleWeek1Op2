<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Create Song</title>
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
<div class="bg-gray-800 text-gray-50 text-2xl">Create song</div>
<a href="/songs/create" class="button">Create song</a>
<a href="/songs" class="button">Show song</a>

<body>
    <form action="{{route('songs.store')}}" method="POST">
        @csrf
        <label for="title">Song naam:</label>
        <input type="text" id="title" name="title" required><br><br>
        <label for="singer">Artiest:</label>
        <input type="text" id="singer" name="singer" ><br><br>
        <input type="Submit" value="Song toevoegen" >
        
      </form>

</body>
</html>

