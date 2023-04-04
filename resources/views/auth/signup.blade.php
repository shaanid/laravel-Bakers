<html>
    <head><title>signup</title>
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <body>

        {{-- signup form --}}



        <div class="container sign">
            <h1>Signup</h1>
        </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div><br/>
        @endif
        <form method="POST" action="{{ route('authstore') }}">
        @csrf
        <div class="container sign1">
        <div class="row align-items-center mt-4">
            <div class="col-8">
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="row align-items-center mt-4">
            <div class="col-8">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="row align-items-center mt-4">
            <div class="col-8">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>

        <div class="row align-items-center mt-4">
            <div class="col-8">
                <textarea name="address" class="form-control" placeholder="Address"></textarea>
            </div>
        </div>
        <div class="row align-items-center mt-4">
            <div class="col-8">
                <input type="text" name="state" class="form-control" placeholder="State">
            </div>
        </div>
        <div class="row align-items-center mt-4">
            <div class="col-8">

                <input type="tel" name="phone" class="form-control"
                    placeholder="Phone">
            </div>
        </div><br>
        <button type="submit" class="btn btn-primary">signup</button>

        <p class="text-muted mt-5 mb-0 membertext">Have already an account? <a href={{route('login')}}
            class="fw-bold text-body"><u>Login here</u></a></p>
        </form>
        </div>







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
