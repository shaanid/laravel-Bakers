@extends('admin.layout')
@section('content')
    <style>
        th,
        td {
            padding: 15px;
        }
    </style>

    <body>
        <div class="container card11 py-4">
            <h2 class="pb-3">Orders List</h2>
            <table class="w-100" cellspacing="20">
                <thead style="border-bottom: 2px solid #6c6c6c;">
                    <tr>
                        <th style="width: 10%">Order ID</th>

                        <th style="width: 50%">Products</th>
                        <th style="width: 10%">Cutomer</th>
                        <th style="width: 10%">quantity</th>
                        {{-- <th style="width: 10%">Status</th> --}}
                        <th style="width: 10%">Total Price</th>
                        <th style="width: 10%"></th>
                    </tr>
                </thead>
                <tbody style="border-bottom: 2px solid #6c6c6c;">
                    @if (count($orders) == 0)
                        <tr class="text-center">
                            <td colspan="3">
                                <h4 class="py-3">
                                    No orders yet!
                                </h4>
                            </td>
                        </tr>
                    @else
                        @foreach ($orders as $order)
                            <tr>
                                <th style="vertical-align: top;">{{ $order['order_id'] }}</th>
                                <td>
                                    <table class="w-100">
                                        @foreach ($order['products'] as $item)
                                            <tr>

                                                <td width="10%"><img src="{{ asset('storage/images/' . $item['image']) }}"
                                                        style="height: 50px; width: 50px; object-fit: cover;"></td>
                                                <td width="60">{{ $item['name'] }}</td>

                                                {{-- <td width="30" class="text-center">{{ $item['qty'] }} x ₹ {{ $item['price'] }}</td> --}}
                                                {{-- <td width="60" class="text-center">{{ $item['qty'] }}</td> --}}

                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td width="10"></td>
                                            <td width="60"></td>
                                            {{-- <td width="30" class="text-center" style="border-top: 2px solid #6c6c6c; border-bottom: 2px solid #6c6c6c;">₹ 2000</td> --}}
                                        </tr>
                                    </table>
                                </td>
                                <th style="vertical-align: top;">{{ $order['user_id'] }}</th>
                                <td style="vertical-align: top;">{{ $item['qty'] }}</td>

                                <td style="vertical-align: top;">{{ $order['total_price'] }}</td>

                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </body>
@endsection
