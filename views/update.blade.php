<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Registration</h1>
    <form action="/update" method="post">
    @csrf 
    <table>
             <tr>
                
                <td><input type="hidden" name='id' value="{{$r->id}}"></td>
            </tr>
            <tr>
                <td>name</td>
                <td><input type="text" name='name' value="{{$r->name}}"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="address" >{{$r->address}}</textarea></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name='gender' value="male" {{$r->gender=="male"? "checked" : " "}}>Male
                    <input type="radio" name='gender' value="female" {{$r->gender=="female"? "checked" : " "}}>Female
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td>
                    <select name="city" id="">
                        <option value="surat" {{$r->city=="surat"? "selected" : " "}}>surat</option>
                        <option value="vapi" {{$r->city=="vapi"? "selected" : " "}}>vapi</option>
                    </select>
                </td>
            </tr>
            @php
                $arr=explode(', ',$r->hobby)
            @endphp
            <tr>
                <td>Hobby</td>
                <td>
                    <input type="checkbox" name="hobby[]" value="dance" {{in_array('dance',$arr)?"checked":""}}>dance
                    <input type="checkbox" name="hobby[]" value="read" {{in_array('read',$arr)?"checked":""}}>read
                    <input type="checkbox" name="hobby[]" value="gaming" {{in_array('gaming',$arr)?"checked":""}}>gaming
                </td>
            </tr>
            <tr>
                <td>Dob</td>
                <td><input type="date" name="dob" id="" value="{{$r->dob}}"></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>