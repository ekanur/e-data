@extends('front/layout/layout')

@section('content')
<!-- Basic Layout & Basic with Icons -->
<div class="row">
  <!-- Basic Layout -->
  <div class="col-xxl m-5 d-flex align-items-center justify-content-center">
    <div class="card mb-4 w-75">
      <div class="w-100 p-3 text-dark bg-white rounded text-center fw-bold">E-Data Karya Ilmiah</div>

      <div class="card-body">
        <div class="container">
          <table class="table table-striped table-hover">
              <thead>
            <tr>
              <th scope="col">NO INDEX</th>
              <th scope="col">NAMA</th>
              <th scope="col">NIM</th>
              <th scope="col">JUDUL KARYA ILMIAH</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>SK/AKT/2023/DDMMYYYYHHD</td>
              <td>Nama Belum Ambil Dari Database</td>
              <td>Judul belum ambil dari database</td>
              <td><a href="#">DETAIL</a></td>
            </tr>
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
