<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <style>
        * { line-height: 1.5; margin: 0; }
        html { color: #888888; font-family: sans-serif; text-align: center; }
        body { left: 50%; margin: -43px 0 0 -150px; position: absolute; top: 50%; width: 300px; }
        h1 { color: #555555; font-size: 2em; font-weight: 400; }
        p { line-height: 1.2; }
        @media only screen and (max-with:270px) {
            body { margin: 10px auto; position: static; width: 95%; }
            h1 { font-size: 1.5em; }
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $description }}</p>
</body>
</html>