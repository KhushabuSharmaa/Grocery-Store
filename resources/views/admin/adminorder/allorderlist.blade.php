
@extends('admin.layouts.master')

@section('content')

<div class="main-panel">
      @include('admin.layouts.header')
      <div class="card d-flex mt-5">
           <div>
                <h3 class="fw-bold mb-0">Order List</h3>
                <h3 class="op-7 mb-0">Order Details</h3>
              </div>
     </div>

            <div class="card mb-3">
                  <div class="card-header mb-0 pb-0">
                    <div class="card-title">Order List</div>
                  </div>
                  <div class="card-body">
                    <table class="table table-head-bg-primary mt-0">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Order ID</th>
                          <th scope="col">Address</th>
                          <th scope="col">City</th>
                          <th scope="col">Country</th>
                          <th scope="col">Pincode</th>
                          <th scope="col">Mobile</th>
                          <th scope="col">Product Details</th>
                          <th scope="col">Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($orderdata as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->user->name ?? ''}}</td>
                            <td>{{$data->orderId}}</td>

                            <td>{{$data->billingAddress->address ?? ''}}</td>
                            <td>{{$data->billingAddress->city ?? ''}}</td>
                            <td>{{$data->billingAddress->country ?? ''}}</td>
                            <td>{{$data->billingAddress->pincode ?? ''}}</td>
                            <td>{{$data->billingAddress->mobile ?? ''}}</td>
                            
                            <td>
                              <!-- product details modal button -->
                              <button 
                                  type="button"
                                  class="btn btn-primary"
                                  data-bs-toggle="modal"
                                  data-bs-target="#exampleModal{{$data->id}}"
                              >
                                  <i class="fas fa-eye fs-4"></i>
                              </button>
                            </td>
                            <td>{{$data->status}}</td>

                            <td class="d-flex gap-3 justify-content-center align-items-center">
                              <a href="{{route('edit.adminorder', $data->id)}}" class="btn btn-success p-1 ps-3 pe-3" >Edit</a>
                              <a href="{{route('delete.adminorder', $data->id)}}" class="btn btn-danger p-1 ps-3 pe-3" >Delete</a>                           
                            </td>
                           
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
           
          @foreach($orderdata as $data)

            @php
            $products = json_decode($data->product_detail, true) ?? [];
            @endphp

            <div 
                class="modal fade"
                id="exampleModal{{$data->id}}"
                tabindex="-1"
                aria-labelledby="exampleModalLabel{{$data->id}}"
                aria-hidden="true"
            >

                <div class="modal-dialog">

                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel{{$data->id}}">
                                Order ID : {{$data->orderId}}
                            </h5>

                            <button 
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>

                        <div class="modal-body">

                            <table class="table table-bordered">

                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach($products as $product)

                                    <tr>
                                        <td>{{$product['product_name']}}</td>
                                        <td>{{$product['price']}}</td>
                                        <td>{{$product['quantity']}}</td>
                                    </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                        <div class="modal-footer">
                            <button 
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Close
                            </button>
                        </div>

                    </div>

                </div>

            </div>

          @endforeach

</div>
@endsection




