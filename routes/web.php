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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/event', function () {
     dd(DB::table('posts')->whereId('1')->get()); 
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

    $events = [
        "seven Gps",
        "Seven Dma",
        "Seven Academy"
    ];

    return view('event',compact("events"));
});