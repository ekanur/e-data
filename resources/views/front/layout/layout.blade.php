<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/front.css')) }}" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css" />

    <title>E-DATA | FEB Universitas Negeri Malang</title>
  </head>
  <body style="background-color: #f2f2f8">
    <!-- Logo & banner -->
    <section class="header align-items-center d-flex justify-content-center">
      <img src="{{asset('assets/img/front/logo.png')}}" height="50%" />
    </section>
    @yield('content')
    <!-- Footer  -->
    <footer class="footer w-100 shadow-sm custom-font bg-white d-flex justify-content-center align-items-center">
      <span class="fs-8 fw-lighter">Copyright © 2023 - Developed with Laravel</span>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
