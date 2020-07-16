<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gmaps extends CI_Controller {

  function __construct() //konstraktor untuk meload library, helper dan model
   {
    parent::__construct();
    $this->load->helper(array('form', 'url', 'tgl_indo'));
    //untuk meload library
    $this->load->library('googlemaps');
    $this->load->library('geocoder');
    //untuk meload model
    $this->load->model('M_gmaps');
   }

        function index(){
         //merupakan fungsi javascript ketika da lokasi yang
         //di klik maka akan mengambil nilai longitude dan latitude yang di klik
         $diklik = 'window.open("get_lokasi/"+
       event.latLng.lat()+"/"+
       event.latLng.lng(),"_self")';

    //konfigurasi untuk posisi tengah map ketika
    //di tampilkan
       $config['center'] = '37.4419, -122.1419';
       //konfig pembesaran saat dimuat
    $config['zoom'] = 'auto';
    //mengaktifkan geocaching
    $config['geocodeCaching'] = TRUE;
    //menyimpan variabel javascript di atas
    //kedalam konfigurasi
    $config['onclick'] = $diklik;

    //menginisialisasi konfigurasi
    $this->googlemaps->initialize($config);

    //proses membuat marker
    $marker = array();
    //posisi marker
    $marker['position'] = '37.429, -122.1419';
    //menambahka marker
    $this->googlemaps->add_marker($marker);
    //membuat map
    $data['map'] = $this->googlemaps->create_map();
    //load ke view
    $this->load->view('maps/v_gmap', $data);

      }
      //fungsi untuk mendapatkan lokasi latitude dan longitude dan melakukan proses reverse
      function get_lokasi($lat, $long){
    $address_details = $this->geocoder->reverse_geocode($lat, $long);
    //print_r($address_details); // This will show you relevant address details.

    //variable untuk menyimpan hasil reverse
    $alamat = $address_details['address'];
    $kota = $address_details['city'];
    $zip = $address_details['zip_code'];
    $daerah = $address_details['county'];
    $negara = $address_details['country'];

    $ket = "<b>Kota :</b> ".$kota.", <b>ZIP Code : </b>".$zip.", <b>Wilayah : </b>".$daerah.", <b>Negara :</b> ".$negara;

    //fungsi uutk menyimpan lokasi
    $simpanlokasi = array('nama_lokasi' => $alamat ,
          'long' => $long,
          'lat' => $lat ,
          'Keterangan' => $ket );

    $this->M_gmaps->simpan_data($simpanlokasi);
    redirect('gmaps/lihatdata');
      }

      //fungsi untuk melihat data
       function lihatdata(){
        //variable untu button
        $data['kemapnya'] = '<button type="button" class="btn btn-success">'.anchor('gmaps/index','Kembali ke Laman Awal').'</button>
              </br>';

          //untuk menampilkan semua data di database
          $hasil = $this->M_gmaps->tampilan_semua_data()->result();
          $data['datanya'] =  $hasil;

         //meload view untuk menampilkan data
         $this->load->view('maps/v_lihatdata.php', $data);

      }

}

?>
