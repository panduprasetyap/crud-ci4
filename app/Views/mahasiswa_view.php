<div class="container pt-5">
  <div class="text-right">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom:10px;">Tambah Data</button>
  </div>

  <div class="card">
    <div class="card-header bg-primary text-white">
      <h4 class="card-title" style="text-align: center;">Data Mahasiswa</h4>
    </div>

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NPM</th>
              <th>Jurusan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($getMahasiswa as $mhs) {
            ?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['npm']; ?></td>
                <td><?= $mhs['jurusan']; ?></td>
                <td>
                  <a href="<?= base_url('mahasiswa/edit/' . $mhs['id']) ?>" class="btn btn-success" data-target="#editModal">Edit</a>
                  <a href="<?= base_url('mahasiswa/hapus/' . $mhs['id']) ?>" class="btn btn-danger" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus data karyawan?')">Hapus</a>
                </td>
              </tr>
            <?php $no++;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!--   Modal Tambah Data-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('mahasiswa/add'); ?>">
          <div class="form-group">
            <label for="nama" class="col-form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="npm" class="col-form-label">NPM</label>
            <input type="text" class="form-control" id="npm" name="npm">
          </div>
          <div class="form-group">
            <label for="jurusan" class="col-form-label">Jurusan</label>
            <select class="form-control" name="jurusan">
              <option value="">---Pilih Jurusan---</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Industri">Teknik Industri</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
</body>