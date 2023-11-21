<div class="row justify-content-center">
    <div class="card mt-3 col-lg-6">
        <h3 class="mt-3"><span class="badge bg-secondary">From Edit Data</span></h3>
        <?= $this->session->flashdata('message'); ?>
        <form method="post" class="mt-2 mb-3">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $pemilih['username']; ?>">
                <?= form_error('username', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pemilih</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $pemilih['nama']; ?>">
                <?= form_error('nama', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="text" class="form-control" id="password" name="password" value="<?= $pemilih['password']; ?>">
                <?= form_error('password', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="nisn" class="form-label">nisn</label>
                <input type="number" class="form-control" id="nisn" name="nisn" value="<?= $pemilih['nisn']; ?>">
                <?= form_error('nisn', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $pemilih['alamat']; ?>">
                <?= form_error('alamat', '<small class="text-danger" >', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>