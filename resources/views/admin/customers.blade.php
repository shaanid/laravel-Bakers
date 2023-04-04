@extends('admin.layout')
@section('content')
    <style>
        th,
        td {
            padding: 15px;
        }
    </style>

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Email</td>
          <td>Name</td>
          <td>Address</td>
          <td>Phone</td>
          {{-- <td colspan="2">Action</td> --}}
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->phone}}</td>

              </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
