<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order;
use App\Models\order_details;
use App\Models\categorycake;
use App\Models\categorypastry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartcontroller extends Controller
{
    public function cart()
    {
        $carts = cart::where('user_id', Auth::id())->get();
        // return $carts;

        return view('user.cart', compact('carts'));
    }

    public function cakecart(Request $request)
    {
        // dd($request);
        // return response()->json($request);


        $cart = new Cart;
        $cart->user_id = Auth::id();
        $cart->cake_id = $request->cakeid;
        $cart->quantity = $request->quantity;
        $cart->save();
        return redirect()->route('cake');
    }

    public function pastrycart(Request $request)
    {
        // dd($request);
        // return response()->json($request);


        $cart = new Cart;
        $cart->user_id = Auth::id();
        $cart->pastry_id = $request->pastryid;
        $cart->quantity = $request->quantity;
        $cart->save();
        return redirect()->route('pastry');
    }




    public function removecart($id)
    {
        $carts = cart::find($id);
        $carts->delete();
        return redirect()->route('cart');
    }


    public function checkout()
    {
        $carts = cart::where('user_id', Auth::id())->get();
        return view('user.checkout', compact('carts'));
    }

    public function success(){
        return view('user.ordersuccess');
    }

    public function placeorder(Request $request)
    {
        $cart = cart::where('user_id', Auth::id());

        if ($cart->count() == 0) {
            return redirect('home');
        }

        $sum_qty = cart::where('user_id', Auth::id())->selectRaw('SUM(quantity) as qty')->first();

        $orders = new order;
        $orders->user_id = Auth::id();
        $orders->status = 'Open';
        $orders->total_price = 0;
        $orders->total_quantity = $sum_qty->qty;

        $orders->delivery_email = $request->email;
        $orders->delivery_name = $request->name;
        $orders->delivery_address = $request->address;
        $orders->delivery_state = $request->state;
        $orders->delivery_phone = $request->phone;
        $orders->save();

        $order_id = $orders->id;

        $total_price = 0;
        foreach ($cart->get() as $k => $cart_item) {
            $order_details = new order_details;
            $order_details->order_id = $order_id;

            if ($cart_item->cake_id) {
                $cake = categorycake::find($cart_item->cake_id)->first();
                $order_details->price = $cake->price;
                $total_price += $cake->price;
            } else {
                $pastry = categorypastry::find($cart_item->pastry_id)->first();
                $order_details->price = $pastry->price;
                $total_price += $pastry->price;
            }

            $order_details->cake_id = $cart_item->cake_id;
            $order_details->pastry_id = $cart_item->pastry_id;
            $order_details->quantity = $cart_item->quantity;
            $order_details->save();
        }

        $cart->delete();

        $orders = order::where('order_id', $order_id)->update(['total_price' => $total_price]);

        return redirect('success');
    }

    public function orders()
    {
        $orders = order::where('user_id', Auth::id())->get()->toArray();

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

        return view('user.orders', compact('orders'));
    }
}
