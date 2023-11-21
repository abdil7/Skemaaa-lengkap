<div class="card bg-light mt-3">
    <div class="card-header">
        <div>Detail Kandidat <?= $kandidat['id_kandidat'] ?></div>
    </div>
    <div class="container">

        <div class="card-body">
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/'); ?><?= $kandidat['image']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nama Ketos : <?= $kandidat['nama_ketos'] ?></h5>
                            <h5 class="card-title">Nama Waketos : <?= $kandidat['nama_waketos'] ?></h5>
                            <p class="card-text">Visi : <?= $kandidat['visi'] ?></p>
                            <p class="card-text">Misi : <?= $kandidat['misi'] ?></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?= base_url('kandidat'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>