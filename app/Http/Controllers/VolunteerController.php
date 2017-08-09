<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;
use App\Mail\TestMail;
class VolunteerController extends Controller
{
    public function viewForm(){
        return view('volunteer.become-volunteer');
    }
    public function getData(Request $request){
        $data=$request->except(['_token']);
        $validator = Validator::make($data, [
            'name'=>'required|between:2,100',
            'age'=>'required|numeric|max:120',
            'city' => 'max:50',
            'phone' => 'required',
//            'mail'=> 'email',
            'activities'=>'required',
//            'about'=>''
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
//        Mail::send('email.email', ['data'=>$data], function($message){
//            $message->from('lol@mail.ru');
//            $message->to('palletsbel@gmail.com')->subject('LOL');
//        });
            $sendMail = Mail::to('lol@mail.ru')->send(new TestMail($data));
//        if($sendMail){
            return redirect()->back()->with(['status'=>'Анкета успешно отправлена.']);
//        }
    }
}
