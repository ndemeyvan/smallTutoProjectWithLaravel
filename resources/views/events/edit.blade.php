@extends('layouts.master',["title"=>"Cree evenement"]) 
@inject('date', 'App\Utils\Date')
{{-- ici en haut je fais une injection de la classe qui a ete cree dans le nameSpace Utils --}}

{{-- la haut j'extencie mon layout et en meme temps je passe une variable en parametre , cela peut etre utile --}}
@section('content')

        <h5 class="mt-5 text-center" >Vous voulez Editer un evenement ? c'est simple veillez remplir les champs ci dessous .</h5>
            <form class="my-5" action="{{ route('event.update',$event) }}" method="POST">
                @csrf
                @method('PUT')

                @include('events._form',['submitButtonText'=>'Modifier votre evenement'])

                {{-- <button type="submit" class="btn btn-primary btn-block ">Modifier votre evenement</button> --}}

             </form>
 

@endsection

    @section('script.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

@endsection
