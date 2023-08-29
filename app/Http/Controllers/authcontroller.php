<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

use Illuminate\Support\Facades\Hash;

class authcontroller extends Controller
{
    public function signup(){
        return view('auth.signup');
    }

    public function login(){
        return view('auth.login');
    }

    public function authstore(Request $request){

        // dd($request);

        $authdetails=User::create([
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'name'=>$request->name,
            'address'=>$request->address,
            'state'=>$request->state,
            'phone'=>$request->phone,
        ]);


            return redirect()->route('login');

        }


        public function dologin(Request $request)
        {
            $input = $request->all();
            $this->validate($request,[
                'name' => 'required',
                'password' => 'required',
            ]);

            if(auth()->attempt(array('name' =>$input['name'], 'password' => $input['password']))){
                if(auth()->user()->role == 1){
                    return redirect()->route('dashboard');
                }else{
                    return redirect()->route('home');
                }
            }else{
                return redirect()->route('login')->with('error');
            }
        }


        public function logout(){
            auth()->logout();
            return redirect()->route('login');
          }
}
