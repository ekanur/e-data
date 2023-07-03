<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/front.css')) }}" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>E-DATA | FEB Universitas Negeri Malang</title>
    </head>

    <body style="background-color: #F5F5F9;">
    <!-- navbar+header  -->
    <div class="m-0 me-0 p-2 bg-image" style="background-image: url({{asset('assets/img/front/header.png')}})">
    <nav class="navbar navbar-expand-lg navbar-light bg-light m-4 rounded">
        {{-- <div class="container-fluid">
            <a href="{{url('/')}}" class="app-brand-link">
              <span class="app-brand-logo demo">
                @include('_partials.macros',["width"=>25,"withbg"=>'#696cff'])
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">{{config('variables.templateName')}}</span>
            </a>
        </div> --}}
        <div class="container-fluid">
          <a class="navbar-brand" href="#">edata</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active text-primary' : '' }}" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('e-data') ? 'active text-primary' : '' }}" href="{{ route('e-data') }}">E-Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('about-us') ? 'active text-primary' : '' }}" href="{{ route('about-us') }}">About Us</a>
              </li>
            </ul>
            <form>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                    </svg>
                </span>
                <input type="text" class="form-control" placeholder="Serach document" aria-label="Input group example" aria-describedby="basic-addon1">
              </div>
            </div>
            </form>
            <button class="btn btn-primary me-2  ms-2" type="submit">Login</button>
          </div>
        </div>
      </nav>
    </div>
    <!-- / navbar+header  -->

    <!-- content -->
    @yield('content')

    <!-- / content -->


    <!-- Footer  -->
        <footer class="footer bg-white d-flex justify-content-center align-items-center p-1" style="position: fixed; bottom: 0; width: 100%;">
            <span class="fs-8 fw-lighter">Copyright © 2023 - Developed with Laravel</span>
        </footer>
    <!--/ Footer  -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
