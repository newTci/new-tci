<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {
	
	function __construct(){
	    parent::__construct();
	    $this->load->helper('url');
		$this->load->database();
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('index');
		$this->load->view('template/footer');
	}

	public function berita()
	{
		$this->load->model('berita');
		$data['health'] = $this->berita->getJudulBeritaByKategori("Health", 9);
		$data['communication'] = $this->berita->getJudulBeritaByKategori("Communication", 9);
		$data['finance'] = $this->berita->getJudulBeritaByKategori("Finance", 9);
		$data['social'] = $this->berita->getJudulBeritaByKategori("Social", 9);
		$data['creative'] = $this->berita->getJudulBeritaByKategori("Creative", 9);
		$data['technology'] = $this->berita->getJudulBeritaByKategori("Technology", 9);
		$this->load->view('template/header');
		$this->load->view('berita/index', $data);
		$this->load->view('template/footer');
	}

	public function more_berita()
	{
		$kategori = $this->input->post('kategori');
		$endpoint = $this->input->post('endpoint');
		$this->load->model('berita');
		$data = $this->berita->getJudulBeritaByKategoriAndLimit($kategori, 5, $endpoint);
		header('Content-Type: application/json');
		echo json_encode($data);
	}

	public function kategori()
	{
		$this->load->view('template/header');
		$this->load->view('berita/kategori');
		$this->load->view('template/footer');
	}

	public function detail_berita()
	{
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
