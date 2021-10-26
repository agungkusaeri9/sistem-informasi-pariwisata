<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-plane"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pariwisata</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        DATA
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.events.index') }}">Acara</a>
                <a class="collapse-item" href="{{ route('admin.news.index') }}">Berita</a>
                <a class="collapse-item" href="{{ route('admin.cultures.index') }}">Kebudayaan</a>
                <a class="collapse-item" href="{{ route('admin.culinaries.index') }}">Kuliner</a>
                <a class="collapse-item" href="{{ route('admin.tickets.index') }}">Tiket</a>
                <a class="collapse-item" href="{{ route('admin.tours.index') }}">Wisata</a>
            </div>
        </div>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        DATA GALERI
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#gallery"
            aria-expanded="true" aria-controls="gallery">
            <i class="fas fa-fw fa-folder"></i>
            <span>Galeri</span>
        </a>
        <div id="gallery" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.galleries.index') }}">Foto</a>
                <a class="collapse-item" href="{{ route('admin.videos.index') }}">Video</a>
            </div>
        </div>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        DATA PESAN
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.inboxes.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pesan Masuk</span>
        </a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        DATA MASTER
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Master</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.users.index') }}">User</a>
                <a class="collapse-item" href="{{ route('admin.categories.index') }}">Kategori</a>
                <a class="collapse-item" href="{{ route('admin.evaluations.index') }}">Penilaian</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link mt-0 pt-0" href="{{ route('admin.setting.index') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span></a>
    </li>


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>