<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function viewForm(){
        return view('volunteer.become-volunteer');
    }
}
