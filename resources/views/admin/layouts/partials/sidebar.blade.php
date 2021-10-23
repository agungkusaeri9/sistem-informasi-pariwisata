<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Pariwisata</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ auth()->user()->avatar() }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('admin.profile.show') }}" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">ADMIN</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                DATA
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.news.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.cultures.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kebudayaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.events.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Acara</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.culinaries.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kuliner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.tickets.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tiket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.tours.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wisata</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">GALERI FOTO</li>
          <li class="nav-item">
            <a href="{{ route('admin.galleries.index') }}" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-header">PESAN MASUK</li>
          <li class="nav-item">
            <a href="{{ route('admin.inboxes.index') }}" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Pesan Masuk
              </p>
            </a>
          </li>
          <li class="nav-header">DATA MASTER</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                MASTER
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.users.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.categories.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.evaluations.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penilaian</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>