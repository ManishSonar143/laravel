<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>

    <h3>@if($errors->any())
        <div>{{$errors->first('home')}}</div>
        @endif
    </h3>
    <form action="/login" method="post">
        @csrf    
    <table>
            <tr>
                <td>UserName</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="city"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="login">
                </td>
            </tr>
        </table>
    </form>
    <h4>If not <a href="/regi">Register</a></h4>
</body>
</html>