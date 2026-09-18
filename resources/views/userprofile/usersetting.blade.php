@extends('userprofile.UserDashboardLayouts.master')

@section('content')

<div class="main-panel">
      @include('userprofile.UserDashboardLayouts.header')
     <div class="card d-flex">
           <div>
                <h3 class="fw-bold "></h3>
                <h3 class="op-7 mb-2">User Profile</h3>
              </div>
      </div>

    <div class="container py-5 ">

      <div class="card border-0 shadow-lg overflow-hidden"
            style="border-radius:20px; animation:fadeInUp 0.8s ease;">

            <!-- Top Cover Section -->
            <div style="background: linear-gradient(135deg, #111746, #222436); height:180px;">
            </div>

            <div class="card-body text-center position-relative">

                <!-- Profile Image -->
                <div style="margin-top:-110px;">
                    <img src="{{ asset('storage/profile/'.(Auth::user()->profile ?? 'default.png')) }}"
                        class="rounded-circle shadow"
                        style="width:180px; height:180px; object-fit:cover; border:6px solid white; transition:0.4s;"
                        onmouseover="this.style.transform='scale(1.07)'"
                        onmouseout="this.style.transform='scale(1)'">
                </div>

                <!-- Name -->
                <h3 class="fw-bold mt-3" style="color:#2a2f5b;">
                    {{ Auth::user()->name }}
                </h3>

                <p class="text-muted mb-4">
                    {{ Auth::user()->email }}
                </p>

                <!-- Info Section -->
                <div class="row justify-content-center">

                    <div class="col-md-4 mb-3">
                        <div class="p-3 bg-light rounded shadow-sm h-100">
                            <h6 class="fw-bold mb-2" style="color:#2a2f5b;">Phone</h6>
                            <p class="mb-0 text-muted">
                                {{ Auth::user()->phone ?? '' }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="p-3 bg-light rounded shadow-sm h-100">
                            <h6 class="fw-bold mb-2" style="color:#2a2f5b;">Gender</h6>
                            <p class="mb-0 text-muted">
                                {{ Auth::user()->gender ?? '' }}
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Button -->
                <div class="mt-4">
                    <a href="{{ route('edituser.setting') }}"
                      class="btn px-4 py-2"
                      style="background:#2a2f5b; color:white; border-radius:30px; transition:0.3s;"
                      onmouseover="this.style.background='#1d2145'"
                      onmouseout="this.style.background='#2a2f5b'">
                      Update Profile
                    </a>
                </div>

            </div>
        </div>

    </div>

</div>

<!-- Animation -->
<style>
@keyframes fadeInUp{
    from{opacity:0; transform:translateY(40px);}
    to{opacity:1; transform:translateY(0);}
}
</style>
@endsection 

