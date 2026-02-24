 @extends('admin.layouts.master')

@section('content')

<div class="main-panel">
      @include('admin.layouts.header')
      <div class="card d-flex mt-5">
           <div>
                <h3 class="fw-bold mb-5"></h3>
                <h3 class="op-7 mb-2">Update User</h3>
              </div>
      </div>

           <div class="row ">
              <div class="col-md-12 ">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Users</div>
                  </div>

                  <form action="{{route('update.user', $userlist->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                   
                    <input type="hidden" value="{{$userlist->id}}">
                    <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">

                          <label for="name">Name</label>
                          <input type="text" class="form-control mb-2 " id="name" placeholder="Enter your name" name="name" value="{{$userlist->name}}"/>

                          <label for="email">Email</label>
                          <input type="email" class="form-control mb-2 " id="email" placeholder="Enter your email" name="email" value="{{$userlist->email}}"/>

                          <label for="number">Phone</label>
                          <input type="number" class="form-control mb-2 " id="number" placeholder="Enter your Phone number" name="phone" value="{{$userlist->phone}}"/>

                          <label>Gender</label><br />
                          <div class="d-flex">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male" {{$userlist->gender== 'male'? 'checked': '' }}/>
                                <label class="form-check-label" for="flexRadioDefault1"> Male</label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female" {{$userlist->gender== 'female'? 'checked': '' }}/>
                                <label class="form-check-label" for="flexRadioDefault2"> Female</label>
                                </div>
                          </div> 

                          <label for="file">Profile</label>
                          <input type="file" class="form-control mb-2 " id="file" placeholder="Enter your name" name="file" />
                          <img src="{{asset('storage/profile/'. $userlist->profile)}}" alt="" style="height:50px; width:150px; border:1px solid gray" value="{{$userlist->profile}}"> <br>
      
                          <label for="defaultSelect">Block Status</label>
                          <select class="form-select form-control mb-2" id="defaultSelect" name="block_status">
                            <option>Select Status</option>
                            <option  value="1" {{$userlist->block_status== '1' ? 'selected': '' }}>1</option>
                            <option  value="0" {{$userlist->block_status== '0' ? 'selected': '' }}>0</option>
                          </select>

                          <button class="btn btn-success" value="save">Update</button>
                          <button class="btn btn-danger"><a href="{{route('activeuserlist')}}" style="color:white;">Cancel</a></button>

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