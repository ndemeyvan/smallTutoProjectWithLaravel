<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Events</title>
</head>
<body>
    <h3>voici la liste de tous les evenements</h3>
    <ul>
       @foreach ($events as $event)
            <li>{{$event}}</li>
       @endforeach
    </ul>
</body>
</html>