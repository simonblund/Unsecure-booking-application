<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;
use App\User;
use App\participants;
use \DB;

class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function adminIndex()
    {
        $events = Event::all();

        return view('parts.eventlist', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('parts.eventcreator');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $event = new Event;
         $event->EName = $request->EName;
         $event->ELocation = $request->ELocation;
         $event->EStartDate = $request->EStartDate;
         $event->EStopDate = $request->EStopDate;
         $event->EStartTime = $request->EStartTime;
         $event->EStopTime = $request->EStopTime;
         $event->EMaxParticipants = $request->EMaxParticipants;
         $event->ECountParticipants = $request->ECountParticipants;
         $event->EDescription = $request->EDescription;

         $event->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        $particount = DB::table('participantrecords')->where('event_id', $id)->count();
        return view('parts.eventinfo', ['event' => $event, 'particount' => $particount]);
    }
    /*
     * Show list of Events with participanttable. 
     */
    public function showparticipants()
    {
        
        $event = Event::with('visitors')->get();
        
        //return compact('event');
        return view('parts.participantlist', ['event' => $event]);
    }
    public function addParticipant($id, $usid)
    {
        participants::create([
            'user_id' => $usid,
            'event_id' => $id,
        ]);
        $user = User::find($usid);
        $event = Event::find($id);
        return view('parts.partisucc', ['event' => $event, 'user' => $user]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('parts.eventeditor', ['event' => $event]);
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
        $event = Event::find($id);
        //$event->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        App\Event::destroy($id);
    }
}
