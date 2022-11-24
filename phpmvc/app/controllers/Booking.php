<?php

class Booking extends Controller
{

  public function index()
  {
    $data['judul'] = 'Daftar Booking';
    $data['booking'] = $this->model('BookingModel')->getBooking();
    $this->view('template/header', $data);
    $this->view('booking/index', $data);
    $this->view('template/footer');
  }

  public function detail($id)
  {
    $data['judul'] = 'Detail Booking';
    $data['booking'] = $this->model('BookingModel')->getBookingById($id);
    $this->view('template/header', $data);
    $this->view('booking/detail', $data);
    $this->view('template/footer');
  }

  public function book($id)
  {
    $data['judul'] = 'Booking';
    $data['booking'] = $this->model('AlatModel')->getAlatById($id);
    $this->view('template/header', $data);
    $this->view('booking/book', $data);
    $this->view('template/footer');
  }

  public function addBook()
  {
    if ($this->model('BookingModel')->addBook($_POST) > 0) {
      Flasher::setFlash('berhasil', 'booking', 'success');
      header('Location: ' . BASEURL . '/booking');
      exit;
    } else {
      Flasher::setFlash('gagal', 'booking', 'danger');
      header('Location: ' . BASEURL . '/booking');
      exit;
    }
  }
  public function hapus($id)
  {
    if ($this->model('BookingModel')->hapusBook($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/booking');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/booking');
      exit;
    }
  }
}
