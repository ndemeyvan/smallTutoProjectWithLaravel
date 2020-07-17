<?php

namespace App ;

trait Slugable {
    
      /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function bootSlugable()
    {
       // static::bootTraits();
        static::creating(function($event){
           $event->slug = str_slug($event->title);
        });
    }
    // la methode ci dessus me permet 
    ///d'effectuer une manipulattion pendant
    // la creation de mon evement dout le 'creating'
}