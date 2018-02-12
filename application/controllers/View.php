<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
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
	
	public function Service()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_service','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_service',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function hordingInstal()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_hording_instal','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_hording_details',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function PoleKiosk()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_pole_kiosk','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_pole_kiosk',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
		public function SignalInstal()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_signal','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_signal_details',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
		public function Users()
	{
		if ( isset($_SESSION['user']) && $_SESSION['user']=='admin') {
		$service['Users'] = $this->db->query('SELECT * FROM td_admin WHERE user!="admin"')->result_array();
	$this->load->view('view_user',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function OrderDetails()
	{
		if ( isset($_SESSION['user'])) {
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['data'] = $this->base_model->show_data('td_order','*','')->result_array();
		$order = $this->base_model->show_data('td_order','*','')->result_array();
		$service['MainM'] = $this->db->query('SELECT * FROM td_service WHERE service_id='.$order[0]['main_media'])->result_array();
		$service['Mtype'] = $this->db->query('SELECT * FROM td_media_type WHERE type_id='.$order[0]['media_type'])->result_array();
		$service['marea'] = $this->db->query('SELECT * FROM td_area WHERE area_id IN('.$order[0]['area'].')')->result_array();
		$service['msize'] = $this->db->query('SELECT * FROM td_size WHERE size_id IN ('.$order[0]['size'].')')->result_array();
		$service['mclient'] = $this->db->query('SELECT * FROM td_client WHERE client_id='.$order[0]['client'])->result_array();
	$this->load->view('view_orders',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function MyOrders($id)
	{
		if ( isset($_SESSION['user'])) {
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['data'] = $this->db->query('SELECT * FROM td_order WHERE client='.$id)->result_array();
		
	$this->load->view('view_client_orders',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Orders()
	{
		if ( isset($_SESSION['user'])) {
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['data'] = $this->db->query('SELECT * FROM td_order ORDER BY client DESC')->result_array();
		
	$this->load->view('view_order_dtl',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Area_media()
	{
		if ( isset($_SESSION['user'])) {
			$area_name = $this->input->post('txt_media_area');
			$area_code = $this->input->post('txt_area_code');
			
		$area = $this->db->query("SELECT * FROM td_area WHERE area_id='".$area_name."' OR uni_code='".$area_code."'")->result_array();	
		$service['data'] = $this->db->query('SELECT * FROM td_order WHERE area='.$area[0]['area_id'].' ORDER BY order_id DESC')->result_array();
		
	$this->load->view('view_order_area',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Area_Signalinstallation()
	{
		if ( isset($_SESSION['user'])) {
			$area_name = $this->input->post('txt_media_area');
			$area_code = $this->input->post('txt_area_code');
			$type = $this->input->post('txt_type');
			if($type == 'Hording') {
				$tbl = 'td_hording_instal';
				$id = 'hord_id';
				$page = 'view_hording_details';
			} elseif ($type == 'Signal') {
				$tbl = 'td_signal';
				$id = 'sig_id';
				$page = 'view_signal_details';
			} elseif($type == 'pole') {
			$tbl = 'td_pole_kiosk';
			$id = 'pl_id';
			$page = 'view_pole_kiosk';
			}
			
		$area = $this->db->query("SELECT * FROM td_area WHERE area_id='".$area_name."' OR uni_code='".$area_code."'")->result_array();
		
		$service['data'] = $this->db->query('SELECT * FROM '.$tbl.' WHERE area='.$area[0]['area_id'].' ORDER BY '.$id.' DESC')->result_array();
		
	$this->load->view($page,$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
		public function signal_order()
	{
		if ( isset($_SESSION['user'])) {
			$od_name = $this->input->post('txt_media_area');
			$type = $this->input->post('txt_type');
			if($type == 'Hording') {
				$tbl = 'td_hording_instal';
				$id = 'hord_id';
				$page = 'view_hording_details';
			} elseif ($type == 'Signal') {
				$tbl = 'td_signal';
				$id = 'sig_id';
				$page = 'view_signal_details';
			} elseif($type == 'pole') {
			$tbl = 'td_pole_kiosk';
			$id = 'pl_id';
			$page = 'view_pole_kiosk';
			}
			
		//$area = $this->db->query("SELECT * FROM td_area WHERE area_id='".$area_name."' OR uni_code='".$area_code."'")->result_array();
		
		$service['data'] = $this->db->query("SELECT * FROM ".$tbl." WHERE od_from LIKE '%".$od_name."%' ORDER BY ".$id." DESC")->result_array();
		
	$this->load->view($page,$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Landlords()
	{
		if ( isset($_SESSION['user'])) {
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['data'] = $this->db->query("SELECT * FROM td_landlord WHERE sp_lord != ''")->result_array();
		
	$this->load->view('view_landlord_dtl',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Trading()
	{
		if ( isset($_SESSION['user'])) {

		$service['data'] = $this->db->query("SELECT * FROM td_trading")->result_array();
		
	$this->load->view('view_trading_dtl',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function MediaCount()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_media_number','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_media_no',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function ServiceCharge()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_service_charge','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_taxes',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Area()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_area','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_area',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
		public function Bank()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_bank','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_bank',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
		public function MediaSizes()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_size','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_sizes',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}

public function Client()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_client','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';	
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_client',$service);
	}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function Company()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_company','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';	
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_company',$service);
	}
	else {
	redirect(base_url().'index.php');
	}
	}

	public function Projects()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_project','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_projects',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function ServiceAssign()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->db->query('select * from td_service_assign where status=1')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';	
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_service_assign',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	
	public function PaymentList()
	{
	if ( isset($_SESSION['user'])) {
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
	    $service['data'] = $this->db->query('select * from td_service_assign where notification_date<="'.date('Y-m-d').'" and expiry_date>="'.date('Y-m-d').'" and payment_status=0 and type="many" and status=1')->result_array();

	if($this->db->query($query)->num_rows()!=0)
	{
	$service['client'] = $this->db->query('select * from td_client where client_id='.$service['data'][0]['client_id'].'')->result_array();
	$service['service'] =$this->db->query('select * from td_service where service_id='.$service['data'][0]['service_id'].'')->result_array();
	}
	$this->load->view('payment_list',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function ClientService($id)
	{
	if ( isset($_SESSION['user'])) {
    $service['client'] = $this->db->query('select * from td_client where client_id = '.$id)->result_array();
	$service['data'] = $this->db->query('select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where c.client_id='.$id.' and c.client_id=sa.client_id and s.service_id=sa.service_id')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';	
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_service_client',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Report()
	{
	if ( isset($_SESSION['user'])) {
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
	    $service['data'] = $this->db->query('select * from td_service')->result_array();

	$this->load->view('view_report',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function ReportSearch()
	{
	if ( isset($_SESSION['user'])) {
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['data'] = $this->db->query('select * from td_service')->result_array();
		$service2 = $this->db->query('select sa.*,r.*,s.* from td_account r JOIN td_service_assign sa JOIN td_service s ON sa.sa_id=r.sa_id and sa.service_id=s.service_id where sa.service_id="'.$this->input->post('txt_service').'" and r.submission_date between "'.$this->input->post('txt_from').'" and "'.$this->input->post('txt_to').'" order by r.submission_date desc')->num_rows();	
		if($service2 != 0)	{
		
	    $service['searchdata'] = $this->db->query('select sa.*,r.*,s.* from td_account r JOIN td_service_assign sa JOIN td_service s ON sa.sa_id=r.sa_id and sa.service_id=s.service_id where sa.service_id="'.$this->input->post('txt_service').'" and r.submission_date between "'.$this->input->post('txt_from').'" and "'.$this->input->post('txt_to').'" order by r.submission_date desc')->result_array();
	    
		$service['service']=$service['searchdata'][0]['service_name'];
	}
		$service['from']=$this->input->post('txt_from');
		$service['to']=$this->input->post('txt_to');	
	$this->load->view('view_report',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function ChartReport()
	{
	if ( isset($_SESSION['user'])) {
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
	    $service['data'] = $this->db->query('select * from td_service')->result_array();
	    $service['data1'] = $this->db->query('select distinct service_id,sum(amount) as scost from td_account group by service_id')->result_array();
	    $service['datay'] = $this->db->query('select distinct service_id,expiry_date,sum(amount) as scost1 from td_account group by expiry_date')->result_array();

	$this->load->view('view_chart',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	
	public function MediaType()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_media_type','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('view_media_type',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	
}
