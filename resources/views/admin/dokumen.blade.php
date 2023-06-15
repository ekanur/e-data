@extends('layouts/contentNavbarLayout')

@section('title', 'Dokumen Karya Ilmiah')

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
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Karya Ilmiah</span></h4>

@if(null !== session('danger'))
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="alert alert-danger alert-dismissible">
          {{session('danger')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" {{$karya_ilmiah->p->nama}} aria-label="Close"></button>
        </div>
      </div>
    </div>
@elseif(null !== session('success'))
<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="alert alert-success alert-dismissible">
      {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" {{$karya_ilmiah->p->nama}} aria-label="Close"></button>
    </div>
  </div>
</div>
@endif
<div class="row">
  <!-- Total Revenue -->
  
  <!--/ Total Revenue -->
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">

      <div class="card-header border-bottom">
        <h5 class="card-title"><a href='{{route('karya-ilmiah-add')}}' class="btn btn-success">Tambah</a></h5>
        <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
          <div class="col-md-4 user_role"><select id="UserRole" class="form-select text-capitalize"><option value=""> Select Role </option><option value="Admin">Admin</option><option value="Author">Author</option><option value="Editor">Editor</option><option value="Maintainer">Maintainer</option><option value="Subscriber">Subscriber</option></select></div>
          <div class="col-md-4 user_plan"><select id="UserPlan" class="form-select text-capitalize"><option value=""> Select Plan </option><option value="Basic">Basic</option><option value="Company">Company</option><option value="Enterprise">Enterprise</option><option value="Team">Team</option></select></div>
          <div class="col-md-4 user_status"><select id="FilterTransaction" class="form-select text-capitalize"><option value=""> Select Status </option><option value="Pending" class="text-capitalize">Pending</option><option value="Active" class="text-capitalize">Active</option><option value="Inactive" class="text-capitalize">Inactive</option></select></div>
        </div>
      </div>
    
  <div class="card-datatable pt-0">
    <table class="table table-hover" id="table">
      <thead>
        <tr>
          <th>Judul</th>
          <th>PA</th>
          <th>Pembimbing</th>
          <th>Penguji</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($karya_ilmiah as $karya_ilmiah)
        <tr>
          <td width="45%">
            <h5>{{$karya_ilmiah->judul}}</h5>
            <small><span class="badge rounded-pill bg-label-primary">{{$karya_ilmiah->jenis_dokumen->nama}}</span></small>

            @unless ($karya_ilmiah->is_approved===0)
            <span class="badge rounded-pill bg-label-success">Verified</span>
            @endunless 
            <br/>
          <small>{{$karya_ilmiah->mahasiswa->nama}} ({{$karya_ilmiah->mahasiswa->nim}})</small><br>
          <small class="text-truncate text-muted">{{$karya_ilmiah->mahasiswa->jurusan->nama}}, {{$karya_ilmiah->mahasiswa->prodi->nama}}</small>
            
          </td>
          <td width="5%">
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-html=true data-bs-placement="top" class="avatar avatar-md pull-up" aria-label="{{$karya_ilmiah->pa->name }}" data-bs-original-title="{{$karya_ilmiah->pa->name }}">
                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td width="15%">
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center"> 
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-html=true data-bs-placement="top" class="avatar avatar-md pull-up" aria-label="<strong>Pembimbing 1</strong><br/> {{$karya_ilmiah->pembimbing->name }}" data-bs-original-title="<strong>Pembimbing 1</strong><br/> {{$karya_ilmiah->pembimbing->name }}">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-html=true data-bs-placement="top" class="avatar avatar-md pull-up"  aria-label="<strong>Pembimbing 2</strong><br/> {{$karya_ilmiah->penguji->name }}" data-bs-original-title="<strong>Pembimbing 2</strong><br/> {{$karya_ilmiah->penguji->name }}">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td width="15%">
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
             
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-html=true data-bs-placement="top" class="avatar avatar-md pull-up" aria-label="<strong>Penguji 1</strong><br/> {{$karya_ilmiah->pembimbing->name }}" data-bs-original-title="<strong>Penguji 1</strong><br/> {{$karya_ilmiah->pembimbing->name }}">
                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-html=true data-bs-placement="top" class="avatar avatar-md pull-up" aria-label="<strong>Penguji 2</strong><br/> {{$karya_ilmiah->penguji->name }}" data-bs-original-title="<strong>Penguji 2</strong><br/> {{$karya_ilmiah->penguji->name }}">
                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td width="5%">
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route("karya-ilmiah-edit", ["id" => $karya_ilmiah->id])}}"><i class="bx bx-download me-1"></i> Download</a>
                <a class="dropdown-item" href="{{route("karya-ilmiah-edit", ["id" => $karya_ilmiah->id])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{route("karya-ilmiah-delete", ["id" => $karya_ilmiah->id])}}" data-confirm-delete="true"><i class="bx bx-trash me-1"></i> Delete</a>
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
    
</div>

@endsection
