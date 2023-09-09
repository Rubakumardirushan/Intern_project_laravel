<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
    <ul>
        {!! implode('',$errors->all('<li>:message</li>')) !!}
    </ul>
@endif
<form action="authenticate" method="POST">
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="login">
    @csrf
</form>
</body>
</html>
