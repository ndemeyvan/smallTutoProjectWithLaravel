<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = ['url','shortened'];

    public static function getUniqueUrl(){
        $shortened = str_random(5);
        if(static::where('shortened','=',$shortened)->count()!=0){
           return static::getUniqueUrl();
        }else{
           return  $shortened;
        }
     }
    
}
