<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Frontend_Controller {

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


	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index(){
		$userm = $this->User_model ; 
		/* mencoba insert */
		// $userm->insert(array('username' => 'admin'));
		
		/* mencoba update */
		// $userm->update(array('username' => 'admin', 'password' => md5('admin')), array('ID' => 1));
		
		/* mencoba get */
		// $userid1 = $userm->get(1);
		// var_dump($userid1);

		/* mencoba get_by */
		// $userid3 = $userm->get_by(array('username' => 'admin'), 10);
		// print_r($userid3);

		/* mencoba delete */
		//$userm->delete(3);

		$data = array('tes' => 'Ini Template FrontEnd');
		$this->site->view('index', $data);
	}	
}
