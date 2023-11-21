<div class="row justify-content-center">
    <div class="card mt-3 col-lg-6">
        <h3 class="mt-3"><span class="badge bg-secondary">From Tambah Data</span></h3>
        <?= $this->session->flashdata('message'); ?>
        <form method="post" class="mt-2 mb-3">
            <div class="mb-3">
                <label for="nama_ketos" class="form-label">Nama Ketos</label>
                <input type="text" class="form-control" id="nama_ketos" name="nama_ketos">
                <?= form_error('ketos', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="nama_waketos" class="form-label">Nama Waketos</label>
                <input type="text" class="form-control" id="nama_waketos" name="nama_waketos">
                <?= form_error('waketos', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                <?= form_error('image', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="visi" class="form-label">Visi</label>
                <input type="text" class="form-control" id="visi" name="visi">
                <?= form_error('visi', '<small class="text-danger" >', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="misi" class="form-label">Misi</label>
                <input type="text" class="form-control" id="misi" name="misi">
                <?= form_error('misi', '<small class="text-danger" >', '</small>') ?>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>