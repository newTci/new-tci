<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {
	
	function __construct(){
	    parent::__construct();
	    $this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function berita()
	{
		$this->load->view('template/header');
	}
}
