<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

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
		// $data['karyawan']=$this->M_master->getDataKaryawanOperator();
		// $data['groupleader']=$this->M_master->getDataKaryawanGroupleader();
		// $data['main_content']="transaksi/input_pcsrate";
		// $this->load->view('template/main',$data);
	}

  function error404(){
    $data['main_content']="error404";
    $this->load->view('template/main',$data);
  }

  public function catatan_pasienibu()
	{
		$this->load->model('M_master');
		$data['pasienibu']=$this->M_master->getDataPasienIbu();
		$data['main_content']="transaksi/catatan_pasien_ibu";
		$this->load->view('template/main',$data);
	}

  public function catatan_pasienibu_add()
	{
		$this->load->model('M_master');
		$data['pasienibu']=$this->M_master->getDataPasienIbu();
		$data['main_content']="transaksi/catatan_pasien_ibu_add";
		$this->load->view('template/main',$data);
	}

  public function catatan_pasienibu_hasil()
	{
		$this->load->model('M_master');
    $idpasienibu=$this->input->post('id_pasien_ibu');
    $data['detail']=$this->M_master->getPasienIbubyID($idpasienibu);
		$data['row']=$this->M_master->getHistoryKesehatanIbu($idpasienibu);
		$data['main_content']="transaksi/catatan_pasienibu_hasil";
		$this->load->view('template/main',$data);
	}

  public function catatan_pasienibu_detail_form()
	{
		$id=$this->uri->segment(3);
	  $this->load->model('M_master');
	  $data['detail']=$this->M_master->getCatatanKesehatanIbubyID($id);

		$data['main_content']="transaksi/catatan_pasien_ibu_detail";
		$this->load->view('template/main',$data);
	}

  public function catatan_pasienanak()
	{
		$this->load->model('M_master');
		$data['pasienanak']=$this->M_master->getDataPasienAnak();
		$data['main_content']="transaksi/catatan_pasien_anak";
		$this->load->view('template/main',$data);
	}

  public function catatan_pasienanak_add()
	{
		$this->load->model('M_master');
		$data['pasienanak']=$this->M_master->getDataPasienAnak();
		$data['main_content']="transaksi/catatan_pasien_anak_add";
		$this->load->view('template/main',$data);
	}

  public function catatan_pasienanak_hasil()
	{
		$this->load->model('M_master');
    $idpasienanak=$this->input->post('id_pasien_anak');
    $data['detail']=$this->M_master->getPasienAnakbyID($idpasienanak);
		$data['row']=$this->M_master->getHistoryImunisasiAnak($idpasienanak);
		$data['main_content']="transaksi/catatan_pasienanak_hasil";
		$this->load->view('template/main',$data);
	}

  public function catatan_pasienanak_detail_form()
	{
		$id=$this->uri->segment(3);
	  $this->load->model('M_master');
	  $data['detail']=$this->M_master->getCatatanImunisasiAnakbyID($id);

		$data['main_content']="transaksi/catatan_pasien_anak_detail";
		$this->load->view('template/main',$data);
	}

  public function catatan_programkb_add()
	{
		$this->load->model('M_master');
		// $data['pasienanak']=$this->M_master->getDataPasienAnak();
		$data['main_content']="transaksi/catatan_programkb_add";
		$this->load->view('template/main',$data);
	}

  public function catatan_persalinan_add()
	{
		$this->load->model('M_master');
    $data['pasienibu']=$this->M_master->getDataPasienIbu();
		$data['main_content']="transaksi/catatan_persalinan_add";
		$this->load->view('template/main',$data);
	}

  public function pasienibu_save()
	{
    $this->load->model('M_master');

		$idpasienibu=$this->input->post('id_pasien_ibu');
		$idbidan=$this->input->post('id_bidan');
		$hpht=$this->input->post('hpht');
		$htp=$this->input->post('htp');
		$tinggibadan=$this->input->post('tinggi_badan');
		$beratbadan=$this->input->post('berat_badan');
		$riwayatpenyakit=$this->input->post('riwayat_penyakit');
		$tglperiksa=$this->input->post('tgl_periksa');
		$keluhansekarang=$this->input->post('keluhan_sekarang');
		$tekanandarah=$this->input->post('tekanan_darah');
		$umurkehamilan=$this->input->post('umur_kehamilan');
		$tinggifundus=$this->input->post('tinggi_fundus');
		$letakjanin=$this->input->post('letak_janin');
		$denyutjantung=$this->input->post('denyut_jantung');
		$kakibengkak=$this->input->post('kaki_bengkak');
		$berivitamin=$this->input->post('beri_vitamin');
		$nasihat=$this->input->post('nasihat');
		$kapankembali=$this->input->post('kapan_kembali');

		$data= array (
				'id_pasien_ibu'=> $idpasienibu,
				'id_bidan'=>$idbidan,
				'hpht'=>$hpht,
				'htp'=>$htp,
				'tinggi_badan'=>$tinggibadan,
				'berat_badan'=>$beratbadan,
				'riwayat_penyakit'=>$riwayatpenyakit,
				'tgl_periksa'=>$tglperiksa,
				'keluhan_sekarang'=>$keluhansekarang,
				'tekanan_darah'=>$tekanandarah,
				'umur_kehamilan'=>$umurkehamilan,
				'tinggi_fundus'=>$tinggifundus,
				'letak_janin'=>$letakjanin,
				'denyut_jantung'=>$denyutjantung,
				'kaki_bengkak'=>$kakibengkak,
				'beri_vitamin'=>$berivitamin,
				'nasihat'=>$nasihat,
				'kapan_kembali'=>$kapankembali,
				'ST'=>1
		);

		$insert=$this->M_master->insertCatatanKesehatanIbu($data);

		if($insert == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>SUKSES </strong> Data berhasil disimpan.
								</div>');
				$url="transaksi/catatan_pasienibu_add";
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

		$idpasienanak=$this->input->post('id_pasien_anak');
		$idbidan=$this->input->post('id_bidan');
		$tglperiksa=$this->input->post('tgl_periksa');
		$usia=$this->input->post('usia');
		$tinggibadan=$this->input->post('tinggi_badan');
		$beratbadan=$this->input->post('berat_badan');
		$jenisimunisasi=$this->input->post('jenis_imunisasi');
		$keterangan=$this->input->post('keterangan');


		$data= array (
				'id_pasien_anak'=> $idpasienanak,
				'id_bidan'=>$idbidan,
				'tgl_periksa'=>$tglperiksa,
        'usia'=>$usia,
				'tinggi_badan'=>$tinggibadan,
				'berat_badan'=>$beratbadan,
				'jenis_imunisasi'=>$jenisimunisasi,
				'keterangan'=>$keterangan,
				'ST'=>1
		);

		$insert=$this->M_master->insertCatatanKesehatanAnak($data);

		if($insert == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>SUKSES </strong> Data berhasil disimpan.
								</div>');
				$url="transaksi/catatan_pasienanak_add";
				redirect($url);
		}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
								<a class="close" data-dismiss="alert">x</a>
								<strong>Gagal!</strong> Data gagal disimpan.
						</div>');
		}
	}

  public function persalinan_save()
	{
    $this->load->model('M_master');

		$idpasienibu=$this->input->post('id_pasien_ibu');
		$idbidan=$this->input->post('id_bidan');
		$tglpersalinan=$this->input->post('tgl_persalinan');
		$usiakehamilan=$this->input->post('usia_kehamilan');
		$penolongpersalinan=$this->input->post('penolong_persalinan');
		$carapersalinan=$this->input->post('cara_persalinan');
		$keadaanibu=$this->input->post('keadaan_ibu');


		$data= array (
				'id_pasien_ibu'=> $idpasienibu,
				'id_bidan'=>$idbidan,
				'tgl_persalinan'=>$tglpersalinan,
        'usia_kehamilan'=>$usiakehamilan,
				'penolong_persalinan'=>$penolongpersalinan,
				'cara_persalinan'=>$carapersalinan,
				'keadaan_ibu'=>$keadaanibu,
				'ST'=>1
		);

		$insert=$this->M_master->insertCatatanPersalinan($data);

		if($insert == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>SUKSES </strong> Data berhasil disimpan.
								</div>');
				$url="transaksi/catatan_persalinan_add";
				redirect($url);
		}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
								<a class="close" data-dismiss="alert">x</a>
								<strong>Gagal!</strong> Data gagal disimpan.
						</div>');
		}
	}

  public function programkb_save()
	{
    $this->load->model('M_master');

		$noregistrasi=$this->input->post('no_registrasi');
		$namapeserta=$this->input->post('nama_peserta');
		$usia=$this->input->post('usia');
		$suamiistri=$this->input->post('suami_istri');
		$alamat=$this->input->post('alamat');
		$tempatpelayanan=$this->input->post('tempat_pelayanan');
		$metodekontrasepsi=$this->input->post('metode_kontrasepsi');
		$tglmulai=$this->input->post('tgl_mulai');
		$tgltindakan=$this->input->post('tgl_tindakan');
		$tglkembali=$this->input->post('tgl_kembali');
		$keterangan=$this->input->post('keterangan');


		$data= array (
				'no_registrasi'=> $noregistrasi,
				'nama_peserta'=>$namapeserta,
				'usia'=>$usia,
        'suami_istri'=>$suamiistri,
				'alamat'=>$alamat,
				'tempat_pelayanan'=>$tempatpelayanan,
        'metode_kontrasepsi'=>$metodekontrasepsi,
				'tgl_mulai'=>$tglmulai,
				'tgl_tindakan'=>$tgltindakan,
				'tgl_kembali'=>$tglkembali,
				'keterangan'=>$keterangan,
				'ST'=>1
		);

		$insert=$this->M_master->insertCatatanProgramKB($data);

		if($insert == "sukses"){
				$this->session->set_flashdata('msg','<div class="alert alert-success">
										<a class="close" data-dismiss="alert">x</a>
										<strong>SUKSES </strong> Data berhasil disimpan.
								</div>');
				$url="transaksi/catatan_programkb_add";
				redirect($url);
		}else{
				$this->session->set_flashdata('msg','<div class="alert alert-error">
								<a class="close" data-dismiss="alert">x</a>
								<strong>Gagal!</strong> Data gagal disimpan.
						</div>');
		}
	}

  public function isiKolomIdPasienIbu(){
    $this->load->model('M_master');
    $id= $this->input->post('id');

    $idpasienibu=$this->M_master->getDataIdPasienIbu($id);
    echo "
        <input type='hidden' class='form-control' value='$idpasienibu' name='id_pasien_ibu' required>
      ";
  }

  public function isiKolomIdPasienAnak(){
    $this->load->model('M_master');
    $id= $this->input->post('id');

    $idpasienanak=$this->M_master->getDataIdPasienAnak($id);
    echo "
        <input type='hidden' class='form-control' value='$idpasienanak' name='id_pasien_anak' required>
      ";
  }

  public function isiKolomNama(){
    $this->load->model('M_master');
    $id= $this->input->post('id');

    $nama=$this->M_master->getDataNamaPasienIbu($id);
    echo "
        <label>Nama Pasien
        </label>
        <input type='text' class='form-control input-lg' value='$nama' name='nama' readonly>
      ";
  }

	public function isiKolomUsia(){
    $this->load->model('M_master');
    $id= $this->input->post('id');

    $usia=$this->M_master->getDataUsiaPasienIbu($id);
    echo "
          <label>Usia
          </label>
          <input type='text' class='form-control input-lg' value='$usia' name='usia' readonly>
    ";
  }

  public function isiKolomPekerjaan(){
    $this->load->model('M_master');
    $id= $this->input->post('id');

    $pekerjaan=$this->M_master->getDataPekerjaanPasienIbu($id);
    echo "
        <label>Pekerjaan
        </label>
        <input type='text' class='form-control input-lg' value='$pekerjaan' name='pekerjaan' readonly>
      ";
  }

	public function isiKolomKehamilan(){
    $this->load->model('M_master');
    $id= $this->input->post('id');

    $kehamilan=$this->M_master->getDataKehamilanPasienIbu($id);
    echo "
          <label>Kehamilan Ke
          </label>
          <input type='text' class='form-control input-lg' value='$kehamilan' name='kehamilan_ke' readonly>
    ";
  }

	public function isiKolomNoJkn(){
    $this->load->model('M_master');
    $id= $this->input->post('id');

    $nojkn=$this->M_master->getDataNoJknPasienIbu($id);
    echo "
          <label>No JKN
          </label>
          <input type='text' class='form-control input-lg' value='$nojkn' name='no_jkn' readonly>
    ";
  }

	public function isiKolomNamaAyah(){
    $this->load->model('M_master');
    $id= $this->input->post('id');

    $namaayah=$this->M_master->getDataNamaAyah($id);
    echo "
        <label>Nama Ayah
          </label>
        <input type='text' class='form-control' value='$namaayah' name='nama_ayah' readonly>
    ";
  }

	public function isiKolomNamaIbu(){
    $this->load->model('M_master');
    $id= $this->input->post('id');

    $namaibu=$this->M_master->getDataNamaIbu($id);
    echo "
        <label>Nama Ibu
          </label>
        <input type='text' class='form-control' value='$namaibu' name='nama_ibu' readonly>
    ";
  }

	public function isiTabelDetail(){
    $this->load->model('M_master');
    $id= $this->input->post('id');

    $data['row']=$this->M_master->getDataNoJknPasienIbu($id);
    echo "

    ";
  }
}
