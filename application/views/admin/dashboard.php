<div class="container ">
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-white">
            <h1 class="h2">Dashboard Admin</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2 ">
                    <button type="button" class="btn btn-sm btn-outline-secondary bg-light"><a href="https://twitter.com/">Share</a></button>
                    <button type="button" class="btn btn-sm btn-outline-secondary bg-light" onclick="window.print()" class="btn btn-danger btn-sm no-print">Export</button>
                </div>
                <input type="date" class="btn btn-sm btn-outline-secondary dropdown-toggle bg-light">
                </input>
            </div>
        </div>
        <div class="jumbotron jumbotron-fluid bg-white">
            <div class="container">
                <h1 class="display-4">Selamat Datang <?= $user['username']; ?>
                </h1>
                <p class="lead">Aplikasi Pembayaran SPP Sekolah Sederhana SMA N 1 TEGAL</p>
            </div>
        </div>
        </main>