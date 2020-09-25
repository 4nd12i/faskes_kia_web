<?php

class M_master extends CI_Model
{

  //fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('user_id');
    }

    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('nik','id_bidan','nama','hak');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

    function getPengaturan($id){
    $query="select * from m_setting where id = '$id'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function insertPengguna($data){
  	$isi=$this->db->insert('pengguna',$data);
      return $isi;
    }

    function insertBidan($data){
  	$isi=$this->db->insert('m_bidan',$data);
      return $isi;
    }

    function insertPasienIbu($data){
  	$isi=$this->db->insert('m_pasien_ibu',$data);
      return $isi;
    }

    function insertPasienAnak($data){
  	$isi=$this->db->insert('m_pasien_anak',$data);
      return $isi;
    }

    function insertUser($data){
  	$isi=$this->db->insert('m_pengguna',$data);
      return $isi;
    }

    function insertCatatanKesehatanIbu($data){
  	$isi=$this->db->insert('t_kesehatan_ibu',$data);
      return $isi;
    }

    function insertCatatanKesehatanAnak($data){
  	$isi=$this->db->insert('t_imunisasi_anak',$data);
      return $isi;
    }

    function insertCatatanPersalinan($data){
  	$isi=$this->db->insert('t_persalinan',$data);
      return $isi;
    }
    function insertCatatanProgramKB($data){
  	$isi=$this->db->insert('t_programkb',$data);
      return $isi;
    }

    function insertLogAktifitas($data){
  	$isi=$this->db->insert('t_log',$data);
      return $isi;
    }

    function insertBeritaTerbaru($data){
  	$isi=$this->db->insert('t_berita',$data);
      return $isi;
    }

    function insertTips($data){
  	$isi=$this->db->insert('t_tips',$data);
      return $isi;
    }

    function updateBidan($data){
    $idbidan=$data['id_bidan'];
    $this->db->where('id_bidan',$idbidan);
  	$update=$this->db->update('m_bidan',$data);
      return $update;
    }

    function updatePasienIbu($data){
    $idpasienibu=$data['id_pasien_ibu'];
    $this->db->where('id_pasien_ibu',$idpasienibu);
  	$update=$this->db->update('m_pasien_ibu',$data);
      return $update;
    }

    function updatePasienAnak($data){
    $idpasienanak=$data['id_pasien_anak'];
    $this->db->where('id_pasien_anak',$idpasienanak);
  	$update=$this->db->update('m_pasien_anak',$data);
      return $update;
    }

    function updateUser($data){
    $username=$data['username'];
    $this->db->where('username',$username);
  	$update=$this->db->update('m_pengguna',$data);
      return $update;
    }

    function updateBeritaTerbaru($data){
    $id=$data['id_berita'];
    $this->db->where('id_berita',$id);
    $update=$this->db->update('t_berita',$data);
      return $update;
    }

    function updateTips($data){
    $id=$data['id_tips'];
    $this->db->where('id_tips',$id);
    $update=$this->db->update('t_tips',$data);
      return $update;
    }

    function updatePengaturan($data){
    $id=$data['id'];
    $this->db->where('id',$id);
    $update=$this->db->update('m_setting',$data);
      return $update;
    }

    function getDataUser(){
  	$query="select * from m_pengguna where hak != 'administrator';";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getDataBidan(){
  	$query="select * from m_bidan where ST ='1'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getDataPasienIbu(){
  	$query="select * from m_pasien_ibu where ST ='1'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getDataProgramKB(){
  	$query="select * from t_programkb where ST ='1'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getDataBeritaTerbaru(){
  	$query="select * from t_berita where ST ='1'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getDataTips(){
  	$query="select * from t_tips where ST ='1'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getRiwayatKesehatanIbu(){
  	$query="select tki.id_cek, mpi.nik, mpi.nama, tki.tgl_periksa, tki.kapan_kembali, tki.riwayat_penyakit, tki.keluhan_sekarang,
    tki.tekanan_darah, tki.umur_kehamilan, tki.letak_janin, tki.nasihat FROM m_pasien_ibu mpi INNER JOIN
    t_kesehatan_ibu tki ON mpi.id_pasien_ibu = tki.id_pasien_ibu WHERE tki.ST = 1 AND mpi.ST = 1";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getRiwayatKesehatanAnak(){
  	$query="select tia.id_cek, mpa.nama, mpa.nama_ayah, mpa.nama_ibu, tia.tgl_periksa, tia.usia, tia.jenis_imunisasi,
            tia.keterangan FROM m_pasien_anak mpa INNER JOIN t_imunisasi_anak tia ON mpa.id_pasien_anak = tia.id_pasien_anak
            WHERE tia.ST = 1 AND mpa.ST = 1";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getRiwayatPersalinan(){
  	$query="select tp.id_persalinan, mpi.nik, mpi.nama, tp.tgl_persalinan, tp.usia_kehamilan, tp.cara_persalinan, tp.keadaan_ibu, tp.penolong_persalinan
            from m_pasien_ibu mpi inner join t_persalinan tp on mpi.id_pasien_ibu = tp.id_pasien_ibu
            inner join m_bidan mb on tp.id_bidan = mb.id_bidan
            WHERE tp.ST = 1";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getRiwayatProgramKB(){
  	$query="select * from t_programkb where ST = 1";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getDataPasienAnak(){
  	$query="select * from m_pasien_anak where ST ='1'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getHistoryKesehatanIbu($idpasienibu){
  	$query="select * from t_kesehatan_ibu where id_pasien_ibu = '$idpasienibu' AND ST ='1'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getHistoryImunisasiAnak($idpasienanak){
  	$query="select tia.id_cek, mpa.nama, mpa.nama_ayah, mpa.nama_ibu, tia.tgl_periksa, tia.usia, tia.jenis_imunisasi,
            tia.keterangan FROM m_pasien_anak mpa INNER JOIN t_imunisasi_anak tia ON mpa.id_pasien_anak = tia.id_pasien_anak
            WHERE mpa.id_pasien_anak = '$idpasienanak' AND tia.ST = 1 AND mpa.ST = 1";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getHistoryPersalinan($idpasienibu){
  	$query="select tp.id_persalinan, mpi.id_pasien_ibu, mpi.nik, mpi.nama, tp.tgl_persalinan, tp.usia_kehamilan, tp.cara_persalinan, tp.keadaan_ibu, tp.penolong_persalinan
            from m_pasien_ibu mpi inner join t_persalinan tp on mpi.id_pasien_ibu = tp.id_pasien_ibu
            inner join m_bidan mb on tp.id_bidan = mb.id_bidan
            WHERE tp.id_pasien_ibu = '$idpasienibu' AND tp.ST = 1 AND mpi.ST = 1";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getHistoryProgramKB($namapeserta){
  	$query="select * from t_programkb where nama_peserta like '%$namapeserta%' AND ST = 1";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getJumlahDataPasienIbu(){
    $query="select COUNT(id_pasien_ibu) as jumlahpasienibu from m_pasien_ibu where ST ='1'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getJumlahDataPasienAnak(){
  	$query="select COUNT(id_pasien_anak) as jumlahpasienanak from m_pasien_anak where ST ='1'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getJumlahDataBidan(){
  	$query="select COUNT(id_bidan) as jumlahbidan from m_bidan where ST ='1'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getJumlahLayananKesehatanAnak(){
  	$query="select COUNT(id_cek) as jumlahlayananimunisasi from t_imunisasi_anak where ST ='1'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getJumlahLayananKesehatanIbu(){
  	$query="select COUNT(id_cek) as jumlahlayanankesehatanibu from t_kesehatan_ibu where ST ='1'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getJumlahLayananPersalinan(){
  	$query="select COUNT(id_persalinan) as jumlahlayananpersalinan from t_persalinan where ST ='1'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getJumlahLayananProgramKB(){
  	$query="select COUNT(id_programkb) as jumlahlayananprogramkb from t_programkb where ST ='1'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getLogAktifitasLogin(){
  	$query="select nama, tanggal, jam, jabatan, status from t_log where id_bidan <> '' order by id_log desc";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    // function getDataHarga(){
  	// $query="select * from m_produk p inner join bagian b on p.id_bag = b.id_bag";
    // $q=$this->db->query($query);
    //   if ($q->num_rows() > 0){
    //       foreach($q->result() as $row){
    //         $data[]=$row;
    //       }
    //     return $data;
    //   }
    // }

    function getDataProdukByBagian($id){
  	$query="select * from m_produk p inner join bagian b on p.id_bag = b.id_bag where b.NAMA_BAG like '%$id%'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data[]=$row;
          }
        return $data;
      }
    }

    function getBidanbyID($id){
    $query="select * from m_bidan where id_bidan = '$id'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getPasienIbubyID($id){
    $query="select * from m_pasien_ibu where id_pasien_ibu = '$id'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getPasienAnakbyID($id){
    $query="select * from m_pasien_anak where id_pasien_anak = '$id'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getPesertaKBbyID($id){
    $query="select * from t_programkb where nama_peserta = '$id'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getUserbyID($id){
    $query="select * from m_pengguna where username = '$id'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getBeritaTerbarubyID($id){
    $query="select * from t_berita where id_berita = '$id' AND ST = 1";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getTipsbyID($id){
    $query="select * from t_tips where id_tips = '$id' AND ST = 1";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getUserAdministrator($id){
    $query="select * from m_pengguna where hak = '$id'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getNIKUserLogin($username){
    $query="select nik from m_pengguna where username='".$username."'";
    $q=$this->db->query($query);
    if ($q->num_rows() > 0)
    {
        $row = $q->row();
        $nik=$row->nik;
    }
    return $nik;
    }

    function getNAMAUserLogin($username){
    $query="select nama from m_pengguna where username='".$username."'";
    $q=$this->db->query($query);
    if ($q->num_rows() > 0)
    {
        $row = $q->row();
        $nama=$row->nama;
    }
    return $nama;
    }

    function getHAKUserLogin($username){
    $query="select hak from m_pengguna where username='".$username."'";
    $q=$this->db->query($query);
    if ($q->num_rows() > 0)
    {
        $row = $q->row();
        $hak=$row->hak;
    }
    return $hak;
    }
    function getIdBidanUserLogin($username){
    $query="select id_bidan from m_pengguna where username='".$username."'";
    $q=$this->db->query($query);
    if ($q->num_rows() > 0)
    {
        $row = $q->row();
        $id=$row->id_bidan;
    }
    return $id;
    }

    function getMasukBidanLogin($idbidan){
    $query="select tgl_masuk_bidan from m_bidan where id_bidan='".$idbidan."'";
    $q=$this->db->query($query);
    if ($q->num_rows() > 0)
    {
        $row = $q->row();
        $id=$row->tgl_masuk_bidan;
    }
    return $id;
    }

    function getCatatanKesehatanIbubyID($id){
    $query="select mpi.nik, mpi.nama, tki.* from t_kesehatan_ibu tki INNER JOIN m_pasien_ibu mpi ON tki.id_pasien_ibu = mpi.id_pasien_ibu where id_cek = '$id'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getCatatanImunisasiAnakbyID($id){
    $query="select mpa.nama_ayah, mpa.nama, mpa.nama_ibu, tia.* from t_imunisasi_anak tia INNER JOIN m_pasien_anak mpa ON tia.id_pasien_anak = mpa.id_pasien_anak where id_cek = '$id'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getCatatanPersalinanbyID($id){
    $query="select mpi.id_pasien_ibu, mpi.nik, mpi.nama, tp.* from t_persalinan tp INNER JOIN m_pasien_ibu mpi ON tp.id_pasien_ibu = mpi.id_pasien_ibu where tp.id_persalinan = '$id'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getCatatanProgramKBbyID($id){
    $query="select * FROM t_programkb WHERE id_programkb = '$id'";
    $q=$this->db->query($query);
      if ($q->num_rows() > 0){
          foreach($q->result() as $row){
            $data=$row;
          }
        return $data;
      }
    }

    function getIdBidan(){
      $sql="select MAX(id_bidan)+1 as id from m_bidan";
      $q=$this->db->query($sql);
      if ($q->num_rows() > 0)
      {
          $row = $q->row();
          $id=$row->id;
      }else{
        $id="";
      }

      return $id;
    }

    function getIdBerita(){
      $sql="select MAX(id_berita)+1 as id from t_berita";
      $q=$this->db->query($sql);
      if ($q->num_rows() > 0)
      {
          $row = $q->row();
          $id=$row->id;
      }else{
        $id="";
      }

      return $id;
    }

    function getIdTips(){
      $sql="select MAX(id_tips)+1 as id from t_tips";
      $q=$this->db->query($sql);
      if ($q->num_rows() > 0)
      {
          $row = $q->row();
          $id=$row->id;
      }else{
        $id="";
      }

      return $id;
    }

    function getIdPasienIbu(){
      $sql="select MAX(id_pasien_ibu)+1 as id from m_pasien_ibu";
      $q=$this->db->query($sql);
      if ($q->num_rows() > 0)
      {
          $row = $q->row();
          $id=$row->id;
      }else{
        $id="";
      }

      return $id;
    }

    function getIdPasienAnak(){
      $sql="select MAX(id_pasien_anak)+1 as id from m_pasien_anak";
      $q=$this->db->query($sql);
      if ($q->num_rows() > 0)
      {
          $row = $q->row();
          $id=$row->id;
      }else{
        $id="";
      }

      return $id;
    }

    function getDataNamaBidan($nik){
      $sql="select nama from m_bidan where no_ktp='$nik'";
      $q=$this->db->query($sql);
      if ($q->num_rows() > 0)
      {
          $row = $q->row();
          $nm=$row->nama;
      }else{
        $nm="";
      }
      return $nm;
    }

    function getDataIdBidan($nik){
      $sql="select id_bidan from m_bidan where no_ktp='$nik'";
      $q=$this->db->query($sql);
      if ($q->num_rows() > 0)
      {
          $row = $q->row();
          $nm=$row->id_bidan;
      }else{
        $nm="";
      }
      return $nm;
    }

    function getDataIdPasienIbu($nik){
      $sql="select id_pasien_ibu from m_pasien_ibu where nik='$nik'";
      $q=$this->db->query($sql);
      if ($q->num_rows() > 0)
      {
          $row = $q->row();
          $nm=$row->id_pasien_ibu;
      }else{
        $nm="";
      }
      return $nm;
    }
    function getDataIdPasienAnak($nama){
      $sql="select id_pasien_anak from m_pasien_anak where nama='$nama'";
      $q=$this->db->query($sql);
      if ($q->num_rows() > 0)
      {
          $row = $q->row();
          $nm=$row->id_pasien_anak;
      }else{
        $nm="";
      }
      return $nm;
    }

    function getDataNamaPasienIbu($nik){
      $sql="select nama from m_pasien_ibu where nik='$nik'";
      $q=$this->db->query($sql);
      if ($q->num_rows() > 0)
      {
          $row = $q->row();
          $nm=$row->nama;
      }else{
        $nm="";
      }
      return $nm;
    }

    function getDataUsiaPasienIbu($nik){
      $sql="select usia from m_pasien_ibu where nik='$nik'";
      $q=$this->db->query($sql);
      if ($q->num_rows() > 0)
      {
          $row = $q->row();
          $nm=$row->usia;
      }else{
        $nm="";
      }
      return $nm;
    }

    function getDataPekerjaanPasienIbu($nik){
      $sql="select pekerjaan from m_pasien_ibu where nik='$nik'";
      $q=$this->db->query($sql);
      if ($q->num_rows() > 0)
      {
          $row = $q->row();
          $nm=$row->pekerjaan;
      }else{
        $nm="";
      }
      return $nm;
    }
    function getDataKehamilanPasienIbu($nik){
      $sql="select kehamilan_ke from m_pasien_ibu where nik='$nik'";
      $q=$this->db->query($sql);
      if ($q->num_rows() > 0)
      {
          $row = $q->row();
          $nm=$row->kehamilan_ke;
      }else{
        $nm="";
      }
      return $nm;
    }

    function getDataNoJknPasienIbu($nik){
      $sql="select no_jkn from m_pasien_ibu where nik='$nik'";
      $q=$this->db->query($sql);
      if ($q->num_rows() > 0)
      {
          $row = $q->row();
          $nm=$row->no_jkn;
      }else{
        $nm="";
      }
      return $nm;
    }

    function getDataNamaAyah($nama){
  	$sql="select nama_ayah from m_pasien_anak where nama = '$nama'";
    $q=$this->db->query($sql);
    if ($q->num_rows() > 0)
    {
        $row = $q->row();
        $nm=$row->nama_ayah;
    }else{
      $nm="";
    }
      return $nm;
    }

    function getDataNamaIbu($nama){
  	$sql="select nama_ibu from m_pasien_anak where nama = '$nama'";
    $q=$this->db->query($sql);
    if ($q->num_rows() > 0)
    {
        $row = $q->row();
        $nm=$row->nama_ibu;
    }else{
      $nm="";
    }
      return $nm;
    }

    function getDataSuamiIstri($nama){
  	$sql="select suami_istri from t_programkb where nama_peserta = '$nama'";
    $q=$this->db->query($sql);
    if ($q->num_rows() > 0)
    {
        $row = $q->row();
        $nm=$row->suami_istri;
    }else{
      $nm="";
    }
      return $nm;
    }

    function getDataUsiaPeserta($nama){
  	$sql="select usia from t_programkb where nama_peserta = '$nama'";
    $q=$this->db->query($sql);
    if ($q->num_rows() > 0)
    {
        $row = $q->row();
        $nm=$row->usia;
    }else{
      $nm="";
    }
      return $nm;
    }

    function getDataLongitudeBidan($id){
  	$sql="select longitude from m_bidan where id_bidan = '$id'";
    $q=$this->db->query($sql);
    if ($q->num_rows() > 0)
    {
        $row = $q->row();
        $nm=$row->longitude;
    }else{
      $nm="";
    }
      return $nm;
    }

    function getDataLatitudeBidan($id){
  	$sql="select latitude from m_bidan where id_bidan = '$id'";
    $q=$this->db->query($sql);
    if ($q->num_rows() > 0)
    {
        $row = $q->row();
        $nm=$row->latitude;
    }else{
      $nm="";
    }
      return $nm;
    }

    function getDataLongitudePasienIbu($id){
  	$sql="select longitude from m_pasien_ibu where id_pasien_ibu = '$id'";
    $q=$this->db->query($sql);
    if ($q->num_rows() > 0)
    {
        $row = $q->row();
        $nm=$row->longitude;
    }else{
      $nm="";
    }
      return $nm;
    }

    function getDataLatitudePasienIbu($id){
  	$sql="select latitude from m_pasien_ibu where id_pasien_ibu = '$id'";
    $q=$this->db->query($sql);
    if ($q->num_rows() > 0)
    {
        $row = $q->row();
        $nm=$row->latitude;
    }else{
      $nm="";
    }
      return $nm;
    }

    function hapusBidan($data){
    $id=$data['id_bidan'];
    $this->db->where('id_bidan',$id);
          $delete=$this->db->delete('m_bidan');
    return $delete;
    }

    function hapusPasienIbu($data){
    $id=$data['id_pasien_ibu'];
    $this->db->where('id_pasien_ibu',$id);
          $delete=$this->db->delete('m_pasien_ibu');
    return $delete;
    }

    function hapusPasienAnak($data){
    $id=$data['id_pasien_anak'];
    $this->db->where('id_pasien_anak',$id);
          $delete=$this->db->delete('m_pasien_anak');
    return $delete;
    }

    function hapusUser($data){
    $id=$data['username'];
    $this->db->where('username',$id);
          $delete=$this->db->delete('m_pengguna');
    return $delete;
    }

}

 ?>
