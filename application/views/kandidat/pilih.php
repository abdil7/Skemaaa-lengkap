<div class="row justify-content-center">
    <div class="card mt-3 col-lg-6">
        <h3 class="mt-3"><span class="badge bg-secondary">From Edit Data</span></h3>
        <?= $this->session->flashdata('message'); ?>
        <form method="post" class="mt-2 mb-3">
            <div class="mb-3">
                <label for="id_kandidat" class="form-label">Nama Kandidat</label>
                <select class="form-control" id="id_kandidat" name="id_kandidat">
                    <option value="<?= $kandidat['id_kandidat']; ?>" ><?= $kandidat['nama_ketos'] ?></option>
                </select>
                <?= form_error('id_kandidat', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="id_pemilih" class="form-label">Nama Pemilih</label>
                <select class="form-control" id="id_pemilih" name="id_pemilih">
                    <option value="<?= $user['id_user']; ?>" ><?= $user['username'] ?></option>
                </select>
                <?= form_error('id_pemilih', '<small class="text-danger" >', '</small>') ?>
            </div>
            Apakah Data Diatas Udah Benar? <br><button type="submit" class="btn btn-primary">Benar</button>
        </form>

    </div>
</div>