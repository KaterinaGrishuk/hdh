<?php

namespace App\Http\Controllers;

use DB;
use App\Dog;
use App\DogsImg;
use Illuminate\Http\Request;

class AdminDogController extends Controller
{

    public function index(){
        return view('admin.dog.add-dog');
    }

    public function getData(Request $request){
        $this->validate($request, [
            'name' => 'required|min:2',
            'age' => 'required|numeric|between:1,20',
            'gender' => 'required|in:1,2',
            'color' =>'required|min:3',
            'height' =>'required|numeric|between:1,200',
            'wool' =>'required|min:3',
            'character' =>'required|min:5',
            'vet' =>'required|min:5',
            'information' =>'required|min:5',
        ]);

        $dog = Dog::create($request->except('_token'));
        if($request->hasFile('dog_img')){
            foreach ($request->file('dog_img') as $photo) {
                $pathImg = $photo->store('dogs/' . $dog->slug, 'images');
                $path = \Storage::disk('images')->url($pathImg);
                DogsImg::create(['path' => $path, 'dog_id' => $dog->id]);
            }
        }
        return redirect()->back();
    }

}

