<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PBW</title>
    <link rel="stylesheet" href="../CSS/Login.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome back!<br>Glad to see you again</h1>
            <hr>
        </header>
        <form method="POST" action="/Login">
            @csrf
            <div class="input-box">
                <input name="email" id="email" type="email" placeholder="Enter your email" class="email">
                <input name="password" id="password" type="password" placeholder="Enter your password" class="password">
            </div>
            <div class="container">
            <button type="submit" class="btn">masuk</button>
            </div>     
        </form>
    </div>
</body>
</html>
