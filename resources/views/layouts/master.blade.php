<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    {{-- meta tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
 
     <!-- Styles -->
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    
    <!-- Footer -->
<footer class="page-footer font-small indigo">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">
    
          <!-- Grid row -->
          <div class="row">
    
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
    
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
    
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Very long link 1</a>
                </li>
                <li>
                  <a href="#!">Very long link 2</a>
                </li>
                <li>
                  <a href="#!">Very long link 3</a>
                </li>
                <li>
                  <a href="#!">Very long link 4</a>
                </li>
              </ul>
    
            </div>
            <!-- Grid column -->
    
            <hr class="clearfix w-100 d-md-none">
    
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
    
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
    
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
    
            </div>
            <!-- Grid column -->
    
            <hr class="clearfix w-100 d-md-none">
    
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
    
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
    
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
    
            </div>
            <!-- Grid column -->
    
            <hr class="clearfix w-100 d-md-none">
    
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
    
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
    
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
    
            </div>
            <!-- Grid column -->
    
          </div>
          <!-- Grid row -->
    
        </div>
        <!-- Footer Links -->
    
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    
      </footer>
      <!-- Footer -->   
</body>

{{-- Scripts --}}
<script src="{{ asset('js/jquery.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script>
