<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AdminDogController extends Controller
{
    public function index(){
        return view('admin.dog.add-dog');
    }

    public function getData(Request $request){
        $data = $request->except('_token');
        $data['slug'] = str_slug($request->get('name'));

        DB::table('dogs')->insert($data);
        return redirect()->back();
    }

}
