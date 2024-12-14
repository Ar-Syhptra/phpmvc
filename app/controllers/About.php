<?php

class About extends Controller
{
  public function index($nama = 'Arkan', $pekerjaan = 'Programmer', $umur = 15)
  {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = 'About Me';
    $this->view('templates/header', $data);
    $this->view('templates/footer');
    $this->view('about/index', $data);
  }
  public function page()
  {
    $data['judul'] = 'Pages';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}