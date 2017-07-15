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
            'color' =>'required|min:5',
            'height' =>'required|numeric|between:1,200',
            'wool' =>'required|min:5',
            'character' =>'required|min:5',
            'vet' =>'required|min:5',
            'information' =>'required|min:5',
        ]);
        Dog::create($request->except('_token'));

        return redirect()->back();
    }

}
