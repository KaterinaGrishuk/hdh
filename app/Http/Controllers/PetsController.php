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

        return view('pets.pet-list', ['dogs' => $dogs, 'controller'=>$this]);
    }

    public function viewPet($pet){
        $pet = DB::table('dogs')->where('slug', $pet)->first();
        $avatar = DB::table('dogs_img')->where('dog_id', $pet->id)->first();
        $album = DB::table('dogs_img')->where('dog_id', $pet->id)->get();
        //dd($album);
        return view('pets.dog', ['dog' => $pet, 'avatar'=> $avatar, 'album'=>$album, 'controller'=>$this]);
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
