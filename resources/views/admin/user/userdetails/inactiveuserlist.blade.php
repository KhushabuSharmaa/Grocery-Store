@extends('admin.layouts.master')

@section('content')
<div class="main-panel">
 @include('admin.layouts.header')

<div class="card mt-5">
                  <div class="card-header mt-5">
                    <div class="card-title">Inactive User List</div>
                  </div>
                  <div class="card-body">
                    <table class="table table-head-bg-primary mt-0">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Mobile</th>
                          <th scope="col">gender</th>
                          <th scope="col">Profile</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                          @foreach($data as $row)
                           <tr>
                            <td>{{ $row->id }}</td>
                           <td>{{ $row->name }}</td>
                           <td>{{ $row->email }}</td>
                           <td>{{ $row->phone }}</td>
                           <td>{{ $row->gender }}</td>
                           <td>
                            <img src="{{ asset('storage/profile/'.$row->profile) }}" alt="" style="height: 50px;width:50px;">
                           </td>
                           <td>
                           <form action="{{ route('unblock.user' ,$row->id )}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-success p-1 ps-3 pe-3"> UnBlock</button>
                           </form>
                          </td>

                            </tr>
                           @endforeach
                        
                        </tbody>
                    </table>
                  </div>
                </div>


<div class="d-flex justify-content-center">
    {{ $data->links() }}
</div>


</div>
@endsection