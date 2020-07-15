<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//php artisan make:model nom
class Event extends Model
{
    protected $fillable = ['name','description','location','price','start_at'];
    // protected $dates =['start_at']; ceci me permet de convertir le string qui  met retourner par le model en DateTime , ici cela est le type CARBON

    protected $casts =[

        'start_at'=>'datetime',//donc convertie moi ceci est type date ou instance de type carbone
        'price'=>'integer',
    
    ]; // ici il est question de cast mes variable qui sont dans ce tableau
    //lire sur le casting en documentation
    // la commande php artisan tinker permet d'ouvrir une invite ou on peux executer les commandes laravel

    protected $appends = ['fake_price'] ; // celui ci va ajouter le faux attribut fake price a notre model
    
    public function isFree(){
        return $this->price == 0;
    }


    public function getFakePriceAttribute($value){ 
        //fake_price est sont equivalent , 
        //faire attention au Attribute en fin de notation camel case et le s attributes
        return $this->attributes['price'] + 100 ;
    }

    public function setPriceAttribute($value){ 
            //A chaque fois que une valeur de Price en ce qui concerne ce tp sera modifier , ce muttateur sera appeler
            /*
            ceci est un exemple 
                $events = App\Event::first();
                $events->price =80;
                $events->save();
            
            */
            dd('ffff');
    }








    /*
    
    NB : 
    - les Accesseur utilisent  les get ex : getFakePriceattribute .
    - les mutateurs utilisent le set ex
    
    
    */
}
