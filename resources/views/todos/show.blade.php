<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("style.css") }}">
    <title>Parādii</title>
</head>
<body>
<x-navigation></x-navigation>
        <h1>{{ $todo->content }}</h1>
        <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>
</body>
</html>