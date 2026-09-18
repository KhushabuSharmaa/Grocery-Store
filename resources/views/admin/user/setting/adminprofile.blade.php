 @extends('admin.layouts.master')

@section('content')

<div class="main-panel">
      @include('admin.layouts.header')
      <div class="card d-flex mt-5">
           <div>
                <h3 class="fw-bold mb-5"></h3>
                <h3 class="op-7 mb-2">Product Details</h3>
              </div>
      </div>

           <div class="row ">
              <div class="col-md-12 ">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Products</div>
                  </div>

                  <form action="{{route('admin.setting')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="card-body">
                    <div class="row d-flex">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
    
                          <label>Name</label>
                          <input type="text" class="form-control mb-2" name="name" value="{{$data->name ?? ''}}">

                          <label >Email</label>
                          <input type="email" class="form-control mb-2" name="email" value="{{$data->email ?? ''}}"/>

                          <label >Role</label>
                          <input type="text" class="form-control mb-2" name="role" value="{{$data->role ?? ''}}"/>

                          <label for="profile">Profile</label>
                          <input type="file" class="form-control mb-2" name="profile" id="profile" value="">
                          <img src="{{asset('admin-profile-setting/'.$data->profile ?? '')}}" alt="" style="height:60px; width:300px; border:1px solid secondary"> <br>


                          <button class="btn btn-success" value="save">Save</button>
                          <button class="btn btn-danger"><a href="{{route('admin.dashboard')}}" style="color:white;">Cancel</a></button>

                        </div>
                      </div>

                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>


</div>
@endsection