<?php

namespace App\Http\Controllers;

use App\Models\postforum;
use App\Models\replycomment;
use Illuminate\Http\Request;

class PostforumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('isiforum', [
            "postforum"=>postforum::all(),
            "replycomment"=>replycomment::all(),
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
    public function store1(Request $request)
    {
        $validateData=$request->validate([
            'post'=>'required',
        ]);
        postforum::create($validateData);
        return redirect('/isiforum');
        //
    }

    public function store2(Request $request)
    {
    $validateData=$request->validate([
        'reply'=>'required',
    ]);
    replycomment::create($validateData);
    return redirect('/isiforum');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\postforum  $postforum
     * @return \Illuminate\Http\Response
     */
    public function show(postforum $postforum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\postforum  $postforum
     * @return \Illuminate\Http\Response
     */
    public function edit(postforum $postforum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\postforum  $postforum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, postforum $postforum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\postforum  $postforum
     * @return \Illuminate\Http\Response
     */
    public function destroy(postforum $postforum)
    {
        //
    }
}
