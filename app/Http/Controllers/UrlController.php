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

     public  function store (Request $request) {

        //$data=['url'=>$url];
        //on aurai pu aussi utiliser compact
        /*$validation = Validator::make(
           $data,
           ['url'=>'required|url'],
           ['required'=>'Ce champs est requis','url.url'=>'Ce url est invalide'],
           )->validate();*/
           //ceci est une premiere facon de le faire , mais c'est mieux avec la translation
     
          //\Validator::make($data, ['url'=>'required|url'])->validate();

          $this->validate($request,['url'=>'required|url']);
          $record = $this->getrequestForUrl($request->get('url'));
          return view('url.result',)->with('shortUrl',$record->shortened);

     }


     public function show ($shortened) {

        $events = Url::where('shortened',$shortened)->firstOrFail();
        if(!$events){
           return redirect('/url');
        }else{
           return redirect(  $events->url);
        }

     }

     private function getrequestForUrl($url){
      
        return Url::firstOrCreate(
            ['url'=>$url],
            ['shortened'=> Url::getUniqueUrl()]
        );


        // return Url::where('url',$url)->firstOrCreate(
        //     ['url'=>$url],
        //     ['shortened'=> Url::getUniqueUrl()]
        // );
        
        // ceci est le resumer en une ligne de ce qui est la en bas 
        /* $record = Url::where('url',$url)->first(); 
        if ($record) {
            return $record;
         } else {
             return $object = Url::create([
                 'url'=> $url,
                'shortened'=> Url::getUniqueUrl(),
              ]);
         }*/
          


     }


}
