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
              <th scope="col">No</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
          </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
