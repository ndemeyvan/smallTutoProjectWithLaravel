@extends('layouts.master',["title"=>"Url Shorter"]) 
@inject('date', 'App\Utils\Date')
{{-- ici en haut je fais une injection de la classe qui a ete cree dans le nameSpace Utils --}}

{{-- la haut j'extencie mon layout et en meme temps je passe une variable en parametre , cela peut etre utile --}}
@section('content')
    
    <div class="container">

        <h1 class='my-5'> Le meilleur raccourciseur d'url au monde </h1>
        <h3>Entrer votre url a racourcir ici bas </h3>
        <form action="/url" method="POST">
            @csrf
            <div class="form-group">
              <label for="url">Entrer votre Url original </label>
              <input type="text" class="form-control" id="url" aria-describedby="urlhelp" name="url" value="{{old('url')}}">
           {!!$errors->first('url',' <small id="urlhelp" class="form-text text-danger">:message</small>')!!}
           {{-- le deuxieme paragraphe est celui du message a inserer en place en cas derror --}}
            </div>
           
            <button type="submit" class="btn btn-primary btn-block">racourcir</button>
          </form>
    </div>

@endsection

@section('script.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
@endsection