
@extends('admin.layouts.master')

@section('content')

<div class="main-panel">
      @include('admin.layouts.header')
      <div class="card d-flex mt-5">
           <div>
                <h3 class="fw-bold mb-0">User List</h3>
                <h3 class="op-7 mb-0">User Details</h3>
              </div>
              <div class="ms-md-auto py-1 py-md-0 mb-2">
                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
            </div>
     </div>

           <div class="card mb-3">
                  <div class="card-header mb-0 pb-0">
                    <div class="card-title">User List</div>
                  </div>
                  <div class="card-body">
                    <table class="table table-head-bg-primary mt-0">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Profile</th>
                          <th scope="col">Block_Status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $row)
                        <tr>
                          <td>{{$row->id}}</td>
                          <td>{{$row->name}}</td>
                          <td>{{$row->email}}</td>
                          <td>{{$row->phone}}</td>
                          <td>{{$row->gender}}</td>   
                          <td>
                            <img src="{{asset('storage/profile/'. $row->profile)}}" alt="" style="height:40px; width:100px; border:1px solid">
                        </td>
                          <td>{{$row->block_status}}</td>
                          <td class="d-flex gap-3 justify-content-center align-items-center">
                              <a href="{{route('edit.user', $row->id)}}" class="btn btn-success p-1 ps-3 pe-3" >Edit</a>

                            <form action="{{ route('block.user' ,$row->id )}}" method="post">
                             @csrf
                            <button type="submit" class="btn btn-danger p-1 ps-3 pe-3">Block</button>
                           </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
       
           <div class="d-flex justify-content-center">
            {{$data->links()}}
           </div>


</div>
@endsection




