 @extends('admin.layouts.master')

@section('content')

<div class="main-panel">
      @include('admin.layouts.header')
      <div class="card d-flex mt-5">
           <div>
                <h3 class="fw-bold mb-5"></h3>
                <h3 class="op-7 mb-2">Category Details</h3>
              </div>
      </div>
            <div class="row ">
              <div class="col-md-12 ">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Category</div>
                  </div>

                  <form action="{{route('add.category')}}" method="post">
                    @csrf
                   
                    <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <label for="email2">Category Name</label>
                          <input
                            type="text"
                            class="form-control mb-4 "
                            id="email2"
                            placeholder="Enter category" name="categoryname"
                          />
                           <button class="btn btn-success" value="save">Submit</button>
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