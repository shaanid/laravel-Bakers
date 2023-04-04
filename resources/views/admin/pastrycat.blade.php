
@extends('admin.layout')
@section('content')

        {{-- signup form --}}



        <h1>Pastry</h1>
<br>
<br>
                    @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                   @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                     @endforeach
                      </ul>
                      </div><br/>
                     @endif
                    <form method="POST" action="{{ route('pastrystore') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="container">




                        <div class="mb-3">

                            <input class="form-control" type="file" id="formFileMultiple" multiple name="image">
                          </div>

                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="row align-items-center mt-4">
                            <div class="col">
                                <input type="number" name="price" class="form-control" placeholder="Price">
                            </div>
                        </div>







                        <br>
                        <button type="submit" class="btn btn-primary">ADD</button>
                    </form>
                </div>


        @endsection
