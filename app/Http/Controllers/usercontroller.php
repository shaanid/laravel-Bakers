<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class usercontroller extends Controller
{
    public function home(){
        return view('user.home');
    }


    public function message(Request $request){
        $details=message::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message]);
            return redirect()->route('home');

        }





}
