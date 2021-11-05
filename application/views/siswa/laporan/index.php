<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $title; ?></h1>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <?= form_open('siswa/laporan/pembayaran'); ?>
                            <div class="form-group">
                                <label for="mulai_tgl">Mulai Tanggal</label>
                                <input type="date" name="mulai_tgl" class="form-control" value="<?= date('Y-m-d'); ?>">
                            </div>
                            <div class="form-group">
                                <label for="sampai_tgl">Sampai Tanggal</label>
                                <input type="date" name="sampai_tgl" class="form-control" value="<?= date('Y-m-d'); ?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control">Tampilkan</button>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>