<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Edit Album</title>
</head>

<div class="bg-gray-800 text-gray-50 text-2xl">Edit Album</div>

<body>
    
    <form action="{{route('albums.update', [$album->id])}}" method="POST"> 
        @csrf
        @method('PUT')

        <label for="id">ID</label>
        <input type="text" id="id" name="id" value="{{ $album->id }}"  readonly><br><br>

        <label for="name">album naam:</label>
        <input type="text" id="name" name="name" value="{{ $album->name }}" ><br><br>

        <label for="genre">jaar:</label>
        <input type="number" id="year" name="year" value="{{ $album->year }}" ><br><br>

        <label for="founded">aantal keer verkocht:</label>
        <input type="number" id="times_sold" name="times_sold" value="{{ $album->times_sold }}" ><br><br>

        <input type="Submit" value="Edit Album">
      </form>

</body>
</html>

