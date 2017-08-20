<?php

namespace App\Http\Controllers;

use App\DogsImg;
use DB;
use App\Dog;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function petList(){

        $dogs = Dog::with('images');

        if($gender = \Request::get('gender')){
            $dogs=$dogs->where('gender', $gender);
        }

        $dogs=$dogs->paginate(12);
        return view('pets.pet-list', ['dogs' => $dogs, 'controller'=>$this]);
    }

    public function viewPet($pet){
        $pet = Dog::where('slug', $pet)->first();

        return view('pets.dog', ['dog' => $pet, 'controller'=>$this]);
    }

    public function makeYears($num){
        $num = $num % 100;
        if ($num > 19) {
            $num = $num % 10;
        }
        switch ($num) {
            case 1: {
                return("год");
            }
            case 2: case 3: case 4: {
            return("года");
        }
            default: {
                return("лет");
            }
        }
    }
}
