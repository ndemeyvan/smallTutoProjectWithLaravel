<?php 

namespace App\Utils;

class Date {


    public function isWeekend (){

        return  date("N") >= 6;

    }



}