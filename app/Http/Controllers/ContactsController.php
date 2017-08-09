<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;
use App\Mail\FeedbackMail;

class ContactsController extends Controller
{
    public function viewContacts(){
        return view('about.contacts');
    }
    public function getData(Request $request){
        $data = $request->except('_token');
        $validaror = Validator::make($data, [
            'theme'=>'required|in:1,2,3,4,5,6,7,8',
            'name'=>'required|between:2,100',
            'contacts' =>'required|max:150',
            'message'=>'required'
        ]);
        if($validaror->fails()){
            return redirect()->back()->withErrors($validaror)->withInput();
        }
        Mail::to('lol@mail.ru')->send(new FeedbackMail($data));
        return redirect()->back()->with(['status'=>'Сообщение успешно отправлено.']);


    }
}
