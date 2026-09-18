

 @extends('admin.layouts.master')

@section('content')

<div class="main-panel">
      @include('admin.layouts.header')
      <div class="card d-flex mt-5">
           <div>
                <h3 class="fw-bold mb-5"></h3>
                <h3 class="op-7 mb-2">Update Order</h3>
              </div>
      </div>

           <div class="row ">
              <div class="col-md-12 ">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Orders</div>
                  </div>

                  <form action="{{route('update.adminorder', $editorder->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                   
                    <input type="hidden" value="{{$editorder->id}}">
                    <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group ">

                            <label for="defaultSelect"><h2>Order Status</h2></label>
                            <select class="form-select form-control mb-3" id="" name="status">
                                <option value="">Select Status</option>
                                <option value="pending" {{$editorder->status== 'pending' ? 'selected': '' }}>Pending</option>
                                <option value="confirm" {{$editorder->status== 'confirm' ? 'selected': '' }}>Confirm</option>
                                <option value="cancelled" {{$editorder->status== 'cancelled' ? 'selected': '' }}>Cancelled</option>
                            </select>

                          <button class="btn btn-success" value="save">Update</button>
                          <button class="btn btn-danger"><a href="{{route('allOrder')}}" style="color:white;">Cancel</a></button>

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