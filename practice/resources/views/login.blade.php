<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="loginbtn" method="POST">
        @csrf
        email:
        <input name="email" type="email"> <br>
        <span style="color: red"> 
            @error('email'){{$message}}
            @enderror
        </span><br>
        password: 
        <input name="password" type="password"><br>
        <span style="color: red"> 
            @error('password'){{$message}}
            @enderror
        </span> <br>
        <button type="submit">login</button>
    </form>
</body>
</html>