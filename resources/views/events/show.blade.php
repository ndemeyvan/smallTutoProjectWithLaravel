@extends('layouts.master',["title"=>"{{$event->title}}"]) 
@inject('date', 'App\Utils\Date')
{{-- ici en haut je fais une injection de la classe qui a ete cree dans le nameSpace Utils --}}

{{-- la haut j'extencie mon layout et en meme temps je passe une variable en parametre , cela peut etre utile --}}
@section('content')


    <div class="container">
        
        <h5>{{$event->title}}</h5>
        <p>{{$event->description}}</p>

    <a href="{{route('home')}}"> << retourner a tous les evenements </a>

    </div>

@endsection

    @section('script.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

@endsection
