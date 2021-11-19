<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather for {{ $location->name }}</title>
</head>
<body>
<h1>Weather for {{ $location->name }}</h1>
<ul>
    @foreach ($location->measurements as $measurement)
        <li>{{ $measurement->date }}: {{ $measurement->celsius }}&deg;C</li>
    @endforeach
</ul>
</body>
</html>
