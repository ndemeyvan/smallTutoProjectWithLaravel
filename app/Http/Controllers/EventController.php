<?php

namespace App\Http\Controllers;
use App\Event;
use App\Http\Requests\CreateEventFormRequest;
use App\helpers;
use Flashy;

use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $event = new Event;
        return view('events.create',compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventFormRequest $request)
    {

        
        $title= $request->title;
        $description =  $request->description;
         Event::create([
             'title' => $title,
             'description' => $description,
         ]);

         Flashy::message('Evenement cree avec succes');
         
         return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $event = Event::findOrFail($id);
       return view('events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $event = Event::findOrFail($id);

 
        
        return view('events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $title= $request->title;
        $description =  $request->description;
        $event = Event::findOrFail($id);
        $event->update([
             'title' => $title,
             'description' => $description,
         ]);
         Flashy::message('Evenement modifier avec succes');
       

         return redirect(route('event.show',$event->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete($id);
       flash('Evenement supprimer avec succes','danger');
       
        
        return redirect(route('home'));
    }
}
