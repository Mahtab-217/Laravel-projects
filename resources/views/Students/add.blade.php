<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add Student</title>
      <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-6xl w-full mx-auto my-12"></div>
    @if ($errors->any())
      <ol class="list-disc bg-red-500 p-2 text-gray-100 list-inside">
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>
        @endforeach
      </ol>
    @endif
    <div class="border w-full">
        <h1 class="text-center py-4 text-2xl  text-white bg-blue-600 ">Add Students</h1>
        <form enctype="multipart/form-data" action="{{ url('student/create') }}" class="flex flex-col gap-2 w-10/12 mx-auto my-2" method="POST">
          @csrf
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name" class="py-2 w-full border-black focus:outline-0 border rounded-md">
            <input type="text" name="lastname" value="{{ old('lastname') }}" placeholder="Enter your last name" class="py-2 border-black w-full focus:outline-0 border rounded-md">
            <input type="number" name="score" value="{{ old('score') }}" placeholder="Enter your score" class="py-2 w-full border-black focus:outline-0 border rounded-md">
            <input type="number" name="age" value="{{ old('age') }}" placeholder="Enter your age" class="py-2 w-full border-black focus:outline-0 border rounded-md">
            <label for="image">Profile Picture</label>
            <input type="file" accept="image/*" name="image" value="{{ old('image') }}" id="image" class="py-2 w-full border-black focus:outline-0 border rounded-md">
             <label>Gender</label>
             <div class="flex flex-row">
            male <input type="radio" name="gender" value=" m"{{old('gender')==="m"?"checked":""}}/>
            female <input type="radio" name="gender" value=" f" {{old('gender')==="f"?"checked":""}}/>
            </div>
          <button class="py-2 bg-green-600 text-white text-center" type="submit">Save</button>
        
        </form>
    </div>
    
</body>
</html>
