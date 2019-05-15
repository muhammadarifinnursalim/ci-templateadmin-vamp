<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

	public $data = array();

	function __construct(){
		parent::__construct();

		$this->load->helper(array('template_helper','user_helper','date'));
		$this->load->library(array('Site', 'session'));
		$this->load->model(array('User_model'));

	}

}