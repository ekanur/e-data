@extends('front/layout/layout')

@section('content')

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-white p-0">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item me-2">
            <a class="nav-link active text-white bg-primary" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link text-dark ps-3 pe-3" href="e-data">E-Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">About us</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2 form-control-sm custom-font" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary btn-sm custom-font" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- Main  -->
  <section>
    <div class="card mt-3 mb-3 custom-margin border-0" style="box-shadow: 0 2px 6px rgba(0, 0, 0, 0.16)">
      <div class="card-body pe-5 ps-5 pt-3 pb-2">
        <!-- t&c title -->
        <h3 class="card-title text-center mt-1 mb-2">Term & condition</h3>
        <!-- t&c  -->
        <div class="overflow-auto tc-content">
          <h5 class="pb-2 m-0 fw-normal">First heading</h5>
          <p class="pe-3 custom-font text-secondary">
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat nisi nam harum fugit praesentium nemo quas suscipit incidunt adipisci veniam corporis, 
         laboriosam ullam dolores exercitationem asperiores, consectetur voluptatibus, voluptates atque!
          </p>
        </div>
        <!-- checbox & button  -->
        <div class="form-check text-center d-flex align-items-center mt-2">
          <input class="form-check-input" type="checkbox" value="" id="Checkbox" />
          <label class="form-check-label ms-2 me-2" for="Checkbox"> I Agree</label>
          <div class="flex-grow-1"></div>
          <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#formModal">UPLOAD</button>
        </div>
      </div>
    </div>
  </section>
  <!-- modal coba -->
  <div class="modal fade" id="formModal" role="dialog" aria-labelledby="modalLable" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header"></div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer d-flex justify-content-center align-content-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
          <button type="button" class="btn btn-primary">NEXT</button>
        </div>
      </div>
    </div>
  </div>
@endsection
