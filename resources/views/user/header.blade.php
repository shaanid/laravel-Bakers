<body>


    {{-- NAVBAR --}}

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="/image/log.png" width="55%"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href={{route('home')}}>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('cake')}}>Cakes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href={{route('pastry')}}>Pastry</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link"  href={{route('signup')}}>Signup</a>
              </li> --}}
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href={{route('cart')}}>Cart</a></li>
                  <li><a class="dropdown-item" href="{{ route('orders') }}">Your Orders</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{ route('logout')}}">Sign out</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav>
</body>
