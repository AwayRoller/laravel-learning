<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    <title></title>

</head>
<body>
<h1>Hello</h1>

<ul>
    @foreach ($tasks as $task)

        <li>{{ $task }}</li>

    @endforeach
</ul>


</body>
</html>