<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('M_master');
		$data['detailbidan']=$this->M_master->getJumlahDataBidan();
		$data['detailibu']=$this->M_master->getJumlahDataPasienIbu();
		$data['detailanak']=$this->M_master->getJumlahDataPasienAnak();
		$data['jumlahlayanankesehatanibu']=$this->M_master->getJumlahLayananKesehatanIbu();
		$data['jumlahlayanankesehatananak']=$this->M_master->getJumlahLayananKesehatanAnak();
		$data['jumlahlayananpersalinan']=$this->M_master->getJumlahLayananPersalinan();
		$data['jumlahlayananprogramkb']=$this->M_master->getJumlahLayananProgramKB();
		$data['rowlog']=$this->M_master->getLogAktifitasLogin();
		$data['waktu'] = date('H:i:s');
		$data['tanggal'] = date('Y-m-d');
		$data['datetime'] = date('Y-m-d H:i:s');
		
		$data['main_content']="home";
		$this->load->view('template/main',$data);
	}

	function error404(){
			$data['main_content']="error404";
			$this->load->view('template/main',$data);
	}
}
