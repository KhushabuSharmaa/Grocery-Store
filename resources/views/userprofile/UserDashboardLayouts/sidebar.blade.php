      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="{{asset('storage/profile/'.(Auth::user()->profile))}}"
                alt="navbar brand"
                class="navbar-brand"
                height="40px" width="150"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">

                <a href="{{route('user.dashboard')}}">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
                
              </li>

               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#orders">
                  <i class="fas icon-basket-loaded"></i>
                  <p>Orders</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="orders">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{route('user.order')}}">
                        <span class="sub-item">All Orders</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#payment">
                  <i class="fas fa-money-bill-wave"></i>
                  <p>Payments</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="payment">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{route('user.transaction')}}">
                        <span class="sub-item">Transaction</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#setting">
                  <i class="fas icon-settings"></i>
                  <p>Settings</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="setting">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{route('user.setting')}}">
                        <span class="sub-item">User Setting</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->