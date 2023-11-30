<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Navbarr.css">
    <link rel="stylesheet" href="CSS/HomePage.css">
</head>
<style>
    :root{
    
 --gradient:linear-gradient(180deg, red,aliceblue);
 }
</style>
<body>
    @include('FrontEnd.layouts.Navbar')
  <main>
    @yield('container-PinkFloyd')
</main>
    @include('FrontEnd.layouts.FooterHomePage')
</body>
</html>