<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function viewTimetable(){
        return view('volunteer.timetable');
    }
    public function saveTimetable(Request $request){
        dd($request->get('user_name'));
    }
}
