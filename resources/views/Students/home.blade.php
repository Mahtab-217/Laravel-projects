<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link rel="stylesheet" href="../css/home.css">
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
padding: 9px 120px;
border: 2px solid black;
border-radius: 4px;
width:50px ;
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
</style>
<body>
    <div class="search">
    <form action="">
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
    </table>
    </div>
</body>
</html>
