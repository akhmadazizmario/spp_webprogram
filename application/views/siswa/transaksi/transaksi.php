<div class="container">
    <h1 class="h2"><?= $title; ?></h1>
    <hr>
    <div class="row mb-2">
        <div class="col-md-6">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>
    <!-- Biodata Siswa -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-dark">
            <h6 class="m-0 font-weight-bold text-white">biodata siswa</h6>
        </div>
        <div class="card-body bg-info">
            <div class="table-responsive">
                <table class="table table-bordered bg-white" id="dataTable" width="100%" cellspacing="0">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <table class="table bg-white">
                                <tr>
                                    <th>NIS</th>
                                    <td>:</td>
                                    <td><?= $user['nis']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Siswa</th>
                                    <td>:</td>
                                    <td><?= $user['nama_siswa']; ?></td>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <td>:</td>
                                    <td><?= $user['kelas']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tahun Ajaran</th>
                                    <td>:</td>
                                    <td><?= $user['tahun_ajaran']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
            </div>
            <!-- /Biodata Siswa -->

            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-danger " role="alert"><i class="fa fa-exclamation-triangle"></i> Masukan nis anda dan paste kan disini untuk melihat pembayaran spp.</div>
                    <?= form_open(''); ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="masukkan nis anda..." name="nis" autofocus="on">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary bg-danger" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <small class="muted text-danger"><?= form_error('nis'); ?></small>
                    <?= form_close(); ?>
                </div>
            </div>

            <?php if ($this->input->post('nis')) : ?>


                <!-- Spp Siswa -->
                <div class="row">
                    <div class="col-md">
                        <div class="table-responsive">
                            <table class="table bg-light">
                                <tr bgcolor="yellow">
                                    <th>No</th>
                                    <th>Bulan</th>
                                    <th>Jatuh Tempo</th>
                                    <th>NoBayar</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Jumlah</th>
                                    <th>Keterangan</th>
                                    <th>Bayar</th>
                                </tr>
                                <?php $no = 1;
                                foreach ($spp as $s) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $s['bulan']; ?></td>
                                        <td><?= $s['jatuh_tempo']; ?></td>
                                        <td><?= $s['no_bayar']; ?></td>
                                        <td><?= $s['tgl_bayar']; ?></td>
                                        <td><?= $s['jml']; ?></td>
                                        <td><?= $s['ket']; ?></td>
                                        <td>
                                            <?php if ($s['no_bayar'] == null) : ?>
                                                <a href="<?= base_url('siswa/transaksi/bayar/' . $siswa['nis'] . '/' . $s['id_spp']); ?>" class="btn btn-primary btn-sm">Bayar</a>
                                            <?php else : ?>
                                                <a href="<?= base_url('siswa/transaksi/cetak/' . $siswa['nis'] . '/' . $s['id_spp']); ?>" target="_blank" class="btn btn-sm">Cetak</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /Spp Siswa -->
            <?php endif; ?>

        </div>
    </div>
    </main>