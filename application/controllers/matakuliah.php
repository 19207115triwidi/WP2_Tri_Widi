<?php 

class Matakuliah extends CI_Controller
{
	public function index()
	{
		$this->load->view('view-form-matakuliah');
	}

	public function cetak()
	{
		$data =[
			 'kode' => $this->input->post('kode'),
		     'kode' => $this->input->post('nama'),
		     'kode' => $this->input->post('sks')];

		     $this->load->view('view-data-matakuliah',$data);
    }
}