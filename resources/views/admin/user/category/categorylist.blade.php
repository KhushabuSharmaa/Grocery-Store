
@extends('admin.layouts.master')

@section('content')

<div class="main-panel">
      @include('admin.layouts.header')
            <div class="card d-flex mt-5">
           <div>
                <h3 class="fw-bold mb-5"></h3>
                <h3 class="op-7 mb-2">Category List</h3>
              </div>
              <div class="ms-md-auto py-2 py-md-0">
                <a href="{{route('user.category')}}" class="btn btn-primary btn-round mb-3">Add Category</a>
            </div>
      </div>

           <div class="card">
                  <div class="card-header">
                    <div class="card-title">Table Head States</div>
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
                          <th scope="col">Category Name</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $row)
                        <tr>
                          <td>{{$row->id}}</td>
                          <td>{{$row->categoryname}}</td>
                          <td>
                            <a href="{{route('edit.category', $row->id)}}">Edit</a>
                            <a href="{{route('delete.category', $row->id)}}">Delete</a>
                            
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>

</div>
@endsection