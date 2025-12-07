<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Students</title>
      <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-6xl w-full mx-auto my-12"></div>
    <div class="border w-full">
        <h1 class="text-center py-4 text-2xl  text-white bg-blue-600 ">Update Students</h1>
        <form action="{{ URL('student/edit',$stu->id) }}" class="flex flex-col gap-2 w-10/12 mx-auto my-2" method="POST">
          @csrf
          @method('PUT');
            <input type="text" name="name" value="{{ $stu->name }}" placeholder="Enter your name" class="py-2 w-full border-black focus:outline-0 border rounded-md">
            <input type="text" name="lastname" value="{{ $stu->lastName }}" placeholder="Enter your last name" class="py-2 border-black w-full focus:outline-0 border rounded-md">
            <input type="number" name="score" value="{{ $stu->score }}" placeholder="Enter your score" class="py-2 w-full border-black focus:outline-0 border rounded-md">
            <input type="number" name="age" value="{{ $stu->age }}" placeholder="Enter your age" class="py-2 w-full border-black focus:outline-0 border rounded-md">
             <label>Gender</label>
             <div class="flex flex-row">
            male <input type="radio" name="gender" value=" m" {{$stu->gender==="m"?"checked":""}}/>
            female <input type="radio" name="gender" value=" f" {{$stu->gender==="f"?"checked":""}}/>
            </div>
          <button class="py-2 bg-green-600 text-white text-center" type="submit">Update</button>
        
        </form>
    </div>
    
</body>
</html>
