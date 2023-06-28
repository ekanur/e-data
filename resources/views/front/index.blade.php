@extends('front/layout/layout')

@section('content')

  <!-- Main  -->
    <div class="card m-5 custom-margin border-0  w-75 rounded" style="box-shadow: 0 2px 6px rgba(0, 0, 0, 0.16)">
      <div class="card-body pe-5 ps-5 pb-0 pt-0">
        <!-- t&c title -->
        <h3 class="card-title text-center m-4">Term & condition</h3>
        <!-- t&c  -->
        <div class="overflow-auto tc-content pe-3">
          <p class="text-secondary">
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat nisi nam harum fugit praesentium nemo quas suscipit incidunt adipisci veniam corporis, 
         laboriosam ullam dolores exercitationem asperiores, consectetur voluptatibus, voluptates atque!
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat nisi nam harum fugit praesentium nemo quas suscipit incidunt adipisci veniam corporis, 
         laboriosam ullam dolores exercitationem asperiores, consectetur voluptatibus, voluptates atque!
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat nisi nam harum fugit praesentium nemo quas suscipit incidunt adipisci veniam corporis, 
         laboriosam ullam dolores exercitationem asperiores, consectetur voluptatibus, voluptates atque!
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat nisi nam harum fugit praesentium nemo quas suscipit incidunt adipisci veniam corporis, 
         laboriosam ullam dolores exercitationem asperiores, consectetur voluptatibus, voluptates atque!
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat nisi nam harum fugit praesentium nemo quas suscipit incidunt adipisci veniam corporis, 
         laboriosam ullam dolores exercitationem asperiores, consectetur voluptatibus, voluptates atque!
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat nisi nam harum fugit praesentium nemo quas suscipit incidunt adipisci veniam corporis, 
         laboriosam ullam dolores exercitationem asperiores, consectetur voluptatibus, voluptates atque!
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat nisi nam harum fugit praesentium nemo quas suscipit incidunt adipisci veniam corporis, 
         laboriosam ullam dolores exercitationem asperiores, consectetur voluptatibus, voluptates atque!
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat nisi nam harum fugit praesentium nemo quas suscipit incidunt adipisci veniam corporis, 
         laboriosam ullam dolores exercitationem asperiores, consectetur voluptatibus, voluptates atque!
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat nisi nam harum fugit praesentium nemo quas suscipit incidunt adipisci veniam corporis, 
         laboriosam ullam dolores exercitationem asperiores, consectetur voluptatibus, voluptates atque!
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat nisi nam harum fugit praesentium nemo quas suscipit incidunt adipisci veniam corporis, 
         laboriosam ullam dolores exercitationem asperiores, consectetur voluptatibus, voluptates atque!
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat nisi nam harum fugit praesentium nemo quas suscipit incidunt adipisci veniam corporis, 
         laboriosam ullam dolores exercitationem asperiores, consectetur voluptatibus, voluptates atque!
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat nisi nam harum fugit praesentium nemo quas suscipit incidunt adipisci veniam corporis, 
         laboriosam ullam dolores exercitationem asperiores, consectetur voluptatibus, voluptates atque!
          </p>
        </div>
        <!-- checbox & button  -->
        <div class="form-check text-center d-flex align-items-center mt-2 mb-4">
          <input class="form-check-input" type="checkbox" value="" id="Checkbox" />
          <label class="form-check-label ms-2 me-2" for="Checkbox"> I Agree</label>
          <div class="flex-grow-1"></div>
          <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#formModal">UPLOAD</button>
        </div>
      </div>
    </div>
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
