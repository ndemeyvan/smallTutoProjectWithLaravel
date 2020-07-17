<?php

namespace App ;

trait SlugRoutable {


    // cette methode me permet de definir globalement 
    //l'element qui va etre utiliser dans
    // mes routes generique  ,dans notre cas c'est le slug.
    //SLUGERR la ROUTE
    public function getRouteKeyName()
    {
        return "slug";
    }
}