<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title or "Boom" }}</title>
    {{-- le OR me permet de dire a blade que si une valeur n'est pas passe lors de l'extentiation de blade met plutot BOOM a la place --}}
    {{-- On peut aussi utiliser  ?? si on utilise php version 7 et plus --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>

            .bling{
                background-color: orange;
            }

    </style>
</head>
<body>
    @include('layouts.partials._nav',["age"=>"25"])

    {{-- les partials peuvents aussi transporter des variables --}}
    {{-- En consequent le partial en question a aussi acces a toutes les variables du layout ou il est inclu --}}
    {{-- le @{{ }} dit a blade de ne pas interpreter un code qui peut etre utiliser par un autre framework js comme vuJs --}}
    {{-- On peut ausi utiliser notre code a linterieur d'un bloc @verbatim @endvarbatim au cas ou on as un bloc de code a ne pas interpreter par blade --}}

    @yield('content')

    <footer>
        @yield('footer')
    </footer>

    @yield('script.footer')

</body>
</html>