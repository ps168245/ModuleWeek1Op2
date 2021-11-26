<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

<a href="/bands/create" class="button">Create band</a>
<a href="/bands" class="button">Show band</a>
<h1>Create band</h1>
<body>
    <form action="{{route('bands.store')}}" method="POST">
        @csrf
        <label for="name">band naam:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="genre">Artiest:</label>
        <input type="text" id="genre" name="genre" ><br><br>

        <label for="founded">Founded:</label>
        <input type="number" id="founded" name="founded" ><br><br>
        <label for="active_til">active til:</label>
        <input type="number" id="active_til" name="active_til" ><br><br>

        <input type="Submit" value="Band toevoegen" >
        
      </form>

</body>
</html>

