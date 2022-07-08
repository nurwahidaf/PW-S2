  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?php echo base_url();?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
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
            <a href="<?php echo base_url();?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>Tempat_wisata" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Tempat Wisata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>Jenis_wisata" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Jenis Wisata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>Kecamatan" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Kecamatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>Komentar" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Komentar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>Users" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>Our_Team" class="nav-link">
            <i class="nav-icon fas fa-columns"></i>
              <p>
                Our Team
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url();?>Home" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Log out
              </p>
            </a>
          </li>
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>