<?php

class About extends Controller
{
  public function index()
  {
    $data['judul'] = 'About';
    $this->view('template/header', $data);
    $this->view('About/index');
    $this->view('template/footer');
  }
  public function page()
  {
    echo 'About/page';
  }
}
