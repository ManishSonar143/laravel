<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration</h1>
    <form action="/store" method="post"  enctype="multipart/form-data">
    @csrf 
    <table>
            <tr>
                <td>name</td>
                <td><input type="text" name='name'></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" ></textarea></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name='gender' value="male">Male
                    <input type="radio" name='gender' value="female">Female
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td>
                    <select name="city" id="">
                        <option value="surat">surat</option>
                        <option value="vapi">vapi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hobby</td>
                <td>
                    <input type="checkbox" name="hobby[]" value="dance">dance
                    <input type="checkbox" name="hobby[]" value="read">read
                    <input type="checkbox" name="hobby[]" value="gaming">gaming
                </td>
            </tr>
            <tr>
                <td>Dob</td>
                <td><input type="date" name="dob" id=""></td>
            </tr>
            <tr>
                <td>File</td>
                <td><input type="file" name="img" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>