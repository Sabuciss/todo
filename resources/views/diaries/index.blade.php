<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dienasgrāmata</title>
</head>
<body>
    
<h1>Dienasgramatas raksti</h1>

<ul>
  @foreach ($diaries as $diary)
    <li>{{ $diary->title }}</li>
  @endforeach
</ul>

</body>
</html>