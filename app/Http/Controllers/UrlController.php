<?php

namespace App\Http\Controllers;
use App\Post;
use App\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function create () {
  
        return view('url.index');
     }

     public  function store () {

        $url = request('url');
        $record = Url::where('url',$url)->first();
     
        $data=['url'=>$url];
        //on aurai pu aussi utiliser compact
        /*$validation = Validator::make(
           $data,
           ['url'=>'required|url'],
           ['required'=>'Ce champs est requis','url.url'=>'Ce url est invalide'],
           )->validate();*/
           //ceci est une premiere facon de le faire , mais c'est mieux avec la translation
     
           $validation = \Validator::make(
              $data,
              ['url'=>'required|url'])->validate();
       
        if ($record) {
     
           $shortUrl = $record->shortened;
           return view('url.result',compact('shortUrl'));
     
        } else {
          
           $object = Url::create([
              'url'=> $url,
              'shortened'=> Url::getUniqueUrl(),
           ]);
     
           if($object){
              
              return view('url.result',)->with('shortUrl',$object->shortened);
     
           }else{
              return redirect('/url');
           }
           
     
        }
       
     }


     public function show ($shortened) {

        $events = Url::where('shortened',$shortened)->first();
        if(!$events){
           return redirect('/url');
        }else{
           return redirect(  $events->url);
        }

     }
}
