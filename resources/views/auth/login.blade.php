<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="/login" method="post">
        @csrf
        <input type="email" name="email" id="email" placeholder="email">
        <input type="password" name="password" id="password" placeholder="password">
        <button type="submit">login</button>
    </form>
</body>
</html>
