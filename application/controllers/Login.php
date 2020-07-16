<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
  {
      parent::__construct();
			$this->load->helper(array('form', 'url', 'tgl_indo'));
  }

	public function index()
	{
		$this->load->view("login");
	}

	function error404(){
			$data['main_content']="error404";
			$this->load->view('template/main',$data);
	}

  function ceklogin(){
    $this->load->model('M_master');
    $username=$this->input->post('username');
    $password=$this->input->post('password');
    $query = $this->M_master->check_login('m_pengguna', array('username' => $username), array('password' => $password));
    if($query){
			$nik=$this->M_master->getNIKUserLogin($username);
			$nama=$this->M_master->getNAMAUserLogin($username);
			$hak=$this->M_master->getHAKUserLogin($username);
			$idbidan=$this->M_master->getIdBidanUserLogin($username);
			$tglmasukbidan=$this->M_master->getMasukBidanLogin($idbidan);
      $data=array(
          'username'=>$username,
          'is_logged_in'=> 'is_logged_in',
          'nik'=>$nik,
          'nama'=>$nama,
          'hak'=>$hak,
          'id_bidan'=>$idbidan,
          'tgl_masuk_bidan'=>$tglmasukbidan,
					'ST'=>1
      );

			$data_log=array(
					'id_bidan'=>$idbidan,
					'nama'=>$nama,
					'tanggal'=>date('Y-m-d'),
					'jam'=>date('h:i:s'),
					'jabatan'=>$hak,
					'status'=>"Login"
			);

			$insert=$this->M_master->insertLogAktifitas($data_log);

			if($insert == "sukses"){
				$this->session->set_userdata($data);
	      redirect('home');
			}else{
				$msg="<div class='alert alert-error alert-login'>
									Tidak bisa menambahkan data Log Aktifitas
							</div>";
				$this->session->set_flashdata('msg',$msg);
				redirect('login');
			}
    }
    else{
        $msg="<div class='alert alert-error alert-login'>
									Username/Password Anda Salah !!!
							</div>";
        $this->session->set_flashdata('msg',$msg);
        redirect('login');
    }

  }

  function logout(){
				// $username=$this->uri->segment(3);
				//
				// $nama=$this->M_master->getNAMAUserLogin($username);
				// echo $nama;
				// $hak=$this->M_master->getHAKUserLogin($username);
				// echo $hak;
				// $idbidan=$this->M_master->getIdBidanUserLogin($username);
				//
				// $data_log=array(
				// 		'id_bidan'=>$idbidan,
				// 		'nama'=>$nama,
				// 		'tanggal'=>date('Y-m-d'),
				// 		'jam'=>date('h:i:s'),
				// 		'jabatan'=>$hak,
				// 		'status'=>"Log Out"
				// );
				//
				// $insert=$this->M_master->insertLogAktifitas($data_log);
				//
				// if($insert == "sukses"){
					$this->session->unset_userdata('is_logged_in');
	        redirect("login");
				// }else{
				// 	$msg="<div class='alert alert-error alert-login'>
				// 						Tidak bisa menambahkan data Log Aktifitas
				// 				</div>";
				// }

  }

  function ubah_password(){
    $this->load->model('M_master');
    $username=$this->session->userdata('username');
    $dat=$this->M_master->getPenggunaByNIK($username);
    foreach($dat as $a){
      $data['username']=$a->USERNAME;
      $data['password']=$a->PASSWORD;
    }
    $data['main_content']="master/ubah_password";
    $this->load->view('template/main',$data);

  }

  function ubah_password_proses(){
    $this->load->model('M_master');
    $user=$this->input->post('username');
    $pass_lama_hid=$this->input->post('pass_lama_hid');
    $pass_lama = $this->input->post('pass_lama');
    $pass_baru1 = $this->input->post('pass_baru1');
    $pass_baru2 = $this->input->post('pass_baru2');

    if($pass_lama_hid <> sha1(md5($pass_lama))){
      $this->session->set_flashdata('msg','<div class="alert alert-error">
                    <a class="close" data-dismiss="alert">x</a>
                    <strong>Gagal!</strong> Password Lama Salah.
                </div>');

      $url="login/ubah_password";
      redirect($url);
    }

    if($pass_baru1 <> $pass_baru2){
            $this->session->set_flashdata('msg','<div class="alert alert-error">
                    <a class="close" data-dismiss="alert">x</a>
                    <strong>Gagal!</strong> Password Baru tidak sama, silahkan inputkan kembali password dengan benar.
                </div>');

            $url="login/ubah_password";
            redirect($url);
    }
    $data= array (
            'USERNAME'=> $user,
            'PASSWORD'=>sha1(md5($pass_baru1))
    );

    if($this->M_master->updatePengguna($data)){
      $this->session->set_flashdata('msg','<div class="alert alert-success">
                  <a class="close" data-dismiss="alert">x</a>
                  <strong>Sukses! </strong> Password berhasil diubah.
              </div>');
      $url="login/ubah_password";
            redirect($url);
    }else{
      $this->session->set_flashdata('msg','<div class="alert alert-error">
              <a class="close" data-dismiss="alert">x</a>
              <strong>Gagal!</strong> Password gagal dihapus.
          </div>');
      $url="login/ubah_password";
            redirect($url);
    }

  }
}
?>
