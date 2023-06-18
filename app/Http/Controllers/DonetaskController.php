<?php

namespace App\Http\Controllers;

use App\Models\donetask;
use Illuminate\Http\Request;

class DonetaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\donetask  $donetask
     * @return \Illuminate\Http\Response
     */
    public function show(donetask $donetask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donetask  $donetask
     * @return \Illuminate\Http\Response
     */
    public function edit(donetask $donetask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donetask  $donetask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, donetask $donetask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donetask  $donetask
     * @return \Illuminate\Http\Response
     */
    public function destroy(donetask $donetask)
    {
        //
    }
}
