<div class="card mt-3">
  <div class="card-header">
  <div class="d-flex justify-content-between">
      <a href="<?= base_url('pemilih/tambah'); ?>" class="btn btn-primary">Tambah</a>
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
                <th scope="col">Username</th>
                <th scope="col">Nama</th>
                <th scope="col">Password</th>
                <th scope="col">NISN</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($pemilih as $k) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $k['username'] ?></td>
                  <td><?= $k['nama'] ?></td>
                  <td><?= $k['password'] ?></td>
                  <td><?= $k['nisn'] ?></td>
                  <td><?= $k['alamat'] ?></td>
                  <td>
                    <a href="<?= base_url('pemilih/edit/') ?><?= $k['id_pemilih'] ?>" class="btn btn-success">Edit</a>
                    <a href="<?= base_url('pemilih/hapus/') ?><?= $k['id_pemilih'] ?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <a href="<?= base_url('admin'); ?>" class="btn btn-secondary mt-3">Tabel kandidat</a>
    </div>
  </div>
</div>