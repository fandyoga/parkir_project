<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()	{
		parent::__construct();
		$this->load->model('Allmod');
	}

	public function index()
	{
		$data = array('kendaraan' => $this->Allmod->get_data('kendaraan')->result_array());
		$this->load->view('tampilan', $data);
	}

	public function action_tambah_data()
	{
		$data = array(

						'plat_nomer' 		=> $this->input->post('plat_nomer'),
						'jam_masuk' 		=> date('Y-m-d H:i:s'),
						'tgl'				=> date('Y-m-d'),
						'status'			=> 1,
					);
			$this->Allmod->tambah_data("kendaraan",$data);
			redirect(base_url().'Welcome');
	}	


	public function keluar($id)
	{
		// get data yang diperlukan
		$source = $this->Allmod->get_baris('kendaraan','id',$id)->result_array();
		
		// perhitungan jam
		$jam_masuk = date_create($source[0]['jam_masuk']);
		$jam_keluar = date_create();

		$selisih = date_diff($jam_masuk, $jam_keluar);

		// data tampilan yang dibutuhkan
		$jam = $selisih->h;
		$menit = $selisih->i;
		
		// perhitungan biaya
		// $jam = 5;
		if ($jam <= 1) {
			$biaya = 2000;
		} elseif ($jam > 1 && $jam <= 2) {
			$biaya = 4000;
		} elseif ($jam > 2 && $jam <=3){
			$biaya = 4000 + 500;
		} elseif ($jam > 3){
			$biaya = 4000 + (($jam - 2)*500);
		}

		// test syntax
		// echo "<pre>";
		// print_r($menit);
		// exit;

		$data = array(

						'jam_keluar' 		=> date('Y-m-d H:m:s'),
						'lama_parkir'		=> "$jam jam, $menit menit",
						'bayar'				=> $biaya,
						'status'			=> 0,
					);

		// test syntax
		// echo "<pre>";
		// print_r($data);
		// exit;
			$this->Allmod->ubah_data("kendaraan","id",$id,$data);
			redirect(base_url().'Welcome');
	}

	public function delete()
	{
		$this->load->view('tampilan');
	}
}
