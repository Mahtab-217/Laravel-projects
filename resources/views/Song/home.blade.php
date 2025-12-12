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
    <h1 class="text-5xl font-bold text-center text-blue-900">First part of the listening for ILETS exam</h1>
   
    <div>
        @foreach ($songs as $song )
        <div class="w-full border rounded-2xl flex flex-col gap-3 items-center">
            <h1 class="text-xl text-blue-800">{{$song->singer}}</h1>
            @if ($song->song)
                   <audio src="{{ asset('storage/'.$song->song) }}" controls class="bg-black rounded-md"></audio>
                   <div class="flex flex-row gap-5">
                   <a href="{{ asset('storage/'. $song->song)}}" download="" class="text-green-800 font-bold">Download</a> 
                   <a href="" class="text-red-800 font-bold">Delete</a> 
                   </div>
            @endif
         
            </div>
        @endforeach
    </div>
</body>
</html>