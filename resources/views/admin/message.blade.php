@extends('admin.layout')
@section('content')


<table class="table table-striped">
    <thead>
        <tr>

          <td>Name</td>
          <td>Email</td>
          <td>Message</td>

          {{-- <td colspan="2">Action</td> --}}
        </tr>
    </thead>
    <tbody>
        @foreach($details as $detail)
    <tr>

            <td> {{ $detail->name }}</td>
            <td>{{ $detail->email}}</td>
            <td>{{ $detail->message}}</td>

    </tr>
@endforeach
    </tbody>
  </table>









@endsection
