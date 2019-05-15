<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('inflector'));
		$this->load->library(array());
		$this->load->model(array('Artikel_model', 'Komentar_model'));

		$this->site->side = 'frontend';
		$this->site->template = 'default';
	}

}