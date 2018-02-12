<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
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
	
	public function Service($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service['data'] =  $this->db->query('select * from td_service where service_id = '.$id)->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
	$this->load->view('edit_service',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function User($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service['data'] =  $this->db->query('select * from td_service where service_id = '.$id)->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['Users'] = $this->db->query('SELECT * FROM td_admin WHERE user!="admin" AND id='.$id)->result_array();	
	$this->load->view('edit_user',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function MediaCount($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service['data'] =  $this->db->query('select * from td_media_number where num_id = '.$id)->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
	$this->load->view('edit_media_no',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Area($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service['data'] =  $this->db->query('select * from td_area where area_id = '.$id)->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
	$this->load->view('edit_area',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Bank($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service['data'] =  $this->db->query('select * from td_bank where area_id = '.$id)->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
	$this->load->view('edit_bank',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Landlord($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service['data'] =  $this->db->query('select * from td_landlord where land_id = '.$id)->result_array();
		
	$this->load->view('edit_landlord',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Trading($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service['data'] =  $this->db->query('select * from td_trading where trad_id = '.$id)->result_array();
		
	$this->load->view('edit_trading',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function ServiceCharge($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service['data'] =  $this->db->query('select * from td_service_charge where sc_id = '.$id)->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
	$this->load->view('edit_taxes',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function MediaSizes($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service['data'] =  $this->db->query('select * from td_size where size_id = '.$id)->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
	$this->load->view('edit_sizes',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	
		public function MediaType($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service['data'] =  $this->db->query('select * from td_media_type where type_id = '.$id)->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
	$this->load->view('edit_media_type',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}

	public function Client($id)
	{
	if ( isset($_SESSION['user'])) {

	$service['data'] = $this->db->query('select * from td_client where client_id = '.$id)->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';	
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('edit_client',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	
		public function Company($id)
	{
	if ( isset($_SESSION['user'])) {

	$service['data'] = $this->db->query('select * from td_company where com_id = '.$id)->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';	
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('edit_company',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}

	public function Project($pid)
	{
	if ( isset($_SESSION['user'])) {
	$service['data'] = $this->db->query('select * from td_project where prj_id = '.$pid)->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
	$this->load->view('project_edit',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function ServiceAssign($id)
	{
	if ( isset($_SESSION['user'])) {
    $service['show_client'] = $this->base_model->show_data('td_client','*','')->result_array();    
	$service['show_service'] = $this->base_model->show_data('td_service','*','')->result_array();
	$service['service'] = $this->db->query('select * from td_service_assign where sa_id = '.$id)->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';	
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
	$this->load->view('edit_service_assign',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	 public function Editprofile()
     {
     if ( isset($_SESSION['user'])) {
     $service['data'] = $this->db->query('select * from td_admin')->result_array();
	 $query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';	
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['pass'] = $this->db->query('SELECT * FROM td_pass_key')->result_array();
     $this->load->view('edit_profile',$service);
     }
    else {
    redirect(base_url().'index.php');
      }	
     }
}
