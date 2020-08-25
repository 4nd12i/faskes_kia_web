<?php
/**
*
*/
class M_gmaps extends CI_Model
{
  function _construct()
    {
        parent:: _construct();
    }
    //fungsi untuk menampilkan semua data
 function tampilan_semua_data()
 {
  //mengambil nilai atau data dari database
        return $this->db->get('t_maps');
 }

 function simpan_data($simpanlokasi) //fungsi simpan data
 {
  //memasukkan ke database
  return $this->db->insert('t_maps', $simpanlokasi);
 }
}

?>
