<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	
	public function NewNotification()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->db->query('select * from td_service_assign where "'.date('Y-m-d').'">=notification_date and "'.date('Y-m-d').'"<=expiry_date')->result_array();
	$this->load->view('payment_list',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}	
}
