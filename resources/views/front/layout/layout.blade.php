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
        <nav class="navbar navbar-example navbar-expand-lg bg-light m-3 rounded">
        <div class="container-fluid">
          <a href="{{url('/')}}" class="app-brand-link">
            <span class="app-brand-logo demo">
              @include('_partials.macros',["width"=>25,"withbg"=>'#696cff'])
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">{{config('variables.templateName')}}</span>
          </a>     
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-ex-4">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-ex-4">
            <div class="navbar-nav me-auto">
            <a class="nav-item nav-link active" href="/">Home</a>
            <a class="nav-item nav-link" href="e-data">E-Data</a>
            <a class="nav-item nav-link" href="javascript:void(0)">About Us</a>
            </div>

            <form class="d-flex">
            <div class="input-group">
                <span class="input-group-text"><i class="tf-icons bx bx-search"></i></span>
                <input type="text" class="form-control" placeholder="Search..." />
            </div>
            </form>

            <button class="btn btn-primary ms-2" type="submit">Masuk</button>
        </div>
        </div>
    </nav>  
    </div>
    <!-- / navbar+header  -->

    <!-- content -->
    @yield('content')
    <!-- / content -->


<!-- Basic footer -->
<section id="basic-footer">

  <footer class="footer bg-white w-100">
    <div class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
      <div>
        <a href="{{ config('variables.livePreview') }}" target="_blank" class="footer-text fw-bolder">{{config('variables.templateName')}}</a> ©
      </div>
  </footer>
</section>
<!--/ Basic footer -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>