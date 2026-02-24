      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="{{asset('backend/assets/logo.png')}}"
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

                <a href="{{route('admin.dashboard')}}">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
                
              </li>
              
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#users">
                  <i class="fas icon-people"></i>
                  <p>Users</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="users">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{route('activeuserlist')}}">
                        <span class="sub-item">User List</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{route('inactiveuserlist')}}">
                        <span class="sub-item">Unactive User</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>


              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#products">
                  <i class="fas fa-store"></i>
                  <p>Products</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="products">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{route('product.details')}}">
                        <span class="sub-item">Add Product</span>
                      </a>
                    </li>
                    <li>
                      <a href="tables/datatables.html">
                        <span class="sub-item">Product List</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

               <li class="nav-item">
                <a data-bs-toggle="collapse" href="#category">
                  <i class="fas fa-tags"></i>
                  <p>Categoray</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="category">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{route('user.category')}}">
                        <span class="sub-item">Add Category</span>
                      </a>
                    </li>
                    <li>
                      <a href="tables/tables.html">
                        <span class="sub-item">Category List</span>
                      </a>
                    </li>
                  </ul>
                </div>
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
                      <a href="tables/datatables.html">
                        <span class="sub-item">All List</span>
                      </a>
                    </li>
                    <li>
                      <a href="tables/datatables.html">
                        <span class="sub-item">Pending Order</span>
                      </a>
                    </li>
                    <li>
                      <a href="tables/datatables.html">
                        <span class="sub-item">Completed Order</span>
                      </a>
                    </li>
                    <li>
                      <a href="tables/datatables.html">
                        <span class="sub-item">Cancel Order</span>
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
                      <a href="tables/datatables.html">
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
                      <a href="tables/tables.html">
                        <span class="sub-item">Profile Setting</span>
                      </a>
                    </li>
                    <li>
                      <a href="tables/datatables.html">
                        <span class="sub-item">Website Setting</span>
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