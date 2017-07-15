<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function viewAbout(){
        return view('about.about');
    }
    public function viewFeedback(){
        return view('about.feedback');
    }
}
