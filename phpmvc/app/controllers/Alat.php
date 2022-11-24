<?php

class Alat extends Controller
{
  public function index()
  {
    $data['judul'] = 'Daftar Alat';
    $data['alat'] = $this->model('AlatModel')->getAlat();
    $this->view('template/header', $data);
    $this->view('alat/index', $data);
    $this->view('template/footer');
  }
  public function detail($id)
  {
    $data['judul'] = 'Detail Alat';
    $data['alat'] = $this->model('AlatModel')->getAlatById($id);
    $this->view('template/header', $data);
    $this->view('alat/detail', $data);
    $this->view('template/footer');
  }

  public function tambah()
  {
    if ($this->model('AlatModel')->tambahAlat($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambah', 'success');
      header('Location: ' . BASEURL . '/alat');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambah', 'danger');
      header('Location: ' . BASEURL . '/alat');
      exit;
    }
  }
  public function hapus($id)
  {
    if ($this->model('AlatModel')->hapusAlat($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/alat');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/alat');
      exit;
    }
  }

  public function getUbah()
  {
    echo json_encode($this->model('AlatModel')->getAlatById($_POST['id']));
  }

  public function ubah()
  {
    if ($this->model('AlatModel')->ubahAlat($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/alat');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/alat');
      exit;
    }
  }
}
