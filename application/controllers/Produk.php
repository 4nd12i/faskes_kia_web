<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('m_master');
		$data['row']=$this->m_master->getDataProduk();
		$data['bag']=$this->m_master->getDataBagian();
		$data['main_content']="produk/produk";
		$this->load->view('template/main',$data);
	}

	function error404(){
			$data['main_content']="error404";
			$this->load->view('template/main',$data);
	}

	// function isiKolomBagian(){
  //   $this->load->model('m_master');
  //   $id=$this->input->post('id');
  //   $data['row']=$this->m_master->getDataProdukByBagian($id);
	// 	echo $data["NAMA_BAG"];
	//
  // }

  public function tambahproduk()
	{
		$this->load->model('m_master');

		$kodeproduk=$this->input->post('kodeproduk');
		$namaproduk=$this->input->post('namaproduk');
		$idbag=$this->input->post('idbag');

		$data= array (
				'kodeproduk'=> $kodeproduk,
				'namaproduk'=>$namaproduk,
				'id_bag'=>$idbag
		);

		$insert=$this->m_master->insertProduk($data);

		if($insert == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>Sukses! </strong> Pengguna berhasil Disimpan.
								</div>');
				$url="produk";
				redirect($url);
		}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
								<a class="close" data-dismiss="alert">x</a>
								<strong>Gagal!</strong> Pengguna gagal disimpan.
						</div>');
				$url="produk";
				redirect($url);
		}

	}

  public function editproduk()
	{

	}

  public function hapusproduk()
	{
		$this->load->model('m_master');
		$id=$this->input->post('id');
		$data=array(
				'kodeproduk'=>$id,
		);
		if($this->m_master->hapusProduk($data)){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>Sukses! </strong> Data berhasil dihapus.
								</div>');
		}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
								<a class="close" data-dismiss="alert">x</a>
								<strong>Gagal!</strong> Data gagal dihapus.
						</div>');
		}
	}

}

 ?>
