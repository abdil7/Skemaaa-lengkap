<div class="card bg-light mt-3">
    <div class="card-header">
        <div>Detail Pemilihan <?= $hasil['id_hasil'] ?></div>
    </div>
    <div class="container">
        <div class="card-body">
            <div class="card mb-3">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                Detail Kandidat
                            </div>
                            <div class="card-body">
                                <img src="<?= base_url('assets/img/'); ?><?= $hasil['image']; ?>" class="img-fluid rounded-start" alt="...">
                                <h5 class="card-title">Nama Ketos : <?= $hasil['nama_ketos'] ?></h5>
                                <h5 class="card-title">Nama Waketos : <?= $hasil['nama_waketos'] ?></h5>
                                <p class="card-text">Visi : <?= $hasil['visi'] ?></p>
                                <p class="card-text">Misi : <?= $hasil['misi'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                        <div class="card-header">
                            Detail Pemilih
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Nama Pemilih : <?= $hasil['nama'] ?></h5>
                            <p class="card-text">NISN : <?= $hasil['nisn'] ?></p>
                            <p class="card-text">Alamat : <?= $hasil['alamat'] ?></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?= base_url('hasil'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>