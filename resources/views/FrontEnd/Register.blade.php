<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PBW</title>
    <link rel="stylesheet" href="/CSS/Register.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome back!<br>Glad to see you again</h1>
            <hr>
        </header>
        <form action="/Register" method="POST">
            @csrf
                <input id="username" name="username" type="username" placeholder="Enter your username" class="email">
                <input id="email" name="email" type="email" placeholder="Enter your email" class="email">
                <input id="password" name="password" type="password" placeholder="Enter your password" class="password">
                <button type="submit" class="btn">Register</button>
        </form>
    </div>
</body>
</html>


