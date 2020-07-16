@extends('layouts.master',["title"=>"Cree evenement"]) 
@inject('date', 'App\Utils\Date')
{{-- ici en haut je fais une injection de la classe qui a ete cree dans le nameSpace Utils --}}

{{-- la haut j'extencie mon layout et en meme temps je passe une variable en parametre , cela peut etre utile --}}
@section('content')


    <div class="container">
        
        <h5 class="mt-5 text-center" >Vous voulez creer un evenement ? c'est simple veillez remplir les champs ci dessous .</h5>
    <form class="my-5" action="{{ route('event.store') }}" method="POST">
            @csrf
    <div class="form-group ">
              <label>Nom</label>
              <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"  id="title" name="title">
              {!!$errors->first('title',' <small id="title" class="form-text text-danger">:message</small>')!!}
            </div>
            <div class="form-group">
                <label>Votre description</label>
                <textarea class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"  rows="3" id="description" name="description"></textarea>
                {!!$errors->first('description',' <small id="description" class="form-text text-danger">:message</small>')!!}
              </div>
            <button type="submit" class="btn btn-primary btn-block ">Creer votre evenement</button>

          </form>
 
    </div>

@endsection

    @section('script.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

@endsection
