<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Post;
use App\Url;

Route::get('/', function () {
    // $post = Post::create(['id'=>3,'title'=>'un second title','body'=>'un second contenu']);
    // $post->save(); au cas ou on a pas utiliser le create

    return view('welcome');
});


Route::get('/url', function () {
  
   return view('url.index');
});


Route::post('/url', function () {

 
   $url = request('url');
   $record = Url::where('url',$url)->first();

   $data=['url'=>$url];

   $validation = Validator::make($data,['url'=>'required|url'])->validate();
  
  
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
  
});


Route::get('/{shortened}', function ($shortened) {
   $events = Url::where('shortened',$shortened)->first();
   if(!$events){
      return redirect('/url');
   }else{
      return redirect(  $events->url);
   }
});

Route::get('/events', function () {
    
   /* //  dd(DB::table('posts')->whereId('1')->get()); 
     //recupere celui qui a lid 1
    //  dd(DB::table('posts')->whereId('1')->update(
    //      [ 
    //          'title'=> 'titre 1',
    //          'body'=> 'body 1',

    //  ])); 
     //recupere celui qui a lid 1 et le met a jour 

    // DB::table('posts')->insert([
    //     'id'=>2,
    //     'title'=>'2 Article',
    //     'body'=>'3 Contenu',
    // ]); insere une valeur dans la table post
////////////////////////////////////avec les model
     /* $post = Post::all();
    // $post =  new Post;
    // $post->id = 100;
    // $post->title = "un second title";
    // $post->body = "un second contenu";
    // $post->save();
       // dd($post->title); */

    /* App\Event::create([
       'name'=> 'Concert de Will Aime',     
       'description'=> 'Le Comedient de l\'heure sera des notre a la cuvette de Bepanda le 18/02/2020 ',     
       'location'=> 'Cameroun/Douala',     
       'start_at'=> new dateTime(),  
       'price'=> 15000,     
     ]);   
   
     App\Event::create([
        'name'=> 'Ouverture du spa nathalie piment',     
        'description'=> 'Quand le condiment entre dans l\'eau chaude',     
        'location'=> 'Cameroun/Douala', 
        'start_at'=> new dateTime('+5 days')  ,  
        'price'=> 0,     
      ]); 


     App\Event::create([
        'name'=> 'Conference Flutter Douala',     
        'description'=> 'Le plus grand evenement des developpeur flutter a douala',     
        'location'=> 'Cameroun/Douala',   
        'start_at'=> new dateTime('+5 hours')  ,    
        'price'=> 0,     
      ]); */

    $events = App\Event::all();

   //  $events = App\Event::first();
   //  $events->price =80;
   //  $events->save();

    return view('events.index',compact("events"));
});