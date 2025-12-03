<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
div.search{
    max-width: 960px;
    margin: 12px auto;
    width: 100%;
}
div.search> form{
    display: flex;
    padding: 12px;
    max-width: 3xl;
}
input{
padding: 5px 150px;
border: 2px solid black;
border-radius: 4px;
width:400px ;
}
button{
    background-color: blue;
    padding: 8px 10px;
    color: white;
    border-radius: 4px;
}
table{
    border:1px solid black ;
    width:100% ;
    border-collapse: collapse;
    margin-top:12px  ;
}
th{
    background-color: blue;
    color: white;
    pad: 12px 15px;
    border: 2px solid black;

}
td{
    border: 1px solid black;
    padding: 20px auto;
}
</style>
<body>
    <div class="search">
    <form action={{ URL('student') }} method="GET">
        <input type="text" name="search" id="search" placeholder="serch something">
        <button type="submit">Search</button>
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>lastName</th>
            <th>age</th>
            <th>gender</th>
            <th>score</th>
        </tr>
        @foreach ($student as $student )
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->lastName}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->score}}</td>
            </tr>
        @endforeach
    </table>
    <div>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            

        </tr>

        {{-- {{ $student->appends(request()->query())->links() }} --}}
    </div>
    </div>
</body>
</html>
