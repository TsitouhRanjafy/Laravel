<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a-propos</title>
</head>
<style>
    body{
        background-color: #242424;
        font-family: sans-serif;
        color: bisque;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    a{
        color : aqua;
        text-decoration : none;

    }
</style>
<body>
    <h1> A Propos de </h1>
    <a href="{{ url('/a-propos/tsitohaina') }}">Tsitohaina</a>
    <a href="{{ url('/a-propos/Chuck') }}">Chuck</a>
    <a href="{{ url('/a-propos/Geans') }}">Geans</a>
    <a href="{{ url('/a-propos/John') }}">John</a>
</body>
</html>