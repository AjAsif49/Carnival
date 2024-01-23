  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="{{ route('home.about') }}" class="nav-link {{ request()->routeIs('home.about') ? 'active':'' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                About Us
              </p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="{{ route('home.product') }}" class="nav-link {{ request()->routeIs('home.product') ? 'active':'' }}">
              <i class="nav-icon fas fa-th"></i>
            <p>
                Products
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('home.slider') }}" class="nav-link {{ request()->routeIs('home.slider') ? 'active':'' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Sliders
              </p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="{{ route('home.testimonial') }}" class="nav-link {{ request()->routeIs('home.testimonial') ? 'active':'' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Testimonial
              </p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="{{ route('home.menu') }}" class="nav-link {{ request()->routeIs('home.menu') ? 'active':'' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Menu
              </p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="{{ route('home.submenu') }}" class="nav-link {{ request()->routeIs('home.submenu') ? 'active':'' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Sub Menu
              </p>
            </a>
          </li> 

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>