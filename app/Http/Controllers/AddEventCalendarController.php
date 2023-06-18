<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AddEventCalendarController extends Controller
{
    public function index() //Nama method bebas
    {
    	// mengambil data dari table event_calendar
    	$event_calendar = DB::table('event_calendar')->get();

    	// mengirim data event ke view event
    	// return view('calendar',['event_calendar' => $event_calendar]);
        return response()->json(['event_calendar' => $event_calendar]);

    }
    public function store(Request $request)
    {
	// insert data ke table event_calendar
	DB::table('event_calendar')->insert([
		'ename' => $request->event_name,
		'edate' => $request->event_date,
		'edesc' => $request->event_description,
	]);


	// alihkan halaman ke halaman calendar
	return redirect('/calendar');

    }
}

