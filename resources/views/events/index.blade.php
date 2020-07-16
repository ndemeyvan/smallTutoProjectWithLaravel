@extends('layouts.master',["title"=>"EventBrote"]) 
@inject('date', 'App\Utils\Date')
{{-- ici en haut je fais une injection de la classe qui a ete cree dans le nameSpace Utils --}}

{{-- la haut j'extencie mon layout et en meme temps je passe une variable en parametre , cela peut etre utile --}}
@section('content')


    <div class="container">
        <h2 class="mt-3">Bienvenu sur Event Brote</h2>
        <h4 class="my-3">Voici nos evenements a venir</h4>
      
        @if (count($events)>0)
        <ul>
             @foreach ($events as $event)
        <li><a href="{{route('event.show',['event'=>$event->id])}}">{{$event->title}}</a> </li>
        {{-- 
            ici haut j'utilise le helper route() le premier parametre est la route de ma ressource
         , et la seconde est a quoi va correspondre la resource generique {event} 
         --}}
            @endforeach
        </ul>
        @else
        <ul>
                <li>Nous n'avons aucun evenement pour l'instant</li>
            </ul>
        @endif
    
    </div>

@endsection

    @section('script.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    @endsection
