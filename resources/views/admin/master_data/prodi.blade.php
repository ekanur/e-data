@extends('layouts/contentNavbarLayout')

@section('title', 'Master Data - Prodi')

@section('vendor-style')
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
@endsection

@section('vendor-script')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/prodi.js')}}"></script>
@endsection

@section('content')

@if(null !== session('danger'))
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="alert alert-danger alert-dismissible">
          {{session('danger')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>
@elseif(null !== session('success'))
<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="alert alert-success alert-dismissible">
      {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
</div>
@endif
<div class="row">
  <!-- Total Revenue -->
  
  <!--/ Total Revenue -->
  <div class="col-8 col-md-8 col-lg-8">
    <div class="card">
  <h5 class="card-header">Daftar Prodi</h5>
  <div class="card-datatable pt-0">
    <table class="table table-hover" id="prodi">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Kode</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($prodi as $prodi)
        <tr>
          <td><strong>{{$prodi->nama}}</strong></td>
          <td>{{$prodi->kode}}</td>
          
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route("prodi-edit", ["id" => $prodi->id])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{route("prodi-delete", ["id" => $prodi->id])}}" data-confirm-delete="true"><i class="bx bx-trash me-1"></i> Delete</a>
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
  @if (isset($edit))
    <div class="card mb-4 col-4 col-md-4 col-lg-4">
      <h5 class="card-header">Edit Prodi</h5>
      <form action="{{route('prodi-update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$prodi->id}}">
      <div class="card-body">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Prodi</label>
          <input type="text" required name="nama" class="form-control" id="nama" placeholder="Nama Prodi" value="{{ $edit->nama }}">
        </div>
        <div class="mb-3">
          <label for="kode" class="form-label">Kode</label>
          <input type="text" required name="kode" class="form-control" id="kode" placeholder="Kode Prodi" value="{{ $edit->kode }}">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-success">Update</button>
        </div>
      </div>
      </form>
    </div>  
  @else
    <div class="card mb-4 col-4 col-md-4 col-lg-4">
      <h5 class="card-header">Tambah Prodi</h5>
      <div class="card-body">
        <form action="{{route('prodi-create')}}" method="post">
          @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Prodi</label>
          <input type="text" required class="form-control" id="nama" placeholder="Nama Prodi" name="nama">
        </div>
        <div class="mb-3">
          <label for="kode" class="form-label">Kode</label>
          <input type="text" required class="form-control" id="kode" placeholder="Kode Prodi" name="kode">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
        </form>
      </div>
    </div>
      
  @endif
    
</div>

@endsection
