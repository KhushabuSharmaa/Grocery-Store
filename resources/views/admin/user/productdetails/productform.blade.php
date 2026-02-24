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

                  <form action="{{route('add.product')}}" method="post" enctype="multipart/form-data">
                   @csrf
                    <div class="card-body">
                    <div class="row d-flex">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">

                         <label for="defaultSelect">Category</label>
                          <select class="form-select form-control mb-2" id="defaultSelect" name="category">
                            <option>Select Category</option>
                            @foreach($data as $dt)
                            <option>{{$dt->categoryname}}</option>
                            @endforeach
                          </select>
    
                          <label >Product Name</label>
                          <input type="text" class="form-control mb-2 " name="product_name"/>

                          <label >MRP</label>
                          <input type="number" class="form-control mb-2 "name="mrp" />

                          <label>Selling Price</label>
                          <input type="number" class="form-control mb-2 " name="selling_price" />

                          <label for="defaultSelect">Unit</label>
                          <select class="form-select form-control mb-2" id="defaultSelect" name="unit">
                            <option>Select Unit</option>
                            <option>Kg</option>
                            <option>Gram</option>
                            <option>Litter</option>
                            <option>Piece</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 ">
                        <div class="form-group">

                          <label >Stock</label>
                          <input type="text" class="form-control mb-2 " name="stock"/>

                          <label >Expiry Date</label>
                          <input type="datetime-local" class="form-control mb-2 "name="expiry_date" />
                          
                          <label for="file">Image</label>
                          <input type="file" class="form-control mb-2 " name="image" />
      
                          <label for="defaultSelect">Status</label>
                          <select class="form-select form-control mb-2" id="defaultSelect" name="status">
                            <option>Select Status</option>
                            <option>1</option>
                            <option >0</option>
                          </select>

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