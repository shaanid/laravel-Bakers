@extends('user.layout')
@section('content')




{{-- carousel --}}



{{-- <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active image1">
        <img src="/image/pastry2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item image1">
        <img src="/image/pastry1.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> --}}




                     {{-- pastry --}}

                     <div class="container head1">
                        <h2>Pastry</h2>
                      </div>


                      {{--  --}}


                        {{-- cake cards --}}



                     <div class="container card1">
                        <div class="row">
                            <div class="col-3">
                                @foreach($pastries as $pastry)
                                <div class="card past" style="width: 18rem;">
                            <img src="{{ asset('storage/images/' .$pastry->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$pastry->name}}</h5>
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item itemrs">₹ &nbsp;{{$pastry->price}}</li></ul>
                                &nbsp;&nbsp;
                                <form action="{{route('pastrycart',$pastry->pastryid)}} " method="POST">
                                    @csrf
                              <input type="number"  value="1" min="1" class="form-control" style="width: 100px" name="quantity"><br>
                                    <input type="hidden" name="price" value="{{$pastry->price}}">
                                <input type="submit" class="btn btn-warning w-100" value="ADD CART">

                                {{-- <a href="#" class="btn btn-primary">BUY NOW</a> --}}
                                 </form>
                            </div>
                          </div></div>
                          <div class="col-3">

                          @endforeach
                        </div></div></div>














@endsection
