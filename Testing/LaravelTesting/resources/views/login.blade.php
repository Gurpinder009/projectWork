<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{route('login')}}" method="POST">
        @csrf
        <input placeholder="Email" name="email" type="email" value="{{old('email')}}">
        <input placeholder="password" name="password" type="password">
            <button type="submit">Submit</button>
    </form>
</body>
</html>