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
        <div>
            <h1></h1>
            <audio src="{{ asset() }}"></audio>
            </div>
        @endforeach
    </div>
</body>
</html>