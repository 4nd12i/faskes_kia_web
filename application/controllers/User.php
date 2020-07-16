<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$data['row']=$this->M_master->getPengguna();
		$data['karyawan']=$this->M_master->getDataKaryawan();
		$data['main_content']="user/user";
		$this->load->view('template/main',$data);
	}

	function error404(){
			$data['main_content']="error404";
			$this->load->view('template/main',$data);
	}

	function isiKolomNama(){
    $this->load->model('M_master');
    $id= $this->input->post('id');

    $nama=$this->M_master->getNamaKaryawan($id);
    echo "<div>"
			 . "<label>Nama"
		     . "<span style='color: red;'><b>*</b></span>"
			 . "</label>"
			 . "<input type='text' class='form-control' id='nama' name='nama' value='$nama' readonly='readonly'>"
			 . "</div>";
  	}

	function pengguna_add(){
			$this->load->model('M_master');

			$nik=$this->input->post('nik');
			$user=$this->input->post('username');
			$pass1=$this->input->post('password1');
			$pass2=$this->input->post('password2');
			$hak=$this->input->post('hak');

			if($pass1 <> $pass2){
					$this->session->set_flashdata('msg','<div class="alert alert-error">
									<a class="close" data-dismiss="alert">x</a>
									<strong>Gagal!</strong> Password tidak sama, silahkan inputkan kembali password dengan benar.
							</div>');

					// $url="user";
					// redirect($url);
			} else {

				$data= array (
						'USERNAME'=> $user,
						'NIK'=>$nik,
						'HAK'=>$hak,
						'PASSWORD'=>sha1(md5($pass1))
				);

				$insert=$this->M_master->insertPengguna($data);

				if($insert == "sukses"){
						$this->session->set_flashdata('msg','<div class="alert alert-success">
												<a class="close" data-dismiss="alert">x</a>
												<strong>Sukses! </strong> Pengguna berhasil Disimpan.
										</div>');
						$url="user";
						redirect($url);
				}else{
						$this->session->set_flashdata('msg','<div class="alert alert-error">
										<a class="close" data-dismiss="alert">x</a>
										<strong>Gagal!</strong> Pengguna gagal disimpan.
								</div>');
						$url="user";
						redirect($url);
				}
			}
	}

	function pengguna_edit(){
			$this->load->model('M_master');

			$nik=$this->input->post('nik');
			$user=$this->input->post('username');
			$pass1=$this->input->post('password1');
			$pass2=$this->input->post('password2');
			$hak=$this->input->post('hak');

			if($pass1 <> $pass2){
					$this->session->set_flashdata('msg','<div class="alert alert-error">
									<a class="close" data-dismiss="alert">x</a>
									<strong>Gagal!</strong> Password tidak sama, silahkan inputkan kembali password dengan benar.
							</div>');

					$url="user";
					redirect($url);
			} else {

				$data= array (
						'USERNAME'=> $user,
						'NIK'=>$nik,
						'HAK'=>$hak,
						'PASSWORD'=>sha1(md5($pass1))
				);

				$insert=$this->M_master->updatePengguna($data);

				if($insert == "sukses"){
						$this->session->set_flashdata('msg','<div class="alert alert-success">
												<a class="close" data-dismiss="alert">x</a>
												<strong>Sukses! </strong> Pengguna berhasil Disimpan.
										</div>');
						$url="user";
						redirect($url);
				}else{
						$this->session->set_flashdata('msg','<div class="alert alert-error">
										<a class="close" data-dismiss="alert">x</a>
										<strong>Gagal!</strong> Pengguna gagal disimpan.
								</div>');
						$url="user";
						redirect($url);
				}
			}
	}


	function pengguna_hapus(){
			$this->load->model('M_master');
			$id=$this->input->post('id');
			$data=array(
					'USERNAME'=>$id,
			);
			if($this->M_master->hapusPengguna($data)){
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
