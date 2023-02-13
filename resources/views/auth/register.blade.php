<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="/register" method="post">
        @csrf
        <input type="text" name="company" id="company" placeholder="company">
        <input type="text" name="name" id="name" placeholder="name">
        <input type="text" name="lastname" id="lastname" placeholder="lastname">
        <input type="email" name="email" id="email" placeholder="email">
        <input type="password" name="password" id="password" placeholder="password">
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="password_confirmation">

        <button type="submit">Register</button>

    </form>
</body>
</html>
