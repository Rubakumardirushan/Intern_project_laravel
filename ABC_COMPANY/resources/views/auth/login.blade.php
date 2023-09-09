<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .center {
            width: 400px;
            margin-left: 550px;
            margin-top:100px;
            border-radius: 40px 40px 40px 40px;
            background-color: #007bff;
            height: 400px;
        }

        .middle {
            background-color: white;
            padding: 20px;

            border-radius: 40px 40px 40px 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 200px;
        }

        h3 {
            font-size: 35px;
            margin-left: 100px;
            justify-content: center;
        }
a{
    margin-left: 250px;
    color: black;
}

        input[type="text"],
        input[type="password"] {
            width: 250px;
            padding: 10px;
            margin-left: 45px;
            margin-top: 40px;
            border: 1px solid #ccc;
            border-radius: 20px 20px 20px 20px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 20px 20px 20px 20px;
            cursor: pointer;
            margin-left: 130px;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>


</head>
<body>
    @if ($errors->any())
    <ul>
        {!! implode('',$errors->all('<li>:message</li>')) !!}
    </ul>
@endif
<div class="center" >
    <h3>LOGIN PAGE</h3>
<form action="authenticate" method="POST" class="middle">
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="login">

    @csrf
</form>
<a href="register">Create Account...?</a>
</div>
</body>
</html>
