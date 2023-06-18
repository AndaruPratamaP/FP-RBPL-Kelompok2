<?php

namespace App\Http\Controllers;

use App\Models\workspace;
use App\Models\taskworkspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\view\view;

class WorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        // return view('dashboardworkspace', [
        //     "workspace"=>workspace::all()
        // ]);
        //
        $userId = Auth::user()->id;

        // Retrieve tasks based on the user ID
        $workspace = \App\Models\workspace::where('userid', $userId)->get();


        // Pass the tasks to the view for display
       // return view('listmytask', ['addtask' =>$addtask]);
        //return view('listmytask', ['tasktodo' =>$tasktodo]);
        return view('dashboardworkspace', ['workspace' =>$workspace]);

    }

    public function index2()
    {
        return view('workspace', [
            "workspace"=>workspace::all(),
            "taskworkspace"=>taskworkspace::all(),
        ]);
        //
    }

    // public function index2($id)
    // {
    //     return view('workspace', [
    //         "workspaces"=>workspace::find($id),
    //         "taskworkspace"=>taskworkspace::all(),
    //     ]);
    //     //
    // }



    // public function index3()
    // {
    //     return view('history', [
    //         "taskworkspace"=>taskworkspace::all(),
    //     ]);
    //     //
    // }

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
    public function store1(Request $request)
    {
        $validateData=$request->validate([
            'Name'=>'required',
            'Description'=>'required',
            'Deadline'=>'required',
            'Member'=>'required',
            'userid' => 'required'
        ]);
        workspace::create($validateData);
        return redirect('/dashboardworkspace/{userid}');
        //
    }

    public function store2(Request $request)
    {
        $validateData=$request->validate([
            'Name'=>'required',
            'Description'=>'required',
            'Deadline'=>'required',
            'Member'=>'required',
            'userid' => 'required'
        ]);
        taskworkspace::create($validateData);
        return redirect('/dashboardworkspace/{userid}');
        //
    }

    // public function store3(Request $request)
    // {
    //     $selectedData=$request->input(
    //         'done',[]);

    //     donetask::create($selectedData);
    //     return redirect('/workspace');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function show1(workspace $workspace)
    {
        return view('formworkspace');
        //
    }
    public function show2(workspace $workspace)
    {
        return view('formtaskworkspace');
        //
    }

    public function show3($workspaceId)
    {
    $selectedWorkspace = workspace::find($workspaceId);

    return view('workspace', [
        "workspace" => [$selectedWorkspace], // Wrap the selected workspace in an array
        "taskworkspace" => taskworkspace::all(),
    ]);
    return view('formtaskworkspace', [
        "workspace" => [$selectedWorkspace], // Wrap the selected workspace in an array
        "taskworkspace" => taskworkspace::all(),
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function edit(workspace $workspace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, workspace $workspace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\workspace  $workspace
     * @return \Illuminate\Http\Response
     */
    public function destroy(workspace $workspace)
    {
        //
    }
}
