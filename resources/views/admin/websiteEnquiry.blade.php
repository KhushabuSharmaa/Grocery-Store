
@extends('admin.layouts.master')

@section('content')

<div class="main-panel">
      @include('admin.layouts.header')
      <div class="card d-flex mt-5">
           <div>
                <h3 class="fw-bold mb-0">Website Enquiry List</h3>
                <h3 class="op-7 mb-0">Website Enquiry Details</h3>
              </div>
     </div>

           <div class="card mb-3">
                  <div class="card-header mb-0 pb-0">
                    <div class="card-title">Website Enquiry List</div>
                  </div>
                  <div class="card-body">
                    <table class="table table-head-bg-primary mt-0">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Message</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($contactlist as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->msg}}</td>
                 
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>


</div>
@endsection




