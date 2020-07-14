@extends('layouts.master',["title"=>"Events"]) 
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
    @endsection
@endsection
