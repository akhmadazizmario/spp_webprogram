<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-warning">Detail Siswa </h5>
                <div class="card-body bg-white">
                    <h5 class="card-title"><?= $siswa['nama_siswa']; ?></h5>
                    <p class="card-text"><?= $siswa['nis']; ?></p>
                    <p class="card-text"><?= $siswa['alamat']; ?></p>
                    <p class="card-text"><?= $siswa['nohp']; ?></p>
                    <p class="card-text"><?= $siswa['username']; ?></p>
                    <a href="http://localhost/latihansppwebprogram/admin/siswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>