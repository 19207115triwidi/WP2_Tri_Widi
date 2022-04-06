<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihansatu extends CI_Controller {

	 public function index() {
    echo "Selamat Datang... selamat belajar web programming 2";
  }

	 public function penjumlahan($n1, $n2) 
     {
    $this->load->model('Model_Latihansatu');
    
    $data['nilai1'] = $n1;
    $data['nilai'] = $n2;
    $data['hasil'] = $this->Model_Latihansatu->jumlah($n1,$n2);

    $this->load->view('view-Latihansatu', $data);
    }
}
