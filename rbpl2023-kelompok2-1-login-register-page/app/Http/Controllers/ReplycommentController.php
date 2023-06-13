<?php

namespace App\Http\Controllers;

use App\Models\replycomment;
use Illuminate\Http\Request;

class ReplycommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        return view('isiforum', [
            "replycomment"=>replycomment::all()
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        $validateData=$request->validate([
            'reply'=>'required',
        ]);
        postforum::create($validateData);
        return redirect('/isiforum');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\replycomment  $replycomment
     * @return \Illuminate\Http\Response
     */
    public function show(replycomment $replycomment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\replycomment  $replycomment
     * @return \Illuminate\Http\Response
     */
    public function edit(replycomment $replycomment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\replycomment  $replycomment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, replycomment $replycomment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\replycomment  $replycomment
     * @return \Illuminate\Http\Response
     */
    public function destroy(replycomment $replycomment)
    {
        //
    }
}
