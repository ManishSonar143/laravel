<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome,{{session('username')}}</h1>
    <table border="1px" cellspacing="2px" cellpadding="10px">
        <tr>
            <td>name</td>
            <td>address</td>
            <td>gender</td>
            <td>city</td>
            <td>hobby</td>
            <td>dob</td>
            <td>image</td>
            <td>delete</td>
            <td>Update</td>
        </tr>
        @foreach($result as $r)
        <tr>
            <td>{{$r->name}}</td>
            <td>{{$r->address}}</td>
            <td>{{$r->gender}}</td>
            <td>{{$r->city}}</td>
            <td>{{$r->hobby}}</td>
            <td>{{$r->dob}}</td>
            <td><img src="{{ asset('storage/'.$r->img) }}" alt="User Image" width="100" height="100">
            </td>
            <td><a href="/delete/{{$r->id}}">Delete</a></td>
            <td><a href="/edit/{{$r->id}}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>