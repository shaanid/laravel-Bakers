@extends('user.layout')
@section('content')
    <style>
        th,
        td {
            padding: 15px;
        }
    </style>



    <div class="container card11 py-4">
        <h2 class="pb-3">Checkout</h2>
    </div>





    <form method="POST" action="{{ route('placeorder') }}">
        @csrf
        <div class="container card11 py-4">
            <h4 class="pb-3">Delivery address</h4>
            <div class="row">
                <div class="col">
                    <div class="row align-items-center mt-4">
                        <div class="col-10">
                            <input type="text" name="email" class="form-control" value="{{ auth()->user()->email }}"
                                placeholder="Email">
                        </div>
                    </div>

                    <div class="row align-items-center mt-4">
                        <div class="col-10">
                            <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}"
                                placeholder="Name">
                        </div>
                    </div>

                    <div class="row align-items-center mt-4">
                        <div class="col-10">
                            <textarea name="address" class="form-control" placeholder="Address">{{ auth()->user()->address }}</textarea>
                        </div>
                    </div>
                    <div class="row align-items-center mt-4">
                        <div class="col-10">
                            <input type="text" name="state" class="form-control" value="{{ auth()->user()->state }}"
                                placeholder="State">
                        </div>
                    </div>
                    <div class="row align-items-center mt-4">
                        <div class="col-10">

                            <input type="tel" name="phone" class="form-control" value="{{ auth()->user()->phone }}"
                                placeholder="Phone">
                        </div>
                    </div>
                </div>











                <div class="col">
                    <table class="w-100">
                        <h4 class="pb-3"> Order Summary</h4>
                        <thead style="border-bottom: 2px solid #6c6c6c;">


                            <tr>
                                <th style="width: 20%">Product</th>
                                <th style="width: 50%"></th>
                                <th style="width: 10%">Price</th>
                                <th style="width: 10%">Quantity</th>
                                <th style="width: 10%">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($carts as $cart)
                                @if ($cart->categorycake)
                                    <tr>
                                        <td><img src="{{ asset('storage/images/' . $cart->categorycake->image) }}"
                                                class="card-img-top" alt="..."></td>
                                        <td>{{ $cart->categorycake->name }}</td>
                                        <td>{{ $cart->categorycake->price }}</td>
                                        <td>{{ $cart->quantity }}</td>
                                        <td>{{ $cart->categorycake->price * $cart->quantity }}</td>
                                        @php
                                            $total += $cart->categorycake->price * $cart->quantity;
                                        @endphp
                                    </tr>
                                @elseif($cart->categorypastry)
                                    <tr>
                                        <td><img src="{{ asset('storage/images/' . $cart->categorypastry->image) }}"
                                                class="card-img-top" alt="..."></td>
                                        <td>{{ $cart->categorypastry->name }}</td>
                                        <td>{{ $cart->categorypastry->price }}</td>
                                        <td>{{ $cart->quantity }}</td>
                                        <td>{{ $cart->categorypastry->price * $cart->quantity }}</td>
                                        @php
                                            $total += $cart->categorypastry->price * $cart->quantity;
                                        @endphp
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                        <tfoot style="border-top: 2px solid #6c6c6c;">
                            <tr>
                                <th style="width: 20%"></th>
                                <th style="width: 50%"></th>
                                <th style="width: 10%"></th>
                                <td style="width: 10%">Total</td>
                                <th style="width: 10%">{{ $total }}</th>
                            </tr>
                        </tfoot>
                    </table>
                    @if (count($carts) != 0)
                    <div class="text-end">
                        <button type="submit" class="btn btn-warning px-5 text-black">Place your order</a>
                    </div>
                @endif
                </div>



    </form>




    {{-- <div class="container card11 py-4">
        <div class="row">
        <div class="col-6">

            <br>

        </div></div></div>




    <div class="container card11 py-4">
        <div class="row">
        <div class="col-6">


        </div></div></div> --}}
@endsection
