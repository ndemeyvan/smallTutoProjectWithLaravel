@extends('layouts.master',["title"=>"Events"]) 
@inject('date', 'App\Utils\Date')
{{-- ici en haut je fais une injection de la classe qui a ete cree dans le nameSpace Utils --}}

{{-- la haut j'extencie mon layout et en meme temps je passe une variable en parametre , cela peut etre utile --}}
@section('content')

<div class="container">
<h4>Bonjour nous avons {{ $events->count() }} Evenements</h4>
{{-- ici grace  a la methode de count je peux compter le nombre delement que jai dans une collection --}}
<h4>et la somme des prix de tout nos evenement sont de : {{ $events->sum('price') }} FCFA</h4>
{{-- ici grave  a la methode de collection Sum je peux faire la somme des prix de tous mes evenements random permet davoir un element aleatoire de la collection --}}
<h4>Donc une moyenne de : {{ $events->avg('price') }} FCFA</h4>

    <ul>
       @foreach ($events as $event)
{{-- class="{{$loop->index%2 == 0? 'bling':' '}}" si index est pair , affiche le bg en orange --}}
    <article > 
          <h4>{{$event->name}}</h4>
          <p>{{$event->description}}</p>
          <p> {!! format_price($event) !!}

               
            </p>
          <p>{{$event->location}}</p>
          <p>Jour/Heure : {{ format_date($event->start_at) }}</p>
          </article>
          {{-- grace a $loop je peux savoir si il sagit du dernie element et ainsi ne pas afficher le hr si c'est le dernie , sinn il faut un tour sur la documentation --}}
          @if (!$loop->last)
          <hr>
          @else
              
          @endif
       
       @endforeach
    </ul>
</div>

    @section('footer')
       <div class="justify-content justify-content-center my-5">
        Ndeme Yvan &copy 2020 
        @if ($date->isWeekend())
        {{-- Ensuite ici je fais appel a cette method dont jai besoin --}}
        c'est le weekend 
        @else
        ce n'est pas le weekend
       </div>
    @endif
    @endsection

    @section('script.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    @endsection
@endsection