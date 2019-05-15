<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_Controller extends MY_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'security'));
		$this->load->library(array('form_validation'));
		$this->load->model(array());
		
		$this->site->side = 'backend';
		$this->site->template = 'templatevamp';

		$this->site->is_logged_in();
	}

}