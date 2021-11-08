<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $title; ?></h1>
  </div>
  <div class="row mb-2">
    <div class="col-md-6">
      <button type="button" class="btn btn-danger mb-2" data-toggle="modal" data-target="#formModalUser">
        <i class="fas fa-plus"></i> Tambah Data User
      </button>
      <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
      <?php endif; ?>
      <?= $this->session->flashdata('pesan'); ?>
    </div>
  </div>

  <table class="table table-striped bg-light">
    <thead bgcolor="yellowgreen">
      <tr>
        <td>No</td>
        <td>Nama Lengkap</td>
        <td>Username</td>
        <td>alamat</td>
        <td>no.hp</td>
        <td>Level</td>
        <td><i class="fas fa-cogs"></i></td>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($users as $u) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $u['nama_lengkap']; ?></td>
          <td><?= $u['username']; ?></td>
          <td><?= $u['alamat']; ?></td>
          <td><?= $u['nohp']; ?></td>
          <td><?= $u['level']; ?></td>
          <td>
            <a href="<?= base_url('admin/users/ubahUser/') . $u['id_user']; ?>" class="btn btn-primary">
              <i class="fas fa-edit"></i>
            </a>
            <a href="<?= base_url('admin/users/hapus/') . $u['id_user']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus ?')"><i class="fas fa-trash"></i></a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>

<!-- Modal -->
<div class="modal fade" id="formModalUser" tabindex="-1" aria-labelledby="formModalLabelUser" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabelUser">Tambah Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open('admin/users'); ?>
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" name="nama" id="nama" class="form-control">
          <small class="muted text-danger"><?= form_error('nama'); ?></small>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control">
          <small class="muted text-danger"><?= form_error('username'); ?></small>
        </div>
        <div class="form-group">
          <label for="alamat">alamat</label>
          <input type="text" name="alamat" id="alamat" class="form-control">
          <small class="muted text-danger"><?= form_error('alamat'); ?></small>
        </div>
        <div class="form-group">
          <label for="nohp">no.hp</label>
          <input type="text" name="nohp" id="nohp" class="form-control">
          <small class="muted text-danger"><?= form_error('nohp'); ?></small>
        </div>
        <div class="form-group">
          <label for="level">level</label>
          <input type="text" name="level" id="level" class="form-control">
          <small class="muted text-danger"><?= form_error('level'); ?></small>
        </div>
        <div class="form-group">
          <label for="password">password</label>
          <input type="password" name="password" id="password" class="form-control">
          <small class="muted text-danger"><?= form_error('password'); ?></small>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-dark">Tambah</button>
        </div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>