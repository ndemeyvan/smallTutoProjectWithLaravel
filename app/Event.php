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

    public function isFree(){
        return $this->price == 0;
    }

}
