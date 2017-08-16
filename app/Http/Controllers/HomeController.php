<?php

namespace App\Http\Controllers;
use App\Dog;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dogs = Dog::with('images')->limit(15)->get();
        $user = \Auth::user();

        return view('home.index', ['dogs' => $dogs, 'user'=>$user]);
    }
}
