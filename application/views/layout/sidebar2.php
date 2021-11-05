<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow ">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="<?= base_url('dashboard'); ?>"><img src="https://i1.wp.com/lpmpsulbar.kemdikbud.go.id/wp-content/uploads/2020/09/LOGO-TUT-WURI-HANDAYANI.png?ssl=1" width="30px"> SMA N 1 JAKARTA</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="keyword">
            <div class="input-group-append">
                <button class="btn btn-warning" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse ">
            <div class="sidebar-sticky pt-3 bg-light">
                <ul class="nav flex-column ">
                    <li class="nav-item ">
                        <a class="nav-link<?= $this->uri->segment(2) == 'dashboard' ? ' active' : '' ?>" href="<?= base_url('siswa/dashboard'); ?>">
                            <i class="fas fa-tachometer-alt"></i>
                            BERANDA!
                        </a>
                    </li>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted ">
                        <span>Master Data</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <li class="nav-item">
                        <a class="nav-link<?= $this->uri->segment(2) == 'users' ? ' active' : '' ?>" href="<?= base_url('siswa/profil'); ?>">
                            <i class="fas fa-user"></i>
                            profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= $this->uri->segment(2) == 'users' ? ' active' : '' ?>" href="http://localhost/latihansppwebprogram/siswa/profil/ubahSiswa/10">
                            <i class="fas fa-key"></i>
                            ubah profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= $this->uri->segment(2) == 'transaksi' ? ' active' : '' ?>" href="<?= base_url('siswa/transaksi'); ?>">
                            <i class="fas fa-money-check-alt"></i>
                            Bayar Spp
                        </a>
                    </li>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>keluar</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <li class="nav-item">
                        <a class="nav-link bg-light text-dark" href="<?= base_url('auth/logout'); ?>">
                            <i class="fas fa-sign-out-alt"></i>
                            Sign out</a>
                    </li>
                </ul>
            </div>
        </nav>