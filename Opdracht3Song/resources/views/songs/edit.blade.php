<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Edit Song</title>
</head>

<div class="bg-gray-800 text-gray-50 text-2xl">Edit song</div>

<body>
    <form action="{{route('songs.update', [$song->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="id">ID</label>
        <input type="text" id="id" name="id" value="{{ $song->id }}"  readonly><br><br>
        <label for="title">Song naam:</label>
        <input type="text" id="title" name="title" value="{{ $song->title }}" ><br><br>
        <label for="singer">Artiest:</label>
        <input type="text" id="singer" name="singer" value="{{ $song->singer }}" ><br><br>
        <input type="Submit" value="Edit Song">
      </form>

</body>
</html>

