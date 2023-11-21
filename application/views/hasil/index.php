<div class="card mt-3">
  <div class="card-header">
  <div class="d-flex justify-content-between">
      <a href="<?= base_url('login/logout'); ?>" class="btn btn-secondary">Logout</a>
    </div>
  </div>
  <div class="container">

    <div class="card-body">
      <div class="row">
        <div class="card">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nama Kandidat</th>
                <th scope="col">Nama Pemilih</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($hasil as $h) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $h['nama_ketos'] ?></td>
                  <td><?= $h['nama'] ?></td>
                  <td>
                    <a href="<?= base_url('hasil/hapus/') ?><?= $h['id_hasil'] ?>" class="btn btn-danger">Hapus</a>
                    <a href="<?= base_url('hasil/detail/') ?><?= $h['id_hasil'] ?>" class="btn btn-warning">Detail</a>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>