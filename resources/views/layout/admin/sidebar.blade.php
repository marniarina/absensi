<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('Lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info ">
          <a href="#" class="d-block ">{{Auth::guard('user')->user()->name}}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
          <li class="nav-item">
            <a href="/admin/admindashboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
            
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Master
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/mahasiswa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Master Mahasiswa</p>
                </a>
              </li>
              
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/presensi/konfirizin" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perijinan Izin/Sakit</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="/presensi/monitoring" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Monitoring
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/adminlogout" class="nav-link">
              <div class="btn btn-danger">
                logout
              </div>
            </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>