<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-full max-w-4xl mx-auto"></div>
    <h1 class="text-5xl font-bold">All Songs</h1>
    <div>
        @foreach ($songs as $song )
        <div class="w-full border rounded-2xl flex flex-col gap-4 items-center">
            <h1>{{$song->singer}}</h1>
            @if ($song->song)
                   <audio src="{{ asset('storage'.$song->song) }}" controls ></audio>
                   <a href="{{ asset('storage'.$song->song)}}" download="">Download</a> 
            @endif
         
            </div>
        @endforeach
    </div>
</body>
</html>