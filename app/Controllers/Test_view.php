<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Test_view extends Controller
{
  public function index()
  {
    $data['title']  = 'Tutorial CRUD';
    $data['msg1']   = 'Selamat Datang di Tutorial CI 4';
    $data['msg2']   = 'Membuat aplikasi CRUD Sederhana';

    echo view('test_view', $data);
  }
}
