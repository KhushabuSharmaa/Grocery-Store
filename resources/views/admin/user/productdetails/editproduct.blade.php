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

                  <form action="{{route('update.product', $editdata->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="card-body">
                    <div class="row d-flex">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                         
                        <input type="text" value="{{$editdata->id}}">
                         <label for="defaultSelect">Category</label>
                          <select class="form-select form-control mb-2" id="defaultSelect" name="category">
                            <option>Select Category</option>
                                @foreach($data as $dt)
                                    <option value="{{ $dt->id }}" {{ $editdata->category_id == $dt->id ? 'selected' : '' }}>
                                    {{ $dt->categoryname }}
                                    </option>
                                @endforeach
                            <option value="" >Piece</option>
                           
                          </select>
    
                          <label >Product Name</label>
                          <input type="text" class="form-control mb-2 " name="product_name" value="{{$editdata->product_name}}"/>

                          <label >MRP</label>
                          <input type="number" class="form-control mb-2 "name="mrp" value="{{$editdata->mrp}}"/>

                          <label>Selling Price</label>
                          <input type="number" class="form-control mb-2 " name="selling_price" value="{{$editdata->selling_price}}" />

                          <label for="defaultSelect">Unit</label>
                          <select class="form-select form-control mb-2" id="defaultSelect" name="unit">
                            <option>Select Unit</option>
                            <option value="Kg" {{$editdata->unit== 'Kg' ? 'selected': '' }}>Kg</option>
                            <option value="Gram" {{$editdata->unit== 'Gram' ? 'selected': '' }}>Gram</option>
                            <option value="Litter" {{$editdata->unit== 'Litter' ? 'selected': '' }}>Litter</option>
                            <option value="Piece" {{$editdata->unit== 'Piece' ? 'selected': '' }}>Piece</option>
                          </select>

                          <label >Stock</label>
                          <input type="text" class="form-control mb-2 " name="stock" value="{{$editdata->stock}}"/>

                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 ">
                        <div class="form-group">

                          <label >Expiry Date</label>
                          <input type="date" class="form-control mb-2 "name="expiry_date" value="{{$editdata->expiry_date}}"/>
                          
                          <label for="file">Image</label>
                          <input type="file" class="form-control mb-2 " name="image" />
                            <img src="{{ asset('storage/image/' . $editdata->image) }}" alt="" style="height:40px; width:100px; border:1px solid secondary"> <br>

                          <label>Short Description</label>
                          <input type="text" class="form-control mb-2 " name="short_description" value="{{$editdata->short_description}}" />

                          <label>Long Description</label>
                          <input type="text" class="form-control mb-2 " name="long_description" value="{{$editdata->long_description}}"/>
      
                          <label for="defaultSelect">Status</label>
                          <select class="form-select form-control mb-2" id="defaultSelect" name="status">
                            <option>Select Status</option>
                            <option value="1" {{$editdata->status == '1' ? 'selected': '' }}>1</option>
                            <option value="0" {{$editdata->status == '0' ? 'selected': '' }}>0</option>
                          </select>

                          <button class="btn btn-success" value="save">Update</button>
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