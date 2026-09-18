
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
                            <td>{{$data->product_detail}}</td>
                            <td>{{$data->status}}</td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>


</div>
@endsection




