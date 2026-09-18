
@extends('admin.layouts.master')

@section('content')

<div class="main-panel">
      @include('admin.layouts.header')
      <div class="card d-flex mt-5">
           <div>
                <h3 class="fw-bold mb-0">Transaction List</h3>
                <h3 class="op-7 mb-0">Transaction Details</h3>
              </div>
     </div>

           <div class="card mb-3">
                  <div class="card-header mb-0 pb-0">
                    <div class="card-title">Transaction List</div>
                  </div>
                  <div class="card-body">
                    <table class="table table-head-bg-primary mt-0">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Order ID</th>
                          <th scope="col">Transaction ID</th>
                          <th scope="col">Payment Mode</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($transactionlist as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->user->name}}</td>
                            <td>{{$data->order->orderId}}</td>
                            <td>{{$data->transactionId}}</td>
                            <td>{{$data->payment_mode}}</td>
                            <td>{{$data->amount}}</td>
                            <td class="text-start">
                              <span class="badge badge-success p-2 fs-6"> {{$data->status}}</span>
                            </td>
                           
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>


</div>
@endsection




