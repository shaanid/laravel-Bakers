<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;
use App\Models\order;
use App\Models\order_details;
use App\Models\categorycake;
use App\Models\user;
use App\Models\categorypastry;
use Illuminate\Support\Facades\Auth;

class admincontroller extends Controller
{
    public function dashboard()
    {
        return view('admin.adminhome');
    }

    public function msg()
    {
        $details = message::all();
        return view('admin.message', compact('details'));
    }


    // show orders

    public function showorder()
    {
        $orders = order::all()->toArray();

        foreach ($orders as $j => $order) {
            $order_details = order_details::where('order_id', $order['order_id'])->get();

            foreach ($order_details as $k => $item) {
                if ($item->cake_id) {
                    $cake = categorycake::where('cakeid', $item->cake_id)->first();
                    $orders[$j]['products'][$k] = [
                        'image' => $cake->image,
                        'name' => $cake->name,
                        'price' => $item->price,
                        'qty' => $item->quantity
                    ];
                }
                if ($item->pastry_id) {
                    $pastry = categorypastry::where('pastryid', $item->pastry_id)->first();
                    $orders[$j]['products'][$k] = [
                        'image' => $pastry->image,
                        'name' => $pastry->name,
                        'price' => $item->price,
                        'qty' => $item->quantity
                    ];
                }
            }
        }
        // return response()->json($orders);

        return view('admin.showorders', compact('orders'));
    }

    //end show orders


    public function customers(){
        $customers=user::where('id','>',1)->get();
        return view('admin.customers',compact('customers'));
    }

    //show products

    public function product1(){
        $showproducts = categorycake::all();
        $showproducts = categorycake::paginate(4);
        return view('admin.product1',compact('showproducts'));
    }

    public function product2(){
        $showproducts = categorypastry::all();
        $showproducts = categorypastry::paginate(4);
        return view('admin.product2',compact('showproducts'));
    }



    public function removepastry($id){
        $showproducts = categorypastry::find($id);
        $showproducts->delete();
        return redirect()->route('product2');
    }

    public function removecake($id){
        $showproducts = categorycake::find($id);
        $showproducts->delete();
        return redirect()->route('product1');
    }


}
