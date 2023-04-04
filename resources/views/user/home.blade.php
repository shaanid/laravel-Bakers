@extends('user.layout')
@section('content')


          {{-- CAROUSEL --}}


          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active image1">
                <img src="/image/b.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Sweets</h5>
                  <p>"Sweets are the smiles of nature. Whenever you indulge in a treat, it's like nature is smiling at you."</p>
                </div>
              </div>
              <div class="carousel-item image1">
                <img src="/image/a.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-black">
                  <h5>Candies</h5>
                  <p>"Candies are not just about sugar. They're about spreading sweetness."</p>
                </div>
              </div>
              <div class="carousel-item image1">
                <img src="/image/cake6.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-black">
                  <h5>Desserts</h5>
                  <p>"Desserts are the fairy tales of the kitchen, a happily-ever-after to supper."</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>



              {{-- details --}}


              <div class="container overflow-hidden text-center">
                <div class="row gx-5">
                  <div class="col">
                   <div class="p-3"><img width="90" height="90" src="/icons/motorbike.png" alt=""><h5>FAST DELIVERY</h5></div>
                  </div>
                  <div class="col">
                    <div class="p-3"><img width="90" height="90" src="/icons/free.png" alt=""><h5>FREE SHIPPING</h5></div>
                  </div>
                  <div class="col">
                    <div class="p-3"><img width="90" height="90" src="/icons/credit-card.png" alt=""><h5>SAFE PAYMENT</h5></div>
                   </div>
                   <div class="col">
                    <div class="p-3"><img width="90" height="90" src="/icons/new-product.png" alt=""><h5>NEW PRODUCTS</h5></div>
                   </div>
                </div>
              </div>


              {{-- company --}}

              <div class="container">
                <h2>Bakers_</h2>
                <p class="text1">Welcome to bakers, where we take pride in offering the most delectable treats
                   that will satisfy your sweet tooth and make your taste buds dance with joy.
                   As soon as you walk into our bakery, the delightful aroma of freshly baked goods
                   will greet you, enticing you to explore all the delicious options we have to offer.
                   From the softest croissants to the flakiest pastries, our bakers use
                  only the finest ingredients to ensure that each and every one of our products
                   is a true masterpiece.At our bakery, we believe that quality and taste should never be
                   compromised, which is why we use organic ingredients whenever possible. We take pride
                   in our commitment to sustainability and support local farmers and suppliers
                    to ensure that we are doing our part in creating a better world for future generations.</p>
              </div>


                    {{-- cakespic --}}




                              <div class="container-fluid">
                                <div class="row">
                                  <div class="col-6">
                                    <img src="/image/cake3.jpg" class="img-fluid" alt="img" width="200%"; height="30%">
                                  </div>
                                  <div class="col-6 align-self-center"> <h3>Cakes</h3> <p>Cakes are the quintessential
                                    dessert that can bring joy to any occasion. At our bakery, we take pride in creating
                                     the most exquisite cakes that will not only look amazing but taste heavenly too.
                                    Our cakes are baked with the finest ingredients, including real butter, fresh eggs
                                    , and premium quality chocolate, resulting in a rich and indulgent flavor.
                                    Our bakers use their creativity and expertise to craft cakes that are
                                    not only visually stunning but also tailored to your preferences.
                                 </p></div>
                                </div></div></div></div>


                                <div class="container-fluid cake1">
                                  <div class="row">
                                    <div class="col-6 align-self-center"> <h3>Pastry</h3> <p>Pastry is a delicious and versatile baked
                                      good that can be enjoyed on its own or used as a base for a wide variety of desserts.
                                       It is typically made by combining flour, butter, sugar, and eggs to create a flaky and
                                       buttery dough that is then shaped and baked to perfection.

                                      The texture of pastry is one of its most appealing features. The layers of flaky pastry
                                      dough create a delicate and airy texture that is both light and crispy at the same time.
                                      The buttery flavor of the pastry dough is also a major draw, adding richness and depth to
                                       any pastry creation.
                                   </p></div>
                                   <div class="col-6">
                                    <img src="/image/cake4.jpg" class="img-fluid" alt="img" width="200%"; height="30%">
                                  </div>

                                    </div>

                                  </div></div></div></div>




                                  {{-- quotes --}}



                                  <div class="container-fluid" style="background-color: black">
                                    <div class="row">
                                      <div class="col-8">
                                        <h1 class="banner-text">"Chocolate is a gift of love to yourself."</h1>
                                      <h2 class="banner-text1">- Sonja Blumenthal</h2>
                                      </div>
                                      {{-- <div class="col banner-img"> --}}
                                        {{-- <img src="/image/.jpg" alt="image" class="image-responsive banner_img" width="30%" height="auto"> --}}
                                      </div>
                                    </div>
                                  </div>




                                  {{-- message --}}






    <form method="POST" action="{{ route('message') }}">
      @csrf
      <div class="container">
      <div class="row align-items-center mt-4">
        <h4 class="head4 text-black">Get in touch</h4>
          <div class="col msg1">

              <input type="text" name="name" class="form-control" placeholder="Name">
          </div>
      </div>
      <div class="row align-items-center mt-4">
          <div class="col msg1">
              <input type="text" name="email" class="form-control" placeholder="Email">
          </div>
      </div>

      <div class="row align-items-center mt-4">
          <div class="col msg1">
              <textarea name="message" class="form-control" placeholder="Message"></textarea>
          </div>
      </div>
      <br>
      <div class="msg1 text-center">
      <button type="submit" class="btn btn-primary">sent</button>
      </form>
      </div>
  </div></div>






                                  <!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted foot">


  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Bakers
          </h6>
          <p>
            Bakers, the bakery company that brings you the best of freshly
            baked goods with an uncompromising commitment to quality,flavor.
             you will be greeted with the irresistible
            aroma of freshly baked pastries and cakes.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Cakes</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Pastry</a>
          </p>
          <p>
            <a href="#!" class="text-reset">cookies</a>
          </p>
          <p>
            <a href="#!" class="text-reset"></a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> Pattambi</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            bakersinfo@gmail.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 91 7592079681</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> + 91 9946374701</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="">Bakers.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


          @endsection





