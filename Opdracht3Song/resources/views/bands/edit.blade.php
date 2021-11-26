<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Edit Song</title>
</head>

<div class="bg-gray-800 text-gray-50 text-2xl">Edit Band</div>

<body>
    <form action="{{route('bands.update', [$band->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="id">ID</label>
        <input type="text" id="id" name="id" value="{{ $band->id }}"  readonly><br><br>

        <label for="name">band naam:</label>
        <input type="text" id="name" name="name" value="{{ $band->name }}" ><br><br>

        <label for="genre">genre:</label>
        <input type="text" id="genre" name="genre" value="{{ $band->genre }}" ><br><br>

        <label for="founded">founded:</label>
        <input type="number" id="founded" name="founded" value="{{ $band->founded }}" ><br><br>

        <label for="active_til">Active_til:</label>
        <input type="number" id="active_til" name="active_til" value="{{ $band->active_til }}" ><br><br>
        
        <input type="Submit" value="Edit band">
      </form>

</body>
</html>

