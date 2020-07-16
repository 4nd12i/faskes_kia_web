<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper(array('form', 'url', 'tgl_indo'));
			if($this->session->userdata('is_logged_in')){
						// do something when exist
			}else{
				redirect("login");
			}
	}

	public function index()
	{
	}


	public function riwayatpasienibu()
	{
		$this->load->model('M_master');
		$data['row']=$this->M_master->getRiwayatKesehatanIbu();

    $data['main_content']="riwayat/riwayat_pasienibu";
		$this->load->view('template/main',$data);
	}

	public function riwayatpasienanak()
	{
		$this->load->model('M_master');
		$data['row']=$this->M_master->getRiwayatKesehatanAnak();

    $data['main_content']="riwayat/riwayat_pasienanak";
		$this->load->view('template/main',$data);
	}

	public function riwayatpersalinan()
	{
		$this->load->model('M_master');
		$data['row']=$this->M_master->getRiwayatPersalinan();

    $data['main_content']="riwayat/riwayat_persalinan";
		$this->load->view('template/main',$data);
	}

	public function riwayatprogramkb()
	{
		$this->load->model('M_master');
		$data['row']=$this->M_master->getRiwayatProgramKB();

    $data['main_content']="riwayat/riwayat_programkb";
		$this->load->view('template/main',$data);
	}

}
