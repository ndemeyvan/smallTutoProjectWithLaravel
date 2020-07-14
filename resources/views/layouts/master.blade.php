<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title or "Boom" }}</title>
    {{-- le OR me permet de dire a blade que si une valeur n'est pas passe lors de l'extentiation de blade met plutot BOOM a la place --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    @include('layouts.partials._nav')
    @yield('content')

    <footer>
        @yield('footer')
    </footer>

</body>
</html>