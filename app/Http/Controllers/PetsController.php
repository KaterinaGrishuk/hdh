<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function petList(){
        $collection = DB::table('dogs')
            ->leftJoin('dogs_img', 'dogs.id', '=', 'dogs_img.dog_id')
            ->select('dogs.*', 'dogs_img.path')
            ->get()
        ;

        $dogs = collect([]);

        foreach($collection as $dog){
            if(! $dogs->contains('id', $dog->id)){
                $dogs->push($dog);
            }
        }

        return view('pets.pet-list', ['dogs' => $dogs]);
    }

    public function viewPet($pet){
        $pet = DB::table('dogs')->where('slug', $pet)->first();
        $avatar = DB::table('dogs_img')->where('dog_id', $pet->id)->first();
        return view('pets.dog', ['dog' => $pet, 'avatar'=> $avatar]);
    }
}
