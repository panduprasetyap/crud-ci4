<div class="container p-5">
  <a href="<?= base_url('mahasiswa'); ?>" class="btn btn-secondary mb-2"><i class="fas fa-home"></i></a>
  <div class="card">
    <div class="card-header bg-primary text-white">
      <h4 class="card-title">Edit Data Vaksinasi Karyawan</h4>
    </div>
    <div class="card-body">
      <form method="post" action="<?= base_url('mahasiswa/update'); ?>">
        <div class="form-group">
          <label for="">Nama Mahasiswa</label>
          <input type="text" value="<?= $mahasiswa->nama; ?>" name="nama" required class="form-control">
        </div>
        <div class="form-group">
          <label for="">NPM</label>
          <input type="text" value="<?= $mahasiswa->npm; ?>" name="npm" required class="form-control">
        </div>
        <div class="form-group">
          <label for="">Status Vaksin 1</label>
          <select class="form-control" name="jurusan">
            <option value="<?= $mahasiswa->jurusan; ?>">---Pilih Jurusan--</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Teknik Industri">Teknik Industri</option>
          </select>
        </div>


        <input type="hidden" value="<?= $mahasiswa->id; ?>" name="id">
        <div class="text-right">
          <button class="btn btn-success">Update</button>
        </div>
      </form>

    </div>
  </div>
</div>