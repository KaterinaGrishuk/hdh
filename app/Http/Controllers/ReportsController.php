<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function viewReports(){
        return view('reports.reports');
    }
}
