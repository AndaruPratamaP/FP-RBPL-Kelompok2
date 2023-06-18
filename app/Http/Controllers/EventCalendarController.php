<?php

namespace App\Http\Controllers;

use App\Models\event_calendar;
use Illuminate\Http\Request;

class EventCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('calendar', [
    //         "events"=>event_calendar::all()
    //     ]);
    //     //
    // }
    public function index()
    {
        return view('calendar', [
            "events2"=>event_calendar::all()
        ]);
        //
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'ename'=>'required',
            'edate'=>'required',
            'edesc'=>'required',
        ]);
        event_calendar::create($validateData);
        return redirect('/calendar');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\event_calendar  $event_calendar
     * @return \Illuminate\Http\Response
     */
    public function show(event_calendar $event_calendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\event_calendar  $event_calendar
     * @return \Illuminate\Http\Response
     */
    public function edit(event_calendar $event_calendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\event_calendar  $event_calendar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, event_calendar $event_calendar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\event_calendar  $event_calendar
     * @return \Illuminate\Http\Response
     */
    public function destroy(event_calendar $event_calendar)
    {
        //
    }
}
