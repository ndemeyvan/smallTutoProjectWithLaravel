@extends('layouts.master',["title"=>"Events"]) 
@inject('date', 'App\Utils\Date')
{{-- ici en haut je fais une injection de la classe qui a ete cree dans le nameSpace Utils --}}

{{-- la haut j'extencie mon layout et en meme temps je passe une variable en parametre , cela peut etre utile --}}
@section('content')

<h3>voici la liste de tous les evenements</h3>
    <ul>
       @foreach ($events as $event)
            <li>{{$event}}</li>
       @endforeach
    </ul>

    @section('footer')
        Ndeme Yvan &copy 2020 
        @if ($date->isWeekend())
        {{-- Ensuite ici je fais appel a cette method dont jai besoin --}}
        c'est le weekend 
        @else
        ce n'est pas le weekend
    @endif
    @endsection

    @section('script.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    @endsection
@endsection
