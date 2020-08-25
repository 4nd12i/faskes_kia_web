<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

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
		// $this->load->view('welcome_message');
		echo shortdate_indo('2017-09-5');
		echo "<br/>";
		echo date_indo('2017-09-5');
		echo "<br/>";
		echo mediumdate_indo('2017-09-5');
		echo "<br/>";
		echo longdate_indo('2017-09-5');
		echo "<br/>";
		echo date('H:i:s');
	}

	public function user()
	{
		$this->load->model('M_master');
		$data['row']=$this->M_master->getDataUser();
    $data['main_content']="master/user";
		$this->load->view('template/main',$data);
	}

  public function bidan()
	{
		$this->load->model('M_master');
		$data['row']=$this->M_master->getDataBidan();

    	$data['main_content']="master/bidan";
		$this->load->view('template/main',$data);
	}

	public function pasien_ibu()
	{
		$this->load->model('M_master');
		$data['row']=$this->M_master->getDataPasienIbu();

  	$data['main_content']="master/pasien_ibu";
		$this->load->view('template/main',$data);
	}

	public function pasien_anak()
	{
		$this->load->model('M_master');
		$data['row']=$this->M_master->getDataPasienAnak();

    	$data['main_content']="master/pasien_anak";
		$this->load->view('template/main',$data);
	}

	public function bidan_detail_form()
	{
		$id=$this->uri->segment(3);
	  $this->load->model('M_master');
	  $data['detail']=$this->M_master->getBidanbyID($id);

		// Config Google Maps
		$this->load->library('googlemaps');
		$config=array();
		$config['center']="-7.157566, 112.655677";
		$config['zoom']=13;
		$config['map_height']="500px";
		$this->googlemaps->initialize($config);
		$marker=array();
		$marker['position']="-7.157566, 112.655677";
		$this->googlemaps->add_marker($marker);
		$data['map']=$this->googlemaps->create_map();

		$data['main_content']="master/bidan_detail";
		$this->load->view('template/main',$data);
	}

	public function user_bidan_detail_form()
	{
		$id=$this->uri->segment(3);
    $this->load->model('M_master');
    $data['detail']=$this->M_master->getBidanbyID($id);

		$data['main_content']="master/user_bidan_detail";
		$this->load->view('template/main',$data);
	}

	public function bidan_add_form()
	{
		// Config bidan add form
		$this->load->model('M_master');
		$data['idbidan']=$this->M_master->getIdBidan();

		// Config Google Maps
		$this->load->library('googlemaps');
		$config=array();
		$config['center']="-7.157566, 112.655677";
		$config['zoom']=13;
		$config['map_height']="500px";
		$this->googlemaps->initialize($config);
		$marker=array();
		$marker['position']="-7.157566, 112.655677";
		$this->googlemaps->add_marker($marker);
		$data['map']=$this->googlemaps->create_map();

    $data['main_content']="master/bidan_add";
		$this->load->view('template/main',$data);
	}

	public function pasienibu_add_form()
	{
		$this->load->model('M_master');
		$data['id_pasien_ibu']=$this->M_master->getIdPasienIbu();

		// Config Google Maps
		$this->load->library('googlemaps');
		$config=array();
		$config['center']="-7.157566, 112.655677";
		$config['zoom']=13;
		$config['map_height']="500px";
		$this->googlemaps->initialize($config);
		$marker=array();
		$marker['position']="-7.157566, 112.655677";
		$this->googlemaps->add_marker($marker);
		$data['map']=$this->googlemaps->create_map();

    $data['main_content']="master/pasien_ibu_add";
		$this->load->view('template/main',$data);
	}

	public function pasienanak_add_form()
	{
		$this->load->model('M_master');
		$data['id_pasien_anak']=$this->M_master->getIdPasienAnak();
    $data['main_content']="master/pasien_anak_add";
		$this->load->view('template/main',$data);
	}

	public function user_add_form()
	{
		$this->load->model('M_master');
		$data['bidan']=$this->M_master->getDataBidan();
    $data['main_content']="master/user_add";
		$this->load->view('template/main',$data);
	}

	public function bidan_save()
	{
		$this->load->model('M_master');

		$nosipb=$this->input->post('no_sipb');
		$nama=$this->input->post('nama');
		$noktp=$this->input->post('no_ktp');
		$tempatlahir=$this->input->post('tempat_lahir');
		$tgllahir=$this->input->post('tgl_lahir');
		$alamatktp=$this->input->post('alamat_ktp');
		$alamatdomisili=$this->input->post('alamat_domisili');
		$lokasibidan=$this->input->post('lokasi_bidan');
		$tlp=$this->input->post('tlp');
		$hp=$this->input->post('hp');
		$agama=$this->input->post('agama');
		$goldarah=$this->input->post('gol_darah');
		$pendidikanterakhir=$this->input->post('pendidikan_terakhir');
		$namasekolah=$this->input->post('nama_sekolah');
		$jurusan=$this->input->post('jurusan');
		$tglmasukbidan=$this->input->post('tgl_masuk_bidan');
		// $foto=$this->_uploadPhotoBidan();

		$data= array (
				'no_sipb'=> $nosipb,
				'nama'=>$nama,
				'no_ktp'=>$noktp,
				'tempat_lahir'=>$tempatlahir,
				'tgl_lahir'=>$tgllahir,
				'alamat_ktp'=>$alamatktp,
				'alamat_domisili'=>$alamatdomisili,
				'lokasi_bidan'=>$lokasibidan,
				'tlp'=>$tlp,
				'hp'=>$hp,
				'agama'=>$agama,
				'gol_darah'=>$goldarah,
				'pendidikan_terakhir'=>$pendidikanterakhir,
				'nama_sekolah'=>$namasekolah,
				'jurusan'=>$jurusan,
				'tgl_masuk_bidan'=>$tglmasukbidan,
				'ST'=>1
		);

		$insert=$this->M_master->insertBidan($data);

		if($insert == "sukses"){
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

	public function pasienibu_save()
	{
		$this->load->model('M_master');

		$nik=$this->input->post('nik');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$lokasipasien=$this->input->post('lokasi_pasien');
		$tempatlahir=$this->input->post('tempat_lahir');
		$tgllahir=$this->input->post('tgl_lahir');
		$tlp=$this->input->post('tlp');
		$hp=$this->input->post('hp');
		$kehamilanke=$this->input->post('kehamilan_ke');
		$usia=$this->input->post('usia');
		$agama=$this->input->post('agama');
		$pendidikan=$this->input->post('pendidikan');
		$goldarah=$this->input->post('gol_darah');
		$pekerjaan=$this->input->post('pekerjaan');
		$nojkn=$this->input->post('no_jkn');

		$data= array (
				'nik'=> $nik,
				'nama'=>$nama,
				'alamat'=>$alamat,
				'lokasi_pasien'=>$lokasipasien,
				'tempat_lahir'=>$tempatlahir,
				'tgl_lahir'=>$tgllahir,
				'tlp'=>$tlp,
				'hp'=>$hp,
				'kehamilan_ke'=>$kehamilanke,
				'usia'=>$usia,
				'agama'=>$agama,
				'pendidikan'=>$pendidikan,
				'gol_darah'=>$goldarah,
				'pekerjaan'=>$pekerjaan,
				'no_jkn'=>$nojkn,
				'ST'=>1
		);

		$insert=$this->M_master->insertPasienIbu($data);

		if($insert == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>SUKSES </strong> Data berhasil disimpan.
								</div>');
				$url="master/pasien_ibu";
				redirect($url);
		}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
								<a class="close" data-dismiss="alert">x</a>
								<strong>Gagal!</strong> Data gagal disimpan.
						</div>');
		}
	}

	public function pasienanak_save()
	{
		$this->load->model('M_master');

		$nama=$this->input->post('nama');
		$namaayah=$this->input->post('nama_ayah');
		$namaibu=$this->input->post('nama_ibu');
		$alamatorangtua=$this->input->post('alamat_orangtua');
		$jeniskelamin=$this->input->post('jenis_kelamin');
		$tempatlahir=$this->input->post('tempat_lahir');
		$tgllahir=$this->input->post('tgl_lahir');
		$anakke=$this->input->post('anak_ke');
		$beratlahir=$this->input->post('berat_lahir');
		$panjangbadan=$this->input->post('panjang_badan');

		$data= array (
				'nama'=>$nama,
				'nama_ayah'=>$namaayah,
				'nama_ibu'=>$namaibu,
				'alamat_orangtua'=>$alamatorangtua,
				'jenis_kelamin'=>$jeniskelamin,
				'tempat_lahir'=>$tempatlahir,
				'tgl_lahir'=>$tgllahir,
				'anak_ke'=>$anakke,
				'berat_lahir'=>$beratlahir,
				'panjang_badan'=>$panjangbadan,
				'ST'=>1
		);

		$insert=$this->M_master->insertPasienAnak($data);

		if($insert == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>SUKSES </strong> Data berhasil disimpan.
								</div>');
				$url="master/pasien_anak";
				redirect($url);
		}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
								<a class="close" data-dismiss="alert">x</a>
								<strong>Gagal!</strong> Data gagal disimpan.
						</div>');
		}
	}

	public function user_save()
	{
		$this->load->model('M_master');

		$username=$this->input->post('username');
		$nik=$this->input->post('nik');
		$nama=$this->input->post('nama');
		$password=$this->input->post('password');
		$password1=$this->input->post('password1');
		$hak=$this->input->post('hak');
		$idbidan=$this->input->post('id_bidan');
		// $fotouser=$this->_uploadPhotoUser();

		if($password == $password1){
			$data= array (
				'username'=>$username,
				'nik'=>$nik,
				'nama'=>$nama,
				'password'=>$password,
				'hak'=>$hak,
				'id_bidan'=>$idbidan,
				// 'foto'=>$fotouser,
				'ST'=>1
			);

			$insert=$this->M_master->insertUser($data);

			if($insert == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
				<a class="close" data-dismiss="alert">x</a>
				<strong>SUKSES </strong> Data berhasil disimpan.
				</div>');
				$url="master/user";
				redirect($url);
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
				<a class="close" data-dismiss="alert">x</a>
				<strong>Gagal!</strong> Data gagal disimpan.
				</div>');
			}

		}else{
			$this->session->set_flashdata('msg',$msg);
			$msg="<div class='alert alert-error alert-login'>
								Password yang anda tambahkan tidak sama
						</div>";
		}

	}

	public function bidan_update_form()
	{
		$id=$this->uri->segment(3);
    $this->load->model('M_master');
    $data['detail']=$this->M_master->getBidanbyID($id);

		// Config Google Maps
		$this->load->library('googlemaps');
		$config=array();
		$config['center']="-7.157566, 112.655677";
		$config['zoom']=13;
		$config['map_height']="500px";
		$this->googlemaps->initialize($config);
		$marker=array();
		$marker['position']="-7.157566, 112.655677";
		$this->googlemaps->add_marker($marker);
		$data['map']=$this->googlemaps->create_map();

		$data['main_content']="master/bidan_edit";
		$this->load->view('template/main',$data);
	}

	public function pasienibu_update_form()
	{
		$id=$this->uri->segment(3);
    $this->load->model('M_master');
    $data['detail']=$this->M_master->getPasienIbubyID($id);

		// Config Google Maps
		$this->load->library('googlemaps');
		$config=array();
		$config['center']="-7.157566, 112.655677";
		$config['zoom']=13;
		$config['map_height']="500px";
		$this->googlemaps->initialize($config);
		$marker=array();
		$marker['position']="-7.157566, 112.655677";
		$this->googlemaps->add_marker($marker);
		$data['map']=$this->googlemaps->create_map();

		$data['main_content']="master/pasien_ibu_edit";
		$this->load->view('template/main',$data);
	}

	public function pasienanak_update_form()
	{
		$id=$this->uri->segment(3);
	    $this->load->model('M_master');
	    $data['detail']=$this->M_master->getPasienAnakbyID($id);

		$data['main_content']="master/pasien_anak_edit";
		$this->load->view('template/main',$data);
	}

	public function user_update_form()
	{
		$id=$this->uri->segment(3);
	    $this->load->model('M_master');
	    $data['detail']=$this->M_master->getUserbyID($id);

		$data['main_content']="master/user_edit";
		$this->load->view('template/main',$data);
	}

	public function bidan_update()
	{
		$this->load->model('M_master');

		$idbidan=$this->input->post('id_bidan');
		$nosipb=$this->input->post('no_sipb');
		$nama=$this->input->post('nama');
		$noktp=$this->input->post('no_ktp');
		$tempatlahir=$this->input->post('tempat_lahir');
		$tgllahir=$this->input->post('tgl_lahir');
		$alamatktp=$this->input->post('alamat_ktp');
		$alamatdomisili=$this->input->post('alamat_domisili');
		$lokasibidan=$this->input->post('lokasi_bidan');
		$tlp=$this->input->post('tlp');
		$hp=$this->input->post('hp');
		$agama=$this->input->post('agama');
		$goldarah=$this->input->post('gol_darah');
		$pendidikanterakhir=$this->input->post('pendidikan_terakhir');
		$namasekolah=$this->input->post('nama_sekolah');
		$jurusan=$this->input->post('jurusan');
		$foto=$this->_uploadPhotoBidan();

		$data= array (
				'id_bidan'=> $idbidan,
				'no_sipb'=> $nosipb,
				'nama'=>$nama,
				'no_ktp'=>$noktp,
				'tempat_lahir'=>$tempatlahir,
				'tgl_lahir'=>$tgllahir,
				'alamat_ktp'=>$alamatktp,
				'alamat_domisili'=>$alamatdomisili,
				'lokasi_bidan'=>$lokasibidan,
				'tlp'=>$tlp,
				'hp'=>$hp,
				'agama'=>$agama,
				'gol_darah'=>$goldarah,
				'pendidikan_terakhir'=>$pendidikanterakhir,
				'nama_sekolah'=>$namasekolah,
				'jurusan'=>$jurusan,
				'foto'=>$foto,
				'ST'=>1
		);

		$update=$this->M_master->updateBidan($data);

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

	public function pasienibu_update()
	{
		$this->load->model('M_master');

		$idpasienibu=$this->input->post('id_pasien_ibu');
		$nik=$this->input->post('nik');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$lokasipasien=$this->input->post('lokasi_pasien');
		$tempatlahir=$this->input->post('tempat_lahir');
		$tgllahir=$this->input->post('tgl_lahir');
		$tlp=$this->input->post('tlp');
		$hp=$this->input->post('hp');
		$kehamilanke=$this->input->post('kehamilan_ke');
		$usia=$this->input->post('usia');
		$agama=$this->input->post('agama');
		$pendidikan=$this->input->post('pendidikan');
		$goldarah=$this->input->post('gol_darah');
		$pekerjaan=$this->input->post('pekerjaan');
		$nojkn=$this->input->post('no_jkn');

		$data= array (
				'id_pasien_ibu'=>$idpasienibu,
				'nik'=>$nik,
				'nama'=>$nama,
				'alamat'=>$alamat,
				'lokasi_pasien'=>$lokasipasien,
				'tempat_lahir'=>$tempatlahir,
				'tgl_lahir'=>$tgllahir,
				'tlp'=>$tlp,
				'hp'=>$hp,
				'kehamilan_ke'=>$kehamilanke,
				'usia'=>$usia,
				'agama'=>$agama,
				'pendidikan'=>$pendidikan,
				'gol_darah'=>$goldarah,
				'pekerjaan'=>$pekerjaan,
				'no_jkn'=>$nojkn,
		);

		$update=$this->M_master->updatePasienIbu($data);

		if($update == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>SUKSES </strong> Data berhasil disimpan.
								</div>');
				$url="master/pasien_ibu";
				redirect($url);
		}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
								<a class="close" data-dismiss="alert">x</a>
								<strong>Gagal!</strong> Data gagal disimpan.
						</div>');
		}
	}

	public function pasienanak_update()
	{
		$this->load->model('M_master');

		$idpasienanak=$this->input->post('id_pasien_anak');
		$nama=$this->input->post('nama');
		$namaayah=$this->input->post('nama_ayah');
		$namaibu=$this->input->post('nama_ibu');
		$alamatorangtua=$this->input->post('alamat_orangtua');
		$jeniskelamin=$this->input->post('jenis_kelamin');
		$tempatlahir=$this->input->post('tempat_lahir');
		$tgllahir=$this->input->post('tgl_lahir');
		$anakke=$this->input->post('anak_ke');
		$beratlahir=$this->input->post('berat_lahir');
		$panjangbadan=$this->input->post('panjang_badan');

		$data= array (
				'id_pasien_anak'=>$idpasienanak,
				'nama'=>$nama,
				'nama_ayah'=>$namaayah,
				'nama_ibu'=>$namaibu,
				'alamat_orangtua'=>$alamatorangtua,
				'jenis_kelamin'=>$jeniskelamin,
				'tempat_lahir'=>$tempatlahir,
				'tgl_lahir'=>$tgllahir,
				'anak_ke'=>$anakke,
				'berat_lahir'=>$beratlahir,
				'panjang_badan'=>$panjangbadan
		);

		$update=$this->M_master->updatePasienAnak($data);

		if($update == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>SUKSES </strong> Data berhasil disimpan.
								</div>');
				$url="master/pasien_anak";
				redirect($url);
		}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
								<a class="close" data-dismiss="alert">x</a>
								<strong>Gagal!</strong> Data gagal disimpan.
						</div>');
		}
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
				$url="master/user";
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

	public function bidan_delete_form()
	{
		$id=$this->uri->segment(3);
		$this->load->model('M_master');
		$data['detail']=$this->M_master->getBidanbyID($id);

    $data['main_content']="master/bidan_hapus";
		$this->load->view('template/main',$data);
	}

	public function pasienibu_delete_form()
	{
		$id=$this->uri->segment(3);
		$this->load->model('M_master');
		$data['detail']=$this->M_master->getPasienIbubyID($id);

    $data['main_content']="master/pasien_ibu_hapus";
		$this->load->view('template/main',$data);
	}

	public function pasienanak_delete_form()
	{
		$id=$this->uri->segment(3);
		$this->load->model('M_master');
		$data['detail']=$this->M_master->getPasienAnakbyID($id);

    $data['main_content']="master/pasien_anak_hapus";
		$this->load->view('template/main',$data);
	}

	public function user_delete_form()
	{
		$id=$this->uri->segment(3);
		$this->load->model('M_master');
		$data['detail']=$this->M_master->getUserbyID($id);

    $data['main_content']="master/user_hapus";
		$this->load->view('template/main',$data);
	}

	public function bidan_delete()
	{
		$this->load->model('M_master');
		$id=$this->input->post('id_bidan');
		$data=array(
					'id_bidan'=>$id,
					'ST'=>0
		);

		$update=$this->M_master->updateBidan($data);

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
		// if($this->M_master->hapusBidan($data)){
		// 	$this->session->set_flashdata('msg','<div class="alert alert-success">
		// 			<a class="close" data-dismiss="alert">x</a>
		// 			<strong>Sukses! </strong> Data berhasil dihapus.
		// 	</div>');
		// 	$url="master/bidan";
		// 	redirect($url);
		// }else{
		// 	$this->session->set_flashdata('msg','<div class="alert alert-error">
		// 			<a class="close" data-dismiss="alert">x</a>
		// 			<strong>Gagal!</strong> Data gagal dihapus.
		// 	</div>');
		// }
	}

	public function pasienibu_delete()
	{
		$this->load->model('M_master');
		$id=$this->input->post('id_pasien_ibu');
		$data=array(
					'id_pasien_ibu'=>$id,
					'ST'=>0
		);

		$update=$this->M_master->updatePasienIbu($data);

		if($update == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>SUKSES </strong> Data berhasil disimpan.
								</div>');
				$url="master/pasien_ibu";
				redirect($url);
		}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
								<a class="close" data-dismiss="alert">x</a>
								<strong>Gagal!</strong> Data gagal disimpan.
						</div>');
		}
		// if($this->M_master->hapusBidan($data)){
		// 	$this->session->set_flashdata('msg','<div class="alert alert-success">
		// 			<a class="close" data-dismiss="alert">x</a>
		// 			<strong>Sukses! </strong> Data berhasil dihapus.
		// 	</div>');
		// 	$url="master/bidan";
		// 	redirect($url);
		// }else{
		// 	$this->session->set_flashdata('msg','<div class="alert alert-error">
		// 			<a class="close" data-dismiss="alert">x</a>
		// 			<strong>Gagal!</strong> Data gagal dihapus.
		// 	</div>');
		// }
	}

	public function pasienanak_delete()
	{
		$this->load->model('M_master');
		$id=$this->input->post('id_pasien_anak');
		$data=array(
					'id_pasien_anak'=>$id,
					'ST'=>0
		);

		$update=$this->M_master->updatePasienAnak($data);

		if($update == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>SUKSES </strong> Data berhasil disimpan.
								</div>');
				$url="master/pasien_anak";
				redirect($url);
		}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
								<a class="close" data-dismiss="alert">x</a>
								<strong>Gagal!</strong> Data gagal disimpan.
						</div>');
		}
		// if($this->M_master->hapusBidan($data)){
		// 	$this->session->set_flashdata('msg','<div class="alert alert-success">
		// 			<a class="close" data-dismiss="alert">x</a>
		// 			<strong>Sukses! </strong> Data berhasil dihapus.
		// 	</div>');
		// 	$url="master/bidan";
		// 	redirect($url);
		// }else{
		// 	$this->session->set_flashdata('msg','<div class="alert alert-error">
		// 			<a class="close" data-dismiss="alert">x</a>
		// 			<strong>Gagal!</strong> Data gagal dihapus.
		// 	</div>');
		// }
	}

	public function user_delete()
	{
		$this->load->model('M_master');
		$id=$this->input->post('username');
		$data=array(
					'username'=>$id,
					'ST'=>0
		);

		if($this->M_master->hapusUser($data)){
			$this->session->set_flashdata('msg','<div class="alert alert-success">
					<a class="close" data-dismiss="alert">x</a>
					<strong>Sukses! </strong> Data berhasil dihapus.
			</div>');
			$url="master/user";
			redirect($url);
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-error">
					<a class="close" data-dismiss="alert">x</a>
					<strong>Gagal!</strong> Data gagal dihapus.
			</div>');
		}
	}

	private function _uploadPhotoBidan(){
		$config['upload_path']          = './application/upload/fotoprofile/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $foto;
		$config['overwrite']			      = true;
		$config['max_size']             = 1024; // 1MB
		$config['max_width']            = 128;
		$config['max_height']           = 128;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
				return $this->upload->data("file_name");
		}

		print_r($this->upload->display_errors());
	}

	private function _uploadPhotoUser(){
		$config['upload_path']          = './application/upload/fotoprofile/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $fotouser;
		$config['overwrite']			      = true;
		$config['max_size']             = 1024; // 1MB
		$config['max_width']            = 128;
		$config['max_height']           = 128;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
				return $this->upload->data("file_name");
		}

		print_r($this->upload->display_errors());
	}

	function isiKolomNama(){
    $this->load->model('M_master');
    $id= $this->input->post('id');

    $nama=$this->M_master->getDataNamaBidan($id);
    echo "
			<div class='form-group'>
				<label>Nama Lengkap
					<span style='color: red;'><b>*</b></span>
				</label>
				<input type='text' class='form-control' name='nama' value='$nama' readonly required>
			</div>
    ";
  }

	function isiKolomIdBidan(){
    $this->load->model('M_master');
    $id= $this->input->post('id');

    $idbidan=$this->M_master->getDataIdBidan($id);
    echo "<div class='form-group'>
						<input type='hidden' class='form-control' name='id_bidan' value='$idbidan' readonly required>
					</div>
    ";
  }
}
