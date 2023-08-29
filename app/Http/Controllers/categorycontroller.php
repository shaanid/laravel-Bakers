<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorycake;
use App\Models\categorypastry;

class categorycontroller extends Controller
{
    public function catcake(){
        return view('admin.cakecat');
    }

    public function catpastry(){
        return view('admin.pastrycat');
    }


    public function cake(){
        $cakes=categorycake::all();
        return view('user.cake',compact('cakes'));
    }


    public function cakestore(Request $request){


        $input = [
            'name'=>$request->name,
            'price'=>$request->price,
            ];

            if(request()->hasFile('image')){
                $extension = request('image')->extension();
                $filename = 'cake_pic'.time().'.'.$extension;
                request('image')->storeAs('images',$filename);
                $input['image'] = $filename;

            }

            $products=categorycake::create($input);
            return redirect()->route('catcake');
        }

        public function pastry(){
            $pastries=categorypastry::all();
            return view('user.pastry',compact('pastries'));
        }


        public function pastrystore(Request $request){


            $input = [
                'name'=>$request->name,
                'price'=>$request->price,
                ];

                if(request()->hasFile('image')){
                    $extension = request('image')->extension();
                    $filename = 'pastry_pic'.time().'.'.$extension;
                    request('image')->storeAs('public/images',$filename);
                    $input['image'] = $filename;

                }

                $products=categorypastry::create($input);
                return redirect()->route('catpastry');
            }





}
