<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>
<body>
    <h1>User Login</h1>
    <form action="users" method="post">
        @csrf
        <label for="email">E-mail Address:</label>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br><br>
        <button type="submit">Log In</button>
    </form>
</body>
</html>