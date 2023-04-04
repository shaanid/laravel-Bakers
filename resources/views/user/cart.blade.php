{{-- @extends('user.layout')
@section('content')
    </head>

    <body>



        <div class="container card11 py-4">
            <h2 class="pb-3">Cart</h2>
            <div class="row g-3">
                <div class="col-3">
                    @foreach ($carts as $cart)
                        @if ($cart->categorycake)
                            <div class="card past">

                                <img src="{{ asset('storage/images/' . $cart->categorycake->image) }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $cart->categorycake->name }}</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">RS &nbsp;{{ $cart->categorycake->price }}</li>
                                    </ul>
                                @elseif($cart->categorypastry)
                                    <div class="card past">
                                        <img src="{{ asset('storage/images/' . $cart->categorypastry->image) }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $cart->categorypastry->name }}</h5>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">RS &nbsp;{{ $cart->categorypastry->price }}</li>
                                            </ul>
                        @endif


                        <form action="{{route('cartstore',$product->productid)}} " method="POST">
                    @csrf
                    <br>

                        <input type="number" value="1" min="1" class="form-control" style="width: 100px"
                            name="quantity"><br>

                        <input type="submit" class="btn btn-primary" value="Buy now">




                        </form>

                        <a href="{{route('removecart',$cart->id)}} " class="btn btn-danger">Remove</a>

                </div>
            </div>
        </div>
        <div class="col-3">
            @endforeach

        </div>
        </div>
        </div>


        <div class="container" style="border-bottom: 2px solid #6c6c6c;">
        <a href="{{ route('checkout') }}" class="btn btn-primary text-white float-end btn1">PROCEED TO CHECKOUT</a>

    @endsection --}}






    @extends('user.layout')
@section('content')
    <style>
        th,
        td {
            padding: 15px;
        }
    </style>



    <div class="container card11 py-4">
        <h2 class="pb-3">Cart</h2>
        <table class="w-100">
            <thead style="border-bottom: 2px solid #6c6c6c;">
                <tr>
                    <th style="width: 20%">Product</th>
                    <th style="width: 50%"></th>
                    <th style="width: 10%">Price</th>
                    <th style="width: 10%">Quantity</th>
                    <th style="width: 10%">Subtotal</th>
                    <th style="width: 10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0;
                @endphp
                @foreach ($carts as $cart)
                    @if ($cart->categorycake)
                        <tr>
                            <td><img src="{{ asset('storage/images/' . $cart->categorycake->image) }}" class="card-img-top"
                                    alt="..."></td>
                            <td>{{ $cart->categorycake->name }}</td>
                            <td>{{ $cart->categorycake->price }}</td>
                            <td>{{ $cart->quantity }}</td>
                            <td>{{ $cart->categorycake->price * $cart->quantity }}</td>
                            <td><a href="{{route('removecart',$cart->id)}} " class="btn btn-danger">Remove</a></td>
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
                            <td><a href="{{route('removecart',$cart->id)}} " class="btn btn-danger">Remove</a></td>
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
        <div class="text-end">
            <a href="{{ route('checkout') }}" class="btn btn-warning text-black float-end btn1">Proceed to checkout</a>

        </div>
    </div>
@endsection
