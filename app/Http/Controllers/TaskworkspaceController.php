<?php

namespace App\Http\Controllers;

use App\Models\taskworkspace;
use Illuminate\Http\Request;

class TaskworkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('workspace', [
            "taskworkspace"=>taskworkspace::all()
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validateData=$request->validate([
            'Name'=>'required',
            'Description'=>'required',
            'Deadline'=>'required',
            'Member'=>'required',
        ]);
        taskworkspace::create($validateData);
        return redirect('/workspace');
        //
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\taskworkspace  $taskworkspace
     * @return \Illuminate\Http\Response
     */
    public function show(taskworkspace $taskworkspace)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\taskworkspace  $taskworkspace
     * @return \Illuminate\Http\Response
     */
    public function edit(taskworkspace $taskworkspace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\taskworkspace  $taskworkspace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, taskworkspace $taskworkspace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\taskworkspace  $taskworkspace
     * @return \Illuminate\Http\Response
     */
    public function destroy(taskworkspace $taskworkspace)
    {
        //
    }
}
