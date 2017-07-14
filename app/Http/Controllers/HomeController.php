<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
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

        return view('home.index', ['dogs' => $dogs]);
    }
}
