<?php

namespace App\Http\Controllers;

use App\Models\workspace;
use App\Models\taskworkspace;
use Illuminate\Http\Request;

class TrackgressController extends Controller
{
    public function index()
    {
        return view('trackgress', [
            "workspace"=>workspace::all(),

        ]);
        //
    }
}
