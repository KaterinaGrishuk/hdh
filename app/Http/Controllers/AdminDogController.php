<?php

namespace App\Http\Controllers;

use DB;
use App\Dog;
use App\DogsImg;
use Illuminate\Http\Request;
use Illuminate\Routing\Matching\SchemeValidator;
use Validator;

class AdminDogController extends Controller
{
    public function showAdminPage(){
        $dogs = Dog::all();
        return view('admin.admin-page')->with(['dogs'=>$dogs]);
    }

    public function showAddDog(){
        return view('admin.add-dog');
    }

    public function addDog(Request $request){
        $this->validate($request, [
            'name' => 'required|min:2',
            'age' => 'required|numeric|between:1,20',
            'gender' => 'required|in:1,2',
            'color' =>'required|max:100',
            'height' =>'required|numeric|between:1,200',
            'wool' =>'required|max:100',
            'character' =>'required|min:3',
            'vet' =>'required|min:3',
            'information' =>'required|min:3',
        ]);

        $dog = Dog::create($request->except('_token'));
        if($request->hasFile('dog_img')){
            foreach ($request->file('dog_img') as $photo) {
                $pathImg = $photo->store('dogs/' . $dog->slug, 'images');
                $path = \Storage::disk('images')->url($pathImg);
                DogsImg::create(['path' => $path, 'dog_id' => $dog->id]);
            }
        }
        return redirect()->route('pageAdmin')->with(['status'=>'Страница успешно добавлена']);
    }

    public function showEditDog($id){
        $dog = Dog::find($id);
        $oldData = $dog->toArray();
        return view('admin.edit-dog')->with(['oldData'=>$oldData, 'dog'=> $dog]);
    }

    public function editDog(Request $request, $id){
        $dog = Dog::find($id);
        $data = $request->except('_token');
        $validator = Validator::make($data, [
            'name' => 'required|min:2',
            'age' => 'required|numeric|between:1,20',
            'gender' => 'required|in:1,2',
            'color' =>'required|max:100',
            'height' =>'required|numeric|between:1,200',
            'wool' =>'required|max:100',
            'character' =>'required|min:3',
            'vet' =>'required|min:3',
            'information' =>'required|min:3',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        if($request->hasFile('dog_img')){
            foreach ($request->file('dog_img') as $photo){
//                dd($dog->images);
                $pathImg = $photo->store('dogs/' . $dog->slug, 'images');
                $path = \Storage::disk('images')->url($pathImg);
                $image = new DogsImg(['path'=>$path]);
                $dog->images()->save($image);
            }
        }
        $dog->fill($data)->update();
        return redirect()->route('pageAdmin')->with(['status'=>'Страница успешно изменена']);
    }
    public function deleteDog(Request $request){
        $dogId = $request->id;
        $dog = Dog::find($dogId);
        if($dog->images()->delete() && $dog->delete()){
            return redirect()->route('pageAdmin')->with(['status'=>'Страница успешно удалена']);
        }

    }
}

