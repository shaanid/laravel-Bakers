@extends('admin.layout')
@section('content')



<style>
    th,
    td {
        padding: 15px;
    }
</style>



<div class="container card11 py-4">
    <h2 class="pb-3">Cakes</h2>
    <table class="w-100">
        <thead style="border-bottom: 2px solid #6c6c6c;">
            <tr>
                <th style="width: 20%">Product</th>
                <th style="width: 50%"></th>
                <th style="width: 10%">Price</th>
                {{-- <th style="width: 10%">Quantity</th> --}}
                {{-- <th style="width: 10%">Subtotal</th> --}}
                <th style="width: 10%">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($showproducts as $showproduct)

                    <tr>

                        <td><img src="{{ asset('storage/images/' . $showproduct->image) }}" style="width: 50%" class="card-img-top"
                                alt="..."></td>
                        <td>{{ $showproduct->name }}</td>
                        <td>{{ $showproduct->price }}</td>
                        {{-- <td>{{ $cart->quantity }}</td> --}}
                        {{-- <td>{{ $cart->categorycake->price * $cart->quantity }}</td> --}}
                        <td><a href="{{route('removepastry',$showproduct->pastryid)}} " class="btn btn-danger">Remove</a></td>

                    </tr>

            @endforeach
        </tbody>

    </table>
</div>






{!! $showproducts->withQueryString()->links('pagination::bootstrap-5') !!}







@endsection
