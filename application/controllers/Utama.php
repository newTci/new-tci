<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {
	
	function __construct(){
	    parent::__construct();
	    $this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('index');
		$this->load->view('template/footer');
	}

	public function berita()
	{
		$this->load->view('template/header');
		$this->load->view('berita/index');
		$this->load->view('template/footer');
	}

	public function kategori()
	{
		$this->load->view('template/header');
		$this->load->view('berita/kategori');
		$this->load->view('template/footer');
	}

	public function detail_berita()
	{
		$this->load->database();
		$sql = "SELECT isi_berita FROM berita ORDER BY tanggal ASC LIMIT 1";
		$data['isi'] = $this->db->query($sql)->row();
		$this->load->view('template/header');
		$this->load->view('berita/detail', $data);
		$this->load->view('template/footer');
	}

	public function podcast()
	{
		$this->load->view('template/header');
		$this->load->view('podcast/index');
		$this->load->view('template/footer');
	}
}
