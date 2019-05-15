<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Backend_Controller {

	public function index(){

		$data = array('tes' => 'Testing testing');
		$this->site->view('index', $data);

	}

}