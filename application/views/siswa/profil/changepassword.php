<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?= $title; ?></h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <form action="<?= base_url('siswa/profil/changepassword'); ?>" method="post">
                <div class="form-group">
                    <label for="current_password">current password</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>') ?>

                </div>
                <div class="form-group">
                    <label for="new_password1">new password</label>
                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>') ?>

                </div>
                <div class="form-group">
                    <label for="new_password2">repeat password</label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>') ?>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Change password</button>
                </div>
            </form>
        </div>
    </div>