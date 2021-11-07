<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $title; ?></h1>
    </div>
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
                    <?= form_open('admin/users/ubahDataUser'); ?>
                    <input type="text" name="id_user" id="id_user" value="<?= $user['id_user']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama lengkap</label>
                        <input type="text" name="nama" id="nama" value="<?= $user['nama_lengkap']; ?>" class="form-control">
                        <small class="muted text-danger"><?= form_error('nama'); ?></small>
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
                        <label for="nama">No.hp</label>
                        <input type="text" name="nohp" id="nohp" value="<?= $user['nohp']; ?>" class="form-control">
                        <small class="muted text-danger"><?= form_error('nohp'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">password</label>
                        <input type="text" name="password" id="password" value="<?= $user['password']; ?>" class="form-control">
                        <small class="muted text-danger"><?= form_error('password'); ?></small>
                    </div>
                    <div class="form-group">
                        <a href="<?= base_url('admin/Users'); ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-dark">Ubah</button>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</main>