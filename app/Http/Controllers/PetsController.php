<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function petList(){
        return view('pets.pet-list');
    }

    public function viewPet(){
        return view('pets.dog');
    }
}
