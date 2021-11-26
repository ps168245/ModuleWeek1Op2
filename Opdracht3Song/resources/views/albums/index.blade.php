<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    .flex-container {
      display: flex;
      flex-wrap: nowrap;
      background-color: DodgerBlue;
    }
    
    .flex-container > div {
      background-color: #f1f1f1;
      width: 100px;
      margin: 10px;
      text-align: center;
      line-height: 75px;
      font-size: 30px;
    }
    </style>

<div class="bg-gray-800 text-gray-50 text-2xl">Index Album</div>
<a href="albums/create" class="button">Create album</a>
<a href="/albums" class="button">Show album</a>


<div class="flex-container">
    @foreach ($albums as $album)
        <li><a href="albums/{{$album->id}}">{{ $album->name }}
        </a> <button><a href="albums/{{$album->id}}/delete"> Delete </a></button>  
        </a> <button><a href="albums/{{$album->id}}/edit"> Edit </a>
        </li>
        {{-- <li><a href="songs/{{$song['id']}}">{{ $song['title'] }}</a></li> --}}
        {{-- <a href={{"delete/" $song['id']}}> delete </a> --}}
    @endforeach
</div>


    {{-- <table border="1">
        <tr>
            <td>TITLE</td>
        </tr>
        @foreach($songs as $song)
        <tr>
            <td>{{$song['title']}}</td>
        </tr>
    </table> --}}

