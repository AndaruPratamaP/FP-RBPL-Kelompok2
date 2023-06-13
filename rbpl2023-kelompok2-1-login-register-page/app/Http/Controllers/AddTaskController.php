<?php

namespace App\Http\Controllers;

use App\Models\addtask;
use App\Models\donetask;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AddTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        return view('listmytask', [
            "addtask"=>addtask::all()
        ]);

        //
    }

    public function index2()
    {
        $donetask = Donetask::all();

    return view('history')->with('donetask', $donetask);

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('addmytask');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        $validateData=$request->validate([
            'TaskName'=>'required',
            'TaskDescription'=>'required',
            'Deadline'=>'required',
        ]);
        addtask::create($validateData);
        return redirect('/listmytask');

        //
    }
    public function store2(Request $request)
    {
        $validateData=$request->validate([
            'taskname'=>'required',
            'taskdescription'=>'required',
        ]);
        donetask::create($validateData);
        return redirect('/history');

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
