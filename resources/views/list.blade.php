<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>
<body>
<h1>List User</h1>
<ul>
    @foreach($list as $item)
        <li>
            {{$item}}
        </li>
    @endforeach
</ul>
</body>
</html>
