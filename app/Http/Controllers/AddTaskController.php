<?php

namespace App\Http\Controllers;

use App\Models\addtask;
use App\Models\donetask;
use App\Models\tasktodo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\view\view;

class AddTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        // return view('listmytask', [
        //     "addtask"=>addtask::all(),
        //     "tasktodo"=>tasktodo::all(),

        // ]);
        // Get the logged-in user's ID
        $userId = Auth::user()->id;

        // Retrieve tasks based on the user ID
        $addtask = \App\Models\addtask::where('userid', $userId)->get();
        $tasktodo = \App\Models\tasktodo::where('userid', $userId)->get();

        // Pass the tasks to the view for display
       // return view('listmytask', ['addtask' =>$addtask]);
        //return view('listmytask', ['tasktodo' =>$tasktodo]);
        return view('listmytask', compact('addtask', 'tasktodo'));


        //
    }

    public function __construct()
    {
        $this->middleware('auth');
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
    public function add1()
    {
        return view('addmytask');
        //
    }
    public function add2()
    {
        return view('addmytasktodo');
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
            'userid' => 'required',
        ]);
        addtask::create($validateData);
        return redirect('/listmytask/{userid}');

        //
    }
    public function store2(Request $request)
    {
        $validateData=$request->validate([
            'taskname'=>'required',
            'taskdescription'=>'required',
            'userid' => 'required',
        ]);
        donetask::create($validateData);
        return redirect('/history/{userid}');

        //
    }
    public function store3(Request $request)
    {
        $validateData=$request->validate([
            'nametodo'=>'required',
            'descriptiontodo'=>'required',
            'deadlinetodo'=>'required',
            'userid' => 'required',
        ]);
        tasktodo::create($validateData);
        return redirect('/listmytask/{userid}');

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
