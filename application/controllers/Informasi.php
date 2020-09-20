<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

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
		echo "informasi";
	}

	function error404(){
			$data['main_content']="error404";
			$this->load->view('template/main',$data);
	}

  public function semuaBeritaUtama()
	{
		$this->load->model('M_master');
		$data['row']=$this->M_master->getDataBidan();

  	$data['main_content']="informasi/beritaUtama";
		$this->load->view('template/main',$data);
	}

  public function tambahBeritaUtama()
	{

	}

  public function updateBeritaUtama()
	{

	}

  public function hapusBeritaUtama()
	{

	}


	public function semuaBeritaTerbaru()
	{
		$this->load->model('M_master');
		$data['row']=$this->M_master->getDataBeritaTerbaru();

  	$data['main_content']="informasi/beritaTerbaru";
		$this->load->view('template/main',$data);
	}

  public function tambahBeritaTerbaru()
	{
		$this->load->model('M_master');
		$data['idberita']=$this->M_master->getIdBerita();

  	$data['main_content']="informasi/beritaTerbaru_add";
		$this->load->view('template/main',$data);
	}

	public function BeritaTerbaruSave()
	{
		$this->load->model('M_master');

		$idberita=$this->input->post('idberita');
		$judul=$this->input->post('judul');
		$fotosampul=$this->input->post('fotosampul');
		$isi=$this->input->post('isi');
		$penulis=$this->input->post('penulis');
		$tanggal_posting=$this->input->post('tanggal_posting');

		$data= array (
				'judul'=>$judul,
				'fotosampul'=>$fotosampul,
				'penulis'=>$penulis,
				'isi'=>$isi,
				'tanggal_posting'=>$tanggal_posting,
				'ST'=>1
		);

		$insert=$this->M_master->insertBeritaTerbaru($data);

		if($insert == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>SUKSES </strong> Data berhasil disimpan.
								</div>');
				$url="informasi/semuaBeritaTerbaru";
				redirect($url);
		}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
								<a class="close" data-dismiss="alert">x</a>
								<strong>Gagal!</strong> Data gagal disimpan.
						</div>');
		}
	}

  public function editBeritaTerbaru()
	{
		$id=$this->uri->segment(3);
		$this->load->model('M_master');
		$data['detail']=$this->M_master->getBeritaTerbarubyID($id);

  	$data['main_content']="informasi/beritaTerbaru_edit";
		$this->load->view('template/main',$data);
	}

	public function updateBeritaTerbaru()
	{
		$this->load->model('M_master');

		$idberita=$this->input->post('idberita');
		$judul=$this->input->post('judul');
		$fotosampul=$this->input->post('fotosampul');
		$isi=$this->input->post('isi');
		$penulis=$this->input->post('penulis');
		$tanggal_update=$this->input->post('tanggal_update');

		$data= array (
				'id_berita'=>$idberita,
				'judul'=>$judul,
				'fotosampul'=>$fotosampul,
				'penulis'=>$penulis,
				'isi'=>$isi,
				'tanggal_posting'=>$tanggal_posting,
				'ST'=>1
		);

		$update=$this->M_master->updateBeritaTerbaru($data);

		if($update == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>SUKSES </strong> Data berhasil disimpan.
								</div>');
				$url="master/bidan";
				redirect($url);
		}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
								<a class="close" data-dismiss="alert">x</a>
								<strong>Gagal!</strong> Data gagal disimpan.
						</div>');
		}
	}

  public function hapusBeritaTerbaru()
	{
		$this->load->model('M_master');

		$idberita=$this->input->post('idberita');
		$judul=$this->input->post('judul');
		$fotosampul=$this->input->post('fotosampul');
		$isi=$this->input->post('isi');
		$penulis=$this->input->post('penulis');
		$tanggal_update=$this->input->post('tanggal_update');

		$data= array (
				'id_berita'=>$idberita,
				'judul'=>$judul,
				'fotosampul'=>$fotosampul,
				'penulis'=>$penulis,
				'isi'=>$isi,
				'tanggal_posting'=>$tanggal_posting,
				'ST'=>1
		);

		$update=$this->M_master->updateBeritaTerbaru($data);

		if($update == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>SUKSES </strong> Data berhasil disimpan.
								</div>');
				$url="master/bidan";
				redirect($url);
		}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
								<a class="close" data-dismiss="alert">x</a>
								<strong>Gagal!</strong> Data gagal disimpan.
						</div>');
		}
	}


	public function semuaTips()
	{
		$this->load->model('M_master');
		$data['row']=$this->M_master->getDataBidan();

  	$data['main_content']="informasi/tips";
		$this->load->view('template/main',$data);
	}

  public function tambahTips()
	{

	}

  public function updateTips()
	{

	}

  public function hapusTips()
	{

	}

}

 ?>
