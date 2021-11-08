<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <img class="img-profile rounded-circle" src="https://i.pinimg.com/originals/c1/94/32/c194329bae6d1f4fbe3890136d9fdb5f.png" width="50px" height="50px">
        <div class="sidebar-brand-text mx-3">SISWA <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link<?= $this->uri->segment(2) == 'dashboard' ? ' active' : '' ?>" href="<?= base_url('admin/dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt" style='font-size:20px;'></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item">
        <a class="nav-link<?= $this->uri->segment(2) == 'users' ? ' active' : '' ?>" href="<?= base_url('siswa/profil'); ?>">
            <i class="fas fa-user"></i>
            profil
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link<?= $this->uri->segment(2) == 'guru' ? ' active' : '' ?>" href="http://localhost/latihansppwebprogram/siswa/profil/ubahSiswa/10">
            <i class="fas fa-key"></i>
            Ubah password
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link<?= $this->uri->segment(2) == 'transaksi' ? ' active' : '' ?>" href="<?= base_url('siswa/transaksi'); ?>">
            <i class="fas fa-money-check-alt"></i>
            Transaksi
        </a>
    </li>
    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    <li class="nav-item">
        <a class="nav-link " href="<?= base_url('auth2/logout'); ?>"><i class="fas fa-sign-out-alt"></i>Log out</a>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="" alt="...">
        <p class="text-center mb-2"><strong>hello semoga harimu menyenangkan</strong>:)</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Welcome!!</a>
    </div>

</ul>
<!-- End of Sidebar -->
<!-- End of Sidebar -->