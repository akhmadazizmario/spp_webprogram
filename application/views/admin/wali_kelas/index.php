<div class="container">
  <h1 class="h2"><?= $title; ?></h1>
  <hr>
  <div class="row mb-2">
    <div class="col-md-6">
      <button type="button" class="btn btn-danger mb-2" data-toggle="modal" data-target="#formModalWali">
        <i class="fas fa-plus"></i> Tambah Data Wali Kelas
      </button>
      <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
      <?php endif; ?>
      <?= $this->session->flashdata('pesan'); ?>
    </div>
  </div>
  <div class="card shadow mb-4">
    <div class="card-header py-3 bg-white">
      <table class="table table-striped bg-light">
        <thead bgcolor="yellow">
          <tr>
            <td>No</td>
            <td>Kelas</td>
            <td>Nama Guru</td>
            <td><i class="fas fa-cogs"></i></td>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($guruWali as $g) : ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $g['kelas']; ?></td>
              <td><?= $g['nama_guru']; ?></td>
              <td>
                <a href="<?= base_url('admin/wali/ubahWali/') . $g['kelas']; ?>" class="btn btn-primary">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="<?= base_url('admin/wali/hapus/') . $g['kelas']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus ?')"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      </main>

      <!-- Modal -->
      <div class="modal fade" id="formModalWali" tabindex="-1" aria-labelledby="formModalLabelWali" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="formModalLabelWali">Tambah Data Wali Kelas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?= form_open('admin/wali'); ?>
              <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="text" name="kelas" id="kelas" class="form-control">
                <small class="muted text-danger"><?= form_error('kelas'); ?></small>
              </div>
              <div class="form-group">
                <label for="nama">Nama Guru</label>
                <select name="nama" id="nama" class="form-control">
                  <option value="">-- Pilih Guru --</option>
                  <?php foreach ($guru as $g) : ?>
                    <option value="<?= $g['id_guru']; ?>"><?= $g['nama_guru']; ?></option>
                  <?php endforeach; ?>
                </select>
                <small class="muted text-danger"><?= form_error('nama'); ?></small>
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