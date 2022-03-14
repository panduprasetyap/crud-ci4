<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Mahasiswa_model;

class Mahasiswa extends Controller
{
  public function index()
  {
    $model  = new Mahasiswa_model;
    $data['title'] = 'Data Mahasiswa';
    $data['getMahasiswa'] = $model->getMahasiswa();

    echo view('header', $data);
    echo view('mahasiswa_view', $data);
    echo view('footer', $data);
  }

  public function add()
  {
    $model = new Mahasiswa_model;
    $data = array(
      'nama'    => $this->request->getPost('nama'),
      'npm'     => $this->request->getPost('npm'),
      'jurusan' => $this->request->getPost('jurusan')
    );
    $model->saveMahasiswa($data);
    echo '<script>
    alert("Selamat! Berhasil menambahkan data");
    window.location="' . base_url('mahasiswa') . '"        
    </script>';
  }

  public function edit($id)
  {
    $model = new Mahasiswa_model;
    $getMahasiswa = $model->getMahasiswa($id)->getRow();
    if (isset($getMahasiswa)) {
      $data['mahasiswa']  = $getMahasiswa;
      $data['title']      = 'CRUD Tutorial';

      echo view('header', $data);
      echo view('edit_view', $data);
      echo view('footer', $data);
    } else {
      echo '<script>
            alert("ID Mahasiswa ' . $id . ' Tidak ditemukan");
            window.location="' . base_url('mahasiswa') . '"
      </script>';
    }
  }

  public function update()
  {
    $model  = new Mahasiswa_model;
    $id     = $this->request->getPost('id');

    $data   = array(
      'nama'    => $this->request->getPost('nama'),
      'npm'     => $this->request->getPost('npm'),
      'jurusan' => $this->request->getPost('jurusan')
    );
    $model->editMahasiswa($data, $id);
    echo '<script>
                alert("Selamat! Anda berhasil melakukan update data.");
                window.location="' . base_url('mahasiswa') . '"
            </script>';
  }

  public function hapus($id)
  {
    $model        = new Mahasiswa_model;
    $getMahasiswa = $model->getMahasiswa($id)->getRow();

    if (isset($getMahasiswa)) {
      $model->hapusMahasiswa();
      echo '<script>
                    alert("Selamat! Data berhasil terhapus.");
                    window.location="' . base_url('mahasiswa') . '"
                </script>';
    } else {
      echo '<script>
                    alert("Gagal Menghapus !, ID Mahasiswa ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('mahasiswa') . '"
                </script>';
    }
  }
}
