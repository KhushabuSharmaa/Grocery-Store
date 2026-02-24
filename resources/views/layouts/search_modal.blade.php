 <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Modal Search End -->

 <!-- Modal Search Start -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login Here...</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">


                                 @if(session('success'))
                                  <script>
                                    alert('{{session('success')}}');
                                  </script>
                                 @endif


                                 @if(session('error'))
                                  <script>
                                    alert('{{session('error')}}');
                                  </script>
                                 @endif
                               

                               <form action="{{route('user.login')}}" method="post">
                                @csrf
                                    <div class="mb-3">
                                         <div id="emailHelp" class="form-text"><h6>Lorem ipsum dolor sit consectetur adipisicing.</h6></div>
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="email">
                                       
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                        
                                    <button type="submit" class="btn btn-primary form-control bg-primary">Login</button>
                                     <div class="mb-3 d-flex">
                                        <p class="pt-3">Don't have an account? </p>
                                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">
                                        Sign up
                                        </button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Modal Search End -->


 <!-- Modal Search Start -->
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                               <form action="{{route('user.register')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                  <div id="emailHelp" class="form-text"><h6>Lorem ipsum dolor sit consectetur adipisicing.</h6></div>
                                        <label  class="form-label">Name</label>
                                        <input type="name" class="form-control" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="email">  
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                        
                                    <button type="submit" class="btn btn-primary form-control bg-primary">Register</button>
                                    <div class="mb-3 d-flex">
                                         <p class="pt-3">Already have an account?</p>
                                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">
                                                Sign in
                                            </button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Modal Search End -->

