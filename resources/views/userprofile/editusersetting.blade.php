 @extends('userprofile.UserDashboardLayouts.master')

@section('content')

<div class="main-panel">
      @include('userprofile.UserDashboardLayouts.header')
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

                  <form action="{{route('updateuser.setting', Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          
                        <input type="hidden" value="{{Auth::user()->id}}">
                          <label for="name">Name</label>
                          <input type="text" class="form-control mb-2 " id="name" placeholder="Enter your name" name="name" value="{{Auth::user()->name}}"/>

                          <label for="email">Email</label>
                          <input type="email" class="form-control mb-2 " id="email" placeholder="Enter your email" name="email" value="{{Auth::user()->email}}"/>

                          <label for="number">Phone</label>
                          <input type="number" class="form-control mb-2 " id="number" placeholder="Enter your Phone number" name="phone" value="{{Auth::user()->phone}}"/>

                          <label>Gender</label><br />
                          <div class="d-flex">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="male" {{Auth::user()->gender== 'male'? 'checked': '' }}/>
                                <label class="form-check-label" for="flexRadioDefault1"> Male</label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="female" {{Auth::user()->gender== 'female'? 'checked': '' }}/>
                                <label class="form-check-label" for="flexRadioDefault2"> Female</label>
                                </div>
                          </div> 

                          <label for="file">Profile</label>
                          <input type="file" class="form-control mb-2 " id="file" placeholder="Enter your name" name="image" />
                          <img src="{{asset('storage/profile/'.(Auth::user()->profile))}}" alt="" style="height:50px; width:150px; border:1px solid gray" value=""> <br>

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