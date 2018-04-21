<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controller\Controllers;
use App\Event;
use Auth;

class EventController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['except'=>['index','show']]);
    }
	    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page_no)
    {
        $skip_no = 0;
        if(is_numeric($page_no)){
            $skip_no = ($page_no - 1) * 5;
        }
        $page_count = ceil((\DB::table('events')->get()->count())/5);
        $events = \DB::table('events')->orderBy('id')->skip($skip_no)->take(5)->get();
        if(Auth::check()){
            return view('event.edit', compact('events', 'page_no', 'page_count'));
        }
        return view('event.index', compact('events', 'page_no', 'page_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'date' => 'required',
            'description' => 'required',

        ]);

        $event = new Event;
        $event->title = $request->input('title');
        $event->price = $request->input('price');
        $event->date = $request->input('date');
        $event->date->format('Y-m-d');
        $event->description = $request->input('description');

        $event->save();

        return redirect()->back()->with('message', 'Event added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show($event_id)
    {
        $event = Event::find($event_id);
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit($event_id)
    {
        $event = Event::find($event_id);
        return view('event.add', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'date' => 'required',
            'description' => 'required',

        ]);

        
        $event->title = $request->input('title');
        $event->price = $request->input('price');
        $event->date = $request->input('date');
        $event->date->format('Y-m-d');
        $event->description = $request->input('description');

        $event->save();

        return redirect()->back()->with('message', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy($event_id)
    {
        $event = Event::find($event_id);
        $event->delete();
        return view('event.edit');
    }
}
