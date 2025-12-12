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
    <form action="{{ URL('songs/insert') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" class="py-2 px-4 border  border-black" name="singer" placeholder="Enter the singer's name">
        <input type="file" accept="audio/*" name="song" class="py-2 px-4 border border-black" placeholder="Enter the song">
        <button type="submit" class="bg-green-600 h-10 w-14 border rounded-md"  >Save</button>
    </form>
</body>
</html>
