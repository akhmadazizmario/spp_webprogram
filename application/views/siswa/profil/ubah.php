<div class="container">
    <h1 class="h2"><?= $title; ?></h1>
    <hr>
    <div class="row mb-2">
        <div class="col-md-6">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
            <?php endif; ?>
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md">
                    <?= form_open('siswa/profil/ubahDataSiswa'); ?>
                    <input type="text" name="id_siswa" id="id_siswa" value="<?= $user['id_siswa']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama_lengkap</label>
                        <input type="text" name="nama_siswa" id="nama_siswa" value="<?= $user['nama_siswa']; ?>" class="form-control">
                        <small class="muted text-danger"><?= form_error('nama_siswa'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">username</label>
                        <input type="text" name="username" id="username" value="<?= $user['username']; ?>" class="form-control">
                        <small class="muted text-danger"><?= form_error('username'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">alamat</label>
                        <input type="text" name="alamat" id="alamat" value="<?= $user['alamat']; ?>" class="form-control">
                        <small class="muted text-danger"><?= form_error('alamat'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">no.hp</label>
                        <input type="text" name="nohp" id="nohp" value="<?= $user['nohp']; ?>" class="form-control">
                        <small class="muted text-danger"><?= form_error('nohp'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <small class="muted text-danger"><?= form_error('password'); ?></small>
                    </div>

                    <div class="form-group">
                        <a href="<?= base_url('siswa/profil'); ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-dark">Ubah</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    </main>