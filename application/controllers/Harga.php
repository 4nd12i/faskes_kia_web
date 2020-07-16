<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {

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
		$data['row']=$this->m_master->getDataHarga();
		$data['bag']=$this->m_master->getDataBagian();
		$data['main_content']="harga/harga";
		$this->load->view('template/main',$data);
	}

	function error404(){
			$data['main_content']="error404";
			$this->load->view('template/main',$data);
	}

  public function semuaharga()
	{

	}

  public function tambahharga()
	{

	}

  public function editharga()
	{

	}

  public function hapusharga()
	{

	}

}

 ?>
