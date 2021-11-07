<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
        <h1 class="h2">Dashboard Admin</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button type="button" class="btn btn-sm btn-outline-secondary bg-light"><a href="https://twitter.com/">Share</a></button>
                <button type="button" class="btn btn-sm btn-outline-secondary bg-light" onclick="window.print()" class="btn btn-danger btn-sm no-print">Export</button>
            </div>
            <input type="date" class="btn btn-sm btn-outline-secondary dropdown-toggle bg-light">
            </input>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid bg-light">
        <div class="container">
            <h1 class="display-4">Selamat Datang <?= $user['username']; ?>
            </h1>
            <p class="lead">Aplikasi Pembayaran SPP Sekolah Sederhana SMA N 1 JAKARTA</p>
        </div>
    </div>
</main>