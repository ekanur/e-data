@extends('layouts/contentNavbarLayout')

@section('title', 'Master Data - Jurusan')

{{-- @section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection --}}

@section('content')
<div class="row">
  <!-- Total Revenue -->
  
  <!--/ Total Revenue -->
  <div class="col-8 col-md-8 col-lg-8">
    <div class="card">
  <h5 class="card-header">Daftar Jurusan</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Kode</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($jurusan as $jurusan)
        <tr>
          <td><strong>{{$jurusan->nama}}</strong></td>
          <td>{{$jurusan->kode}}</td>
          
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
  </div>
  <div class="col-4 col-md-4 col-lg-4">
    <div class="card mb-4">
      <h5 class="card-header">Tambah Jurusan</h5>
      <div class="card-body">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Jurusan</label>
          <input type="text" class="form-control" id="nama" placeholder="Nama Jurusan">
        </div>
        <div class="mb-3">
          <label for="kode" class="form-label">Kode</label>
          <input type="text" class="form-control" id="kode" placeholder="Kode Jurusan">
        </div>
        <div class="mb-3">
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
