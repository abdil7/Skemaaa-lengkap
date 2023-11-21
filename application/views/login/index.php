<div class="card mt-3">
    <div class="card-header">
        <h5>Apikasi Pemilihan Ketos Waketos</h5>
    </div>
    <div class="container">
        <div class="card-body pb-5">
            <div class="row justify-content-center">
                <div class="card mt-3 col-lg-4 bg-secondary">
                    <h3 class="mt-3"><span class="badge bg-light text-secondary">Login Aplikasi</span></h3>

                    <?= $this->session->flashdata('message'); ?>
                    <form method="post" class="mt-3 mb-3">
                        <div class="mb-3">
                            <label for="username" class="form-label text-light">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                            <?= form_error('username', '<small class="text-danger" >', '</small>') ?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-light">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <?= form_error('password', '<small class="text-danger" >', '</small>') ?>
                        </div>
                        <button type="submit" class="btn btn-success">Login</button>
                        <a href="<?= base_url('login/register'); ?>" class="btn btn-primary">Register</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>