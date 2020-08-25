<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	
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
		$idpengaturan=1;
		$id="administrator";
		$data['detail']=$this->M_master->getUserAdministrator($id);
		$data['detailpengaturan']=$this->M_master->getPengaturan($idpengaturan);

    	$data['main_content']="setting/pengaturan";
		$this->load->view('template/main',$data);
	}

	public function user_update()
	{
		$this->load->model('M_master');

		$username=$this->input->post('username');
		$nik=$this->input->post('nik');
		$nama=$this->input->post('nama');
		$password=$this->input->post('password');
		$password1=$this->input->post('password1');
		$hak=$this->input->post('hak');
		// $fotouser=$this->_uploadPhotoUser();

		if($password == $password1){
			$data= array (
				'username'=>$username,
				'nik'=>$nik,
				'nama'=>$nama,
				'password'=>$password,
				'hak'=>$hak,
				// 'foto'=>$fotouser,
				'ST'=>1
			);

			$update=$this->M_master->updateUser($data);

			if($update == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
				<a class="close" data-dismiss="alert">x</a>
				<strong>SUKSES </strong> Data berhasil disimpan.
				</div>');
				$url="pengaturan";
				redirect($url);
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
				<a class="close" data-dismiss="alert">x</a>
				<strong>Gagal!</strong> Data gagal disimpan.
				</div>');
			}

		}else{
			$msg="<div class='alert alert-error alert-login'>
								Password yang anda tambahkan tidak sama
						</div>";
			$this->session->set_flashdata('msg',$msg);
		}
	}

	public function setting_update()
	{
		$this->load->model('M_master');

		$id=1;
		$namaaplikasi=$this->input->post('nama_aplikasi');
		$email=$this->input->post('email');
		$tlp=$this->input->post('tlp');
		$fax=$this->input->post('fax');
		$namaperusahaan=$this->input->post('nama_perusahaan');
		$alamat=$this->input->post('alamat');
		$web=$this->input->post('web');
		$logo="";

		$data= array (
			'id'=>$id,
			'nama_aplikasi'=>$namaaplikasi,
			'email'=>$email,
			'tlp'=>$tlp,
			'fax'=>$fax,
			'nama_perusahaan'=>$namaperusahaan,
			'alamat'=>$alamat,
			'web'=>$web,
			'logo'=>$logo
		);

		$update=$this->M_master->updatePengaturan($data);

		if($update == "sukses"){
			$this->session->set_flashdata('msg1','<div class="alert alert-success">
			<a class="close" data-dismiss="alert">x</a>
			<strong>SUKSES </strong> Data berhasil disimpan.
			</div>');
			$url="pengaturan";
			redirect($url);
		}else{
			$this->session->set_flashdata('msg1','<div class="alert alert-error">
			<a class="close" data-dismiss="alert">x</a>
			<strong>Gagal!</strong> Data gagal disimpan.
			</div>');
		}
	}

}

?>