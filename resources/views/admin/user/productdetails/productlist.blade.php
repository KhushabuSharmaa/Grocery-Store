
@extends('admin.layouts.master')

@section('content')

<div class="main-panel">
      @include('admin.layouts.header')
            <div class="card d-flex mt-5">
           <div>
                <h3 class="fw-bold mb-5"></h3>
                <h3 class="op-7 mb-2">Product List</h3>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="{{route('product.details')}}" class="btn btn-primary btn-round mb-3">Add Product</a>
            </div>
      </div>

           <div class="card">
                  <div class="card-header">
                    <div class="card-title">Products</div>
                  </div>
                    @if(session('success'))
                    <div class="alert alert-primary d-flex align-items-center bg-success text-white fs-2" role="alert">
                       {{ session('success') }}
                  </div>
                    @endif

                  <div class="card-body">
                    <table class="table table-head-bg-primary mt-0">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Category</th>
                          <th scope="col">Product Name</th>
                          <th scope="col">MRP</th>
                          <th scope="col">Selling Price</th>
                          <th scope="col">Unit</th>
                          <th scope="col">Stock</th>
                          <th scope="col">Expiry Date</th>
                          <th scope="col">Image</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($productdata as $data)
                        <tr>
                          <td>{{$data->id}}</td>
                          <td>{{$data->category}}</td>
                           <td>{{$data->product_name}}</td>
                            <td>{{$data->mrp}}</td>
                             <td>{{$data->selling_price}}</td>
                              <td>{{$data->unit}}</td>
                               <td>{{$data->stock}}</td>
                                <td>{{$data->expiry_date}}</td>
                                <td>
                                  <img src="{{$data->image}}" alt="" style="height:40px; width:100px; border:1px solid secondary">
                                </td>
                                <td>{{$data->status}}</td>
                          <td class="d-flex gap-2 justify-content-center align-items-center">
                            <a href="" class="btn btn-success pt-1 pb-1 ps-3 pe-3">Edit</a>
                            <a href="" class="btn btn-danger pt-1 pb-1 ps-2 pe-2">Delete</a>
                            
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>

</div>
@endsection