<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
    <h1>this is our home page</h1>

    <form action="/saveuser" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">submit</button>
    </form>

    <a href="{{route('cont')}}">contact</a>
    <a href="/home">home</a>
    <a href="/">root</a>
</body>
</html>