<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenu</title>
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

</style>
<body>
    <h1> Welcome </h1>
    <a href="{{ url('/a-propos') }}">A propos</a>
</body>
</html>