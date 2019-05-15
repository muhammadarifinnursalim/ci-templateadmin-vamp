<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends Frontend_Controller {

	public function __construct(){
		parent::__construct();		
	}

	public function index(){
		$data = array();
		$this->site->view('index',$data);
	}

	public function kategori(){
		$data = array();
		$this->site->view('kategori_artikel',$data);
	}	

	public function detil(){
		$data = array();
		$this->site->view('artikel',$data);
	}	
}