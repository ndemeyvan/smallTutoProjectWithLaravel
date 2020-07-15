<?php 


if(!function_exists('format_price')){
     function format_price($event){
        if ($event->isFree()){
            return '<strong>Gratuit</strong>';
        }else {
            return $event->price .' fcfa';
        }
    }


}

if(!function_exists('format_date')){
    function format_date($date){
      
           return $date->format('d/m/y H:i');
   }


}

