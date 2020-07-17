@extends('layouts.master',["title"=>"EventBrote"]) 
@inject('date', 'App\Utils\Date')
{{-- ici en haut je fais une injection de la classe qui a ete cree dans le nameSpace Utils --}}

{{-- la haut j'extencie mon layout et en meme temps je passe une variable en parametre , cela peut etre utile --}}
@section('content')


  

        <h2 class="mt-3">Bienvenu sur Event Brote</h2>
        <h4 class="my-3">Voici nos evenements a venir ({{$events->count()}})</h4>
      
        @if (!$events->isEmpty())
        <ul>
             @foreach ($events as $event)
        <li><a href="{{route('event.show',['event'=>$event])}}">{{$event->title}}</a> </li>
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
    
   
        

@endsection

    @section('script.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    @endsection
