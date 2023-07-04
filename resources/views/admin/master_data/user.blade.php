@extends('layouts/contentNavbarLayout')

@section('title', 'Master Data - User')

@section('vendor-style')
<link rel="stylesheet" href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
@endsection

@section('vendor-script')
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/datatable-init.js')}}"></script>
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
  <h5 class="card-header">Daftar User</h5>
  <div class="card-datatable pt-0">
    <table class="table table-hover" id="table">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Username</th>
          <th>Role</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($user as $user)
        <tr>
          <td><strong>{{$user->name}}</strong><br/><small>{{$user->email}}</small></td>
          <td>{{$user->username}}</td>
          <td>{{$user->role($user->is_admin)}}</td>
          
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route("user-edit", ["id" => $user->id])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{route("user-profile", ["id" => $user->id])}}"><i class="bx bx-edit-alt me-1"></i> Profile</a>
                <a class="dropdown-item" href="{{route("user-delete", ["id" => $user->id])}}" data-confirm-delete="true"><i class="bx bx-trash me-1"></i> Delete</a>
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
      <h5 class="card-header">Edit User</h5>
      <form action="{{route('user-update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$edit->id}}">
        <div class="mb-3">
          <label for="nama" class="form-label">Role</label>
          <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="is_admin">
            
            <option value="0" @if ($edit->is_admin == 0) selected @endif>Dosen</option>
            <option value="1" @if ($edit->is_admin == 1) selected @endif>Admin</option>
          </select>
        </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" required class="form-control" id="nama" placeholder="Nama Lengkap" name="name" value="{{$edit->name}}">
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" required class="form-control" id="username" placeholder="Username" value="{{$edit->username}}" name="username">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="email" required class="form-control" id="email" placeholder="Email" value="{{$edit->email}}" name="email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">password</label>
        <input type="password" class="form-control" id="password" placeholder="...." name="password">
        <div id="defaultFormControlHelp" class="form-text">Silakan isi password, jika ingin mengubah password.</div>
      </div>
      <div class="mb-3">
        <label for="ulang_password" class="form-label">ulangi password</label>
        <input type="password" class="form-control" id="ulang_password" placeholder="...." name="ulang_password">
        <div id="defaultFormControlHelp" class="form-text">Pastikan sama dengan isian password di atas.</div>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
      </form>
    </div>  
  @else
    <div class="card mb-4 col-4 col-md-4 col-lg-4">
      <h5 class="card-header">Tambah User</h5>
      <div class="card-body">
        <form action="{{route('user-create')}}" method="post">
          @csrf
          <div class="mb-3">
            <label for="nama" class="form-label">Role</label>
            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name="is_admin">
              
              <option value="0">Dosen</option>
              <option value="1">Admin</option>
            </select>
          </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" required class="form-control" id="nama" placeholder="Nama Lengkap" name="name" value='{{ old('name') }}'>
          @error('name')
            <span class="text-danger form-text">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" required class="form-control" id="username" placeholder="Username" name="username" value='{{ old('username') }}'>
          @error('username')
            <span class="text-danger form-text">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">email</label>
          <input type="email" required class="form-control" id="email" placeholder="Email" name="email" value='{{ old('email') }}'>
          @error('email')
            <span class="text-danger form-text">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">password</label>
          <input type="password" required class="form-control" id="password" placeholder="...." name="password">
          @error('password')
            <span class="text-danger form-text">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="ulang_password" class="form-label">ulangi password</label>
          <input type="password" required class="form-control" id="ulang_password" placeholder="...." name="ulang_password">
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
