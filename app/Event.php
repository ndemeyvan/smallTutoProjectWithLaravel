<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//php artisan make:model nom
class Event extends Model
{
    protected $fillable = ['name','description','location','price','start_at'];
    protected $dates =['start_at'];

}
