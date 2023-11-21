<div class="card bg-light mt-3">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h5>From Pemilihan Ketos Dan Waketos</h5>
            <a href="<?= base_url('login/logout'); ?>" class="btn btn-secondary">Logout</a>

        </div>
    </div>
    <div class="container">

        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <?= $user['username']; ?>
                </div>
                <div class="card-body">
                    <h4>Selamat Datang Di aplikasi Pemilihan Ketos Dan Waketos</h4>

                </div>
            </div>
            <?php if ($user['role_id'] == 1) : ?>
                <a href="<?= base_url('admin/tambah'); ?>" class="btn btn-primary">Tambah</a>
            <?php else : ?>
            <?php endif; ?>

            <div class="row">
                <?php $i = 1; ?>
                <?php foreach ($kandidat as $k) : ?>
                    <div class="col-sm-4">
                        <div class="card mt-3">
                            <div class="card-header">
                                Kandidat <?= $i; ?>
                            </div>
                            <div class="card-body">
                                <img src="<?= base_url('assets/img/'); ?><?= $k['image']; ?>" class="card-img-top" alt="...">
                                <div class="d-flex justify-content-around mt-2">
                                    <h4 class="card-title"><?= $k['nama_ketos']; ?></h4>
                                    <h4><?= $k['nama_waketos']; ?></h4>
                                </div>
                                <div class="d-flex justify-content-between">
                                
                                    <?php if ($user['role_id'] == 1) : ?>
                                        <a href="<?= base_url('admin/edit/') ?><?= $k['id_kandidat'] ?>" class="btn btn-success">Edit</a>
                                        <a href="<?= base_url('admin/hapus/') ?><?= $k['id_kandidat'] ?>" class="btn btn-danger">Hapus</a>
                                        <a href="<?= base_url('kandidat/detail/'); ?><?= $k['id_kandidat']; ?>" class="btn btn-success">Detain Kandidat</a>
                                    <?php else : ?>
                                        <a href="<?= base_url('kandidat/pilih/'); ?><?= $k['id_kandidat']; ?>" class="btn btn-primary">Pilih Kandidat ini</a>
                                        <a href="<?= base_url('kandidat/detail/'); ?><?= $k['id_kandidat']; ?>" class="btn btn-success">Detain Kandidat</a>

                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>