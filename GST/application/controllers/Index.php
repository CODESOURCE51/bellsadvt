<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
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
	public function NewUser()
	{
		$service['data'] = $this->base_model->show_data('td_client','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';	
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$this->load->view('subadmin',$service);
	}
	
	public function login()
	{
	$uname = $this->input->post('txt_username');
	$pass = $this->input->post('txt_password');
	$sflPss1 = substr($pass,0,3);
	$sflPss2 = substr($pass,-3);
	$str = $sflPss2.$pass.$sflPss1;
	$AuthKey = $this->db->query("SELECT * FROM td_pass_key")->result_array();
	$adminalow = $this->db->query("SELECT * FROM td_admin WHERE user='$uname'")->result_array();
	$SaltKey = $AuthKey[0]['pass_key'];
	$logacces = $adminalow[0]['login_allow'];
	if($logacces != 1) {
	if($str != $SaltKey) {
		$attempt_main = $this->db->query("SELECT MAX(attempt_count) AS Matmpt,id FROM td_admin WHERE user='$uname' AND sub_admin=0 AND login_allow=0")->result_array();
		$acount = $attempt_main[0]['Matmpt']+1;
		$adid = $attempt_main[0]['id'];
		$rip = $_SERVER['REMOTE_ADDR'];
		$atmptFields = array(
		'attempt_count' => $acount,
		'remote_ip' => $rip
		);
		$service1 = $this->base_model->profile_update('td_admin',$atmptFields,$adid);
		redirect(base_url().'?nomatch&attempt='.$acount);
	} else {
	$saltedPW =  $pass . $SaltKey;
	$hashedPW = hash('sha256', $saltedPW);
	
	$show = $this->db->query("SELECT * FROM td_admin WHERE user='$uname' AND sub_admin=0 AND login_allow=0")->result_array();
	//$exp = (',',$show['result']);
	$db_uname = $show[0]['user'];
	$db_id = $show[0]['id'];
	$db_pass = $show[0]['pass'];
	if ( $db_uname == $uname && $db_pass == $hashedPW) {
	$_SESSION['user'] = $uname;
	$_SESSION['passw'] = $pass;
	$_SESSION['usid'] = $db_id;
	$_SESSION['name'] = $show[0]['name'];
	$_SESSION['photo'] = $show[0]['photo'];
	redirect(base_url().'index.php/Index/dashboard');
	
	}
	else {
	redirect(base_url());
	}
	}
	}else {
	$saltedPW =  $pass . $SaltKey;
	$hashedPW = hash('sha256', $saltedPW);
	
	$show = $this->db->query("SELECT * FROM td_admin WHERE user='$uname' AND sub_admin=1 AND login_allow=1")->result_array();
	//$exp = (',',$show['result']);
	$db_uname = $show[0]['user'];
	$db_pass = $show[0]['pass'];
	$db_id = $show[0]['id'];
	if ( $db_uname == $uname && $db_pass == $hashedPW) {
	$_SESSION['user'] = $uname;
	$_SESSION['passw'] = $pass;
	$_SESSION['usid'] = $db_id;
	$_SESSION['name'] = $show[0]['name'];
	$_SESSION['photo'] = $show[0]['photo'];
	redirect(base_url().'index.php/Index/dashboard');
	
	}
	else {
		$attempt_main = $this->db->query("SELECT MAX(attempt_count) AS Matmpt,id FROM td_admin WHERE user='$uname' AND sub_admin=1 AND login_allow=1")->result_array();
		$acount = $attempt_main[0]['Matmpt']+1;
		$adid = $attempt_main[0]['id'];
		$rip = $_SERVER['REMOTE_ADDR'];
		$atmptFields = array(
		'attempt_count' => $acount,
		'remote_ip' => $rip
		);
		$service1 = $this->base_model->profile_update('td_admin',$atmptFields,$adid);
		redirect(base_url().'?nomatch&attempt='.$acount);
	
	}	
	}
		
	}
	
	public function dashboard()
	{
		if ( isset($_SESSION['user'])) {
	$service['data'] = $this->base_model->show_data('td_client','*','')->result_array();
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';	
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
	$this->load->view('dashboard',$service);
	}
	else {
	redirect(base_url().'index.php');
	}
	}

	public function chart()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$this->load->view('dashboard',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	} 
	public function signalInstal()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['main_area'] = $this->db->query("SELECT * FROM td_area")->result_array();
		$service['client'] = $this->db->query("SELECT * FROM td_client")->result_array();
		$this->load->view('signal_instal',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	} 
	public function PoleKiosk()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['main_area'] = $this->db->query("SELECT * FROM td_area")->result_array();
		$service['client'] = $this->db->query("SELECT * FROM td_client")->result_array();	
		$this->load->view('pole_kiosk',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	} 
	public function HordingInstal()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['main_area'] = $this->db->query("SELECT * FROM td_area")->result_array();
		$service['client'] = $this->db->query("SELECT * FROM td_client")->result_array();	
		$this->load->view('hording_instal',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	} 
	public function SubAdminAccess($id)
	{
		if ( isset($_SESSION['user'])) {
		//echo "SELECT * FROM `td_admin_access` WHERE adm_id=$id AND acc_type='add'";exit;
		$service['u_t_vw'] = $this->db->query("SELECT * FROM td_admin_access WHERE adm_id=".$id." AND acc_type='view'")->result_array();
		$service['u_t_acc'] = $this->db->query("SELECT * FROM td_admin_access WHERE adm_id=".$id." AND acc_type='add'")->result_array();
		$service['admin_id'] = $id;
		$this->load->view('admin_access',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	} 
	public function SubAdminAllow($aid)
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$field = array(
		'login_allow' => 1
		);
		$service1 = $this->base_model->profile_update('td_admin',$field,$aid);
		redirect(base_url().'index.php/view/Users');
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function SubAdminCancel($aid)
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$field = array(
		'login_allow' => 0
		);
		$service1 = $this->base_model->profile_update('td_admin',$field,$aid);
		redirect(base_url().'index.php/view/Users');
		}
	else {
	redirect(base_url().'index.php');
	}
	}  
	public function Landlord()
	{
		if ( isset($_SESSION['user'])) {
		
		$this->load->view('add_landlord');
		}
	else {
	redirect(base_url().'index.php');
	}
	} 
	public function Trading()
	{
		if ( isset($_SESSION['user'])) {
		
		$this->load->view('add_trading');
		}
	else {
	redirect(base_url().'index.php');
	}
	}     
	public function clientadd()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
		$this->load->view('client_add',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
		public function DateReport()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
		$this->load->view('date_report',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function AreaReport()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['main_area'] = $this->db->query("SELECT * FROM td_area")->result_array();		
		$this->load->view('area_report',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
		public function SignalInstallationReport()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['main_area'] = $this->db->query("SELECT * FROM td_area")->result_array();		
		$this->load->view('install_report',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function SignalInstallOrderReport()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['main_area'] = $this->db->query("SELECT DISTINCT od_from FROM td_signal")->result_array();		
		$this->load->view('signal_order_report',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
		public function Detailedreport()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$strt_date = $this->input->post('start');
		$end_date = $this->input->post('end');	
		$service['data'] = $this->db->query("SELECT * FROM td_order WHERE billing_date BETWEEN '".$strt_date."' AND '".$end_date."'")->result_array();
		$order = $this->db->query("SELECT * FROM td_order WHERE billing_date BETWEEN '".$strt_date."' AND '".$end_date."'")->result_array();
		$service['MainM'] = $this->db->query('SELECT * FROM td_service WHERE service_id='.$order[0]['main_media'])->result_array();
		$service['Mtype'] = $this->db->query('SELECT * FROM td_media_type WHERE type_id='.$order[0]['media_type'])->result_array();
		$service['marea'] = $this->db->query('SELECT * FROM td_area WHERE area_id IN('.$order[0]['area'].')')->result_array();
		$service['msize'] = $this->db->query('SELECT * FROM td_size WHERE size_id IN ('.$order[0]['size'].')')->result_array();
		$service['mclient'] = $this->db->query('SELECT * FROM td_client WHERE client_id='.$order[0]['client'])->result_array();
		$this->load->view('view_date_report',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function CompanyAdd()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
		$this->load->view('company_add',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function serviceadd()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';	
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$this->load->view('service_add',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function serviceassign($id)
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['show_client'] = $this->db->query('select * from td_client where client_id = '.$id)->result_array();;	
		$service['show_service'] = $this->base_model->show_data('td_service','*','')->result_array();
		$this->load->view('service_assign',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function MediaType()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();
		$service['main_m'] = $this->db->query("SELECT * FROM td_service")->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
		$this->load->view('media_type',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function MediaSizes()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();
		$service['main_m'] = $this->db->query("SELECT * FROM td_service")->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
		$this->load->view('media_sizes',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
		public function Area()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();
		$service['main_m'] = $this->db->query("SELECT * FROM td_service")->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
		$this->load->view('area',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function Bank()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();
		$service['main_m'] = $this->db->query("SELECT * FROM td_service")->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();	
		$this->load->view('bank',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function Taxes()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();
		$service['total_notify'] = $this->db->query($query)->num_rows();	
		$this->load->view('taxes',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function OrderSuccess($id)
	{
		if ( isset($_SESSION['user'])) {
		$service['lastDetail'] = $this->db->query("SELECT * FROM td_order WHERE order_id=".$id)->result_array();	
		$this->load->view('success_order',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function MediaCount()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['main_m'] = $this->db->query("SELECT * FROM td_service")->result_array();
		$service['main_area'] = $this->db->query("SELECT * FROM td_area")->result_array();	
		$this->load->view('media_no',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function Order()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['main_m'] = $this->db->query("SELECT * FROM td_service")->result_array();
		$service['main_area'] = $this->db->query("SELECT * FROM td_area")->result_array();	
		$service['client'] = $this->db->query("SELECT * FROM td_client")->result_array();
		$service['size'] = $this->db->query("SELECT * FROM td_size")->result_array();
		$service['bank'] = $this->db->query("SELECT * FROM td_bank")->result_array();
		$service['taxes'] = $this->db->query("SELECT * FROM td_service_charge")->result_array();
		$service['Landlord'] = $this->db->query("SELECT * FROM td_landlord")->result_array();
		$service['trading'] = $this->db->query("SELECT * FROM td_trading")->result_array();
		$service['gststate'] = $this->db->query("SELECT * FROM gst_state")->result_array();
		$this->load->view('order',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function PrintingOrder()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['main_m'] = $this->db->query("SELECT * FROM td_service")->result_array();
		$service['main_area'] = $this->db->query("SELECT * FROM td_area")->result_array();	
		$service['client'] = $this->db->query("SELECT * FROM td_client")->result_array();
		$service['size'] = $this->db->query("SELECT * FROM td_size")->result_array();
		$service['bank'] = $this->db->query("SELECT * FROM td_bank")->result_array();
		$service['taxes'] = $this->db->query("SELECT * FROM td_service_charge")->result_array();
		$service['gststate'] = $this->db->query("SELECT * FROM gst_state")->result_array();
		$this->load->view('print_order',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
		public function RentalPrint($id)
	{
		if ( isset($_SESSION['user'])) {
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['data'] = $this->db->query('SELECT * FROM td_order WHERE order_id='.$id)->result_array();
		$order = $this->db->query('SELECT * FROM td_order WHERE order_id='.$id)->result_array();
		$service['Bank'] = $this->db->query('SELECT * FROM td_bank WHERE area_id='.$order[0]['bank'])->result_array();
		$service['MainM'] = $this->db->query('SELECT * FROM td_service WHERE service_id='.$order[0]['main_media'])->result_array();
		$service['Mtype'] = $this->db->query('SELECT * FROM td_media_type WHERE type_id='.$order[0]['media_type'])->result_array();
		$service['marea'] = $this->db->query('SELECT * FROM td_area WHERE area_id IN('.$order[0]['area'].')')->result_array();
		if($order[0]['size'] != 'NA') {
		$service['msize'] = $this->db->query('SELECT * FROM td_size WHERE size_id IN('.$order[0]['size'].')')->result_array();
		}
		$service['mclient'] = $this->db->query('SELECT * FROM td_client WHERE client_id='.$order[0]['client'])->result_array();
		$service['company'] = $this->db->query('SELECT * FROM td_company')->result_array();
		$service['SumUnit'] = $this->db->query('SELECT SUM(unit_total) AS UTotal FROM td_order WHERE order_id IN ('.$id.')')->result_array();
	$service['SumChrg'] = $this->db->query('SELECT SUM(chrge_amt) AS chrgTotal FROM td_order WHERE order_id IN ('.$id.')')->result_array();
	$service['SumOChrg'] = $this->db->query('SELECT SUM(other_charge) AS otherTotal FROM td_order WHERE order_id IN ('.$id.')')->result_array();
	$service['timpid'] = "'".$id."',";
		$tids[] = $order[0]['tax_id'];
		$service['taxesids'] = $tids;
	$this->load->view('invoice_rental',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Printing($id)
	{
		if ( isset($_SESSION['user'])) {
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['data'] = $this->db->query('SELECT * FROM td_order WHERE order_id='.$id)->result_array();
		$order = $this->db->query('SELECT * FROM td_order WHERE order_id='.$id)->result_array();
		$service['Bank'] = $this->db->query('SELECT * FROM td_bank WHERE area_id='.$order[0]['bank'])->result_array();
		$service['MainM'] = $this->db->query('SELECT * FROM td_service WHERE service_id='.$order[0]['main_media'])->result_array();
		$service['Mtype'] = $this->db->query('SELECT * FROM td_media_type WHERE type_id='.$order[0]['media_type'])->result_array();
		$service['marea'] = $this->db->query('SELECT * FROM td_area WHERE area_id IN('.$order[0]['area'].')')->result_array();
		if($order[0]['size'] != 'NA') {
		$service['msize'] = $this->db->query('SELECT * FROM td_size WHERE size_id IN('.$order[0]['size'].')')->result_array();
		}
		$service['mclient'] = $this->db->query('SELECT * FROM td_client WHERE client_id='.$order[0]['client'])->result_array();
		$service['company'] = $this->db->query('SELECT * FROM td_company')->result_array();
		$service['SumUnit'] = $this->db->query('SELECT SUM(unit_total) AS UTotal FROM td_order WHERE order_id IN ('.$id.')')->result_array();
	$service['SumChrg'] = $this->db->query('SELECT SUM(chrge_amt) AS chrgTotal FROM td_order WHERE order_id IN ('.$id.')')->result_array();
	$service['SumOChrg'] = $this->db->query('SELECT SUM(other_charge) AS otherTotal FROM td_order WHERE order_id IN ('.$id.')')->result_array();
	$service['timpid'] = "'".$id."',";
		$tids[] = $order[0]['tax_id'];
		$service['taxesids'] = $tids;
	$this->load->view('invoice_printing',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function MountPrint($id)
	{
		if ( isset($_SESSION['user'])) {
	$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();	
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['data'] = $this->db->query('SELECT * FROM td_order WHERE order_id='.$id)->result_array();
		$order = $this->db->query('SELECT * FROM td_order WHERE order_id='.$id)->result_array();
		$service['Bank'] = $this->db->query('SELECT * FROM td_bank WHERE area_id='.$order[0]['bank'])->result_array();
		$service['MainM'] = $this->db->query('SELECT * FROM td_service WHERE service_id='.$order[0]['main_media'])->result_array();
		$service['Mtype'] = $this->db->query('SELECT * FROM td_media_type WHERE type_id='.$order[0]['media_type'])->result_array();
		$service['marea'] = $this->db->query('SELECT * FROM td_area WHERE area_id IN('.$order[0]['area'].')')->result_array();
		if($order[0]['size'] != 'NA') {
		$service['msize'] = $this->db->query('SELECT * FROM td_size WHERE size_id IN('.$order[0]['size'].')')->result_array();
		}
		$service['mclient'] = $this->db->query('SELECT * FROM td_client WHERE client_id='.$order[0]['client'])->result_array();
		$service['company'] = $this->db->query('SELECT * FROM td_company')->result_array();
		$service['SumUnit'] = $this->db->query('SELECT SUM(unit_total) AS UTotal FROM td_order WHERE order_id IN ('.$id.')')->result_array();
	$service['SumChrg'] = $this->db->query('SELECT SUM(chrge_amt) AS chrgTotal FROM td_order WHERE order_id IN ('.$id.')')->result_array();
	$service['SumOChrg'] = $this->db->query('SELECT SUM(other_charge) AS otherTotal FROM td_order WHERE order_id IN ('.$id.')')->result_array();
	$service['timpid'] = "'".$id."',";
		$tids[] = $order[0]['tax_id'];
		$service['taxesids'] = $tids;
	$this->load->view('invoice_mounting',$service);
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
		public function PrintBill($id)
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['main_area'] = $this->db->query("SELECT * FROM td_area")->result_array();	
		$service['company'] = $this->db->query("SELECT * FROM td_company")->result_array();
		$service['landlord'] = $this->db->query("SELECT * FROM td_landlord WHERE land_id=".$id)->result_array();
		$this->load->view('payment_voucher',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function SearchMediaArea()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['main_area'] = $this->db->query("SELECT * FROM td_area")->result_array();	
		$this->load->view('media_area_search',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function MediaDetails()
	{
		if ( isset($_SESSION['user'])) {
		$query='select sa.*,c.*,s.* from td_service_assign sa JOIN td_client c JOIN td_service s where sa.notification_date<="'.date('Y-m-d').'" and sa.expiry_date>="'.date('Y-m-d').'" and sa.payment_status=0 and sa.type="many" and sa.status=1 AND c.client_id=sa.client_id and s.service_id=sa.service_id order by notification_date asc limit 5';
		$service['notify'] = $this->db->query($query)->result_array();
		$service['total_notify'] = $this->db->query($query)->num_rows();
		$service['main_area'] = $this->db->query("SELECT * FROM td_area")->result_array();	
		$this->load->view('media_details',$service);
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function getMediaArea()
	{
		if ( isset($_SESSION['user'])) {
		$id=$this->input->post('mid');
		$type=$this->input->post('tp');
		if($type == 'sel'){
			$area_details = $this->db->query('SELECT * FROM td_area WHERE area_id="'.$id.'"')->result_array();
		$media_type = $this->db->query('SELECT * FROM td_media_number WHERE area='.$id)->result_array();
		} elseif($type == 'tebo') {
			$area_details = $this->db->query('SELECT * FROM td_area WHERE uni_code="'.$id.'"')->result_array();
			$media_type = $this->db->query('SELECT * FROM td_media_number WHERE area='.$area_details[0]['area_id'])->result_array();
			}
			$area_arr[] = '<div class="col-md-12">
<div class="box box-blue">
<div class="box-title">
<h3><i class="fa fa-puzzle-piece"></i> '.$area_details[0]['area_name'].'</h3>
</div>
<div class="box-content">
<div class="col-md-12">
<table>
<tr><th style="padding:5px; background:#ddd; font-size:16px">Area Code</th><td style="padding:5px; background:#ddd; font-size:16px">:</td><td style="padding:5px; font-size:16px">'.$area_details[0]['uni_code'].'</td></tr>
<tr><th style="padding:5px; background:#ddd; font-size:16px">Landmark</th><td style="padding:5px; background:#ddd; font-size:16px">:</td><td style="padding:5px; font-size:16px">'.$area_details[0]['landmark'].'</td></tr>
<tr><th style="padding:5px; background:#ddd; font-size:16px">Address</th><td style="padding:5px; background:#ddd; font-size:16px">:</td><td style="padding:5px; font-size:16px">'.$area_details[0]['address'].'</td></tr>
</table>
</div>';
		$i=1;
		foreach($media_type as $md_cont) {
			$media_Main_name = $this->db->query('SELECT * FROM td_service WHERE service_id='.$md_cont['main_media'])->result_array();
			
			
$row_number[] = '
<div class="col-md-4" style="padding: 5px">
<h4 style="background:#b6d1f2; color: white; padding:10px">'.$media_Main_name[0]['service_name'].'</h4>
<table width="100%">
<thead>
<tr><th style="padding:5px; background:#ddd; font-size:16px"></th><th style="padding:5px; background:#ddd; font-size:16px">Booked</th><th style="padding:5px; background:#ddd; font-size:16px">Vacant</th></tr>
</thead>
<tbody>
<tr><td style="padding:5px; background:#ddd; font-size:16px">All</td><td style="padding:5px; font-size:16px">'.$md_cont['main_media_booked'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['main_media_vac'].'</td></tr>
<tr><td style="padding:5px; background:#ddd; font-size:16px">'.$md_cont['display1'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display1_booked'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display1_vacant'].'</td></tr>
<tr><td style="padding:5px; background:#ddd; font-size:16px">'.$md_cont['display2'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display2_booked'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display2_vacant'].'</td></tr>
<tr><td style="padding:5px; background:#ddd; font-size:16px">'.$md_cont['display3'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display3_booked'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display3_vacant'].'</td></tr>
<tr><td style="padding:5px; background:#ddd; font-size:16px">'.$md_cont['display4'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display4_booked'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display4_vacant'].'</td></tr>
<tr><td style="padding:5px; background:#ddd; font-size:16px">'.$md_cont['display5'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display5_booked'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display5_vacant'].'</td></tr>
<tr><td style="padding:5px; background:#ddd; font-size:16px">'.$md_cont['display6'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display6_booked'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display6_vacant'].'</td></tr>
</tbody>
</table>
</div>

</div>
</div>
';
		$i++;}
		$arr_mrg = array_merge($area_arr,$row_number);
			//echo $i;
			 echo json_encode($arr_mrg);
							
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function logout()
    {
     session_destroy();
     redirect(base_url());
     }
	 public function getMediaDetails()
	{
		if ( isset($_SESSION['user'])) {
		$id=$this->input->post('mid');
			$media_Main_name = $this->db->query('SELECT * FROM td_service WHERE uni_code="'.$id.'"')->result_array();
			$media_type = $this->db->query('SELECT * FROM td_media_number WHERE main_media='.$media_Main_name[0]['service_id'])->result_array();
		$i=1;
		foreach($media_type as $md_cont) {
			$area_details = $this->db->query('SELECT * FROM td_area WHERE area_id="'.$md_cont['area'].'"')->result_array();		
			
			
$details[] = '<div class="col-md-12" style="border:3px dotted black; margin-top:7px;">
			<div class="box box-blue">
			<div class="box-title">
			<h3><i class="fa fa-puzzle-piece"></i> '.$area_details[0]['area_name'].'</h3>
			</div>
			<div class="box-content">
			<div class="col-md-12">
			<table>
			<tr><th style="padding:5px; background:#ddd; font-size:16px">Area Code</th><td style="padding:5px; background:#ddd; font-size:16px">:</td><td style="padding:5px; font-size:16px">'.$area_details[0]['uni_code'].'</td></tr>
			<tr><th style="padding:5px; background:#ddd; font-size:16px">Landmark</th><td style="padding:5px; background:#ddd; font-size:16px">:</td><td style="padding:5px; font-size:16px">'.$area_details[0]['landmark'].'</td></tr>
			<tr><th style="padding:5px; background:#ddd; font-size:16px">Address</th><td style="padding:5px; background:#ddd; font-size:16px">:</td><td style="padding:5px; font-size:16px">'.$area_details[0]['address'].'</td></tr>
			</table>
			</div>
			<div class="col-md-4" style="padding: 5px">
			<h4 style="background:#b6d1f2; color: white; padding:10px">'.$media_Main_name[0]['service_name'].'</h4>
			<table width="100%">
			<thead>
			<tr><th style="padding:5px; background:#ddd; font-size:16px"></th><th style="padding:5px; background:#ddd; font-size:16px">Booked</th><th style="padding:5px; background:#ddd; font-size:16px">Vacant</th></tr>
			</thead>
			<tbody>
			<tr><td style="padding:5px; background:#ddd; font-size:16px">All</td><td style="padding:5px; font-size:16px">'.$md_cont['main_media_booked'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['main_media_vac'].'</td></tr>
			<tr><td style="padding:5px; background:#ddd; font-size:16px">'.$md_cont['display1'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display1_booked'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display1_vacant'].'</td></tr>
			<tr><td style="padding:5px; background:#ddd; font-size:16px">'.$md_cont['display2'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display2_booked'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display2_vacant'].'</td></tr>
			<tr><td style="padding:5px; background:#ddd; font-size:16px">'.$md_cont['display3'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display3_booked'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display3_vacant'].'</td></tr>
			<tr><td style="padding:5px; background:#ddd; font-size:16px">'.$md_cont['display4'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display4_booked'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display4_vacant'].'</td></tr>
			<tr><td style="padding:5px; background:#ddd; font-size:16px">'.$md_cont['display5'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display5_booked'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display5_vacant'].'</td></tr>
			<tr><td style="padding:5px; background:#ddd; font-size:16px">'.$md_cont['display6'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display6_booked'].'</td><td style="padding:5px; font-size:16px">'.$md_cont['display6_vacant'].'</td></tr>
			</tbody>
			</table>
			</div>
			
			</div>
			</div>';
		
		$i++;}
		//$arr_mrg = array_merge($area_arr,$row_number);
			//echo $i;
			//print_r($details);
			 echo json_encode($details);
							
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function getMedia()
	{
		if ( isset($_SESSION['user'])) {
		$id=$this->input->post('mid');
		$media_type = $this->db->query('SELECT * FROM td_media_type WHERE main_media_name='.$id)->result_array();
		$i=1;
		foreach($media_type as $md_cont) {
			$row_number[] = '
			<input type="hidden" name="txt_display_media_'.$i.'" value="'.$md_cont['type_id'].'"/>
			<div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label">Display Type</label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display Name"
                                           data-original-title="Optional" data-placement="top" name="txt_display_media_'.$i.'" id="txt_display_media" value="'.$md_cont['type'].'" readonly="readonly" style="background-color:#e6dede; color:#000000;"/>
                                 
                                </div>
                            </div>
							<div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label">Booked Number</label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display Number"
                                           data-original-title="Optional" data-placement="top" name="txt_display_booked_media_no_'.$i.'" id="txt_display_media_no_'.$i.'"/>
                                
                                </div>
                            </div>
							<div class="form-group">
			<label class="col-sm-3 col-lg-2 control-label">Vacant Number</label>

                                <div class="col-sm-9 col-lg-10 controls">
								 <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Display Number"
                                           data-original-title="Optional" data-placement="top" name="txt_display_vacant_media_no_'.$i.'" id="txt_display_media_no_'.$i.'"/>
                                
                                </div>
                            </div>';
		$i++;}
			//echo $i;
			 echo json_encode($row_number);
							
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function getSubMedia()
	{
		if ( isset($_SESSION['user'])) {
		$id=$this->input->post('mid');
		$media_type = $this->db->query('SELECT * FROM td_media_type WHERE main_media_name='.$id)->result_array();
		$i=1;
		$row_number1[] = '<option value="" selected="selected">Select</option>';
		foreach($media_type as $md_cont) {
			$row_number[] = '<option value="'.$md_cont['type_id'].'">'.$md_cont['type'].'</option>';
		$i++;}
			$sval = array_merge($row_number1,$row_number);
			 echo json_encode($sval);
							
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function getInvoice()
	{
		if ( isset($_SESSION['user'])) {
		$rtype=$this->input->post('renttype');
		$bday=$this->input->post('bday');
		$bmnth=$this->input->post('bmnth');
		$byr=$this->input->post('byear');
		//echo "SELECT MAX(bill_no) AS mbil FROM td_order WHERE bill_type='".$rtype."' AND bill_m='".$bmnth."' AND bill_y='".$byr."' ORDER BY bill_no DESC LIMIT 1";die;exit;
		$bill_invcnt = $this->db->query("SELECT * FROM td_order WHERE bill_type='".$rtype."' AND bill_m='".$bmnth."' AND bill_y='".$byr."'")->num_rows();
		if($bill_invcnt > 0){
		$bill_inv = $this->db->query("SELECT MAX(order_id) AS mbil FROM td_order WHERE bill_type='".$rtype."' AND bill_m='".$bmnth."' AND bill_y='".$byr."'")->result_array();
		$bill_nos = $this->db->query("SELECT bill_no FROM td_order WHERE order_id=".$bill_inv[0]['mbil'])->result_array();
			//$row_number[] = $bill_inv[0]['mbil'];
			if($bill_nos[0]['bill_no'] == '' || $bill_nos[0]['bill_no'] == 0) {
			echo '0';
			} else {
		echo $bill_nos[0]['bill_no'];
		}
		} else {
		echo '0';
		}
			// echo json_encode($row_number);die;exit;
							
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function getInvoiceprint()
	{
		if ( isset($_SESSION['user'])) {
		$rtype=$this->input->post('renttype');
		$bday=$this->input->post('bday');
		$exp_date = explode('/',$bday);
		//print_r($exp_date);
		$bmnth = $exp_date[0];
		$byr = $exp_date[2];
		//echo "SELECT MAX(order_id) AS mbil FROM td_order WHERE bill_type='".$rtype."' AND bill_m='".$bmnth."' AND bill_y='".$byr."'";die;exit;
		$bill_inv = $this->db->query("SELECT MAX(order_id) AS mbil FROM td_order WHERE bill_type='".$rtype."' AND bill_m='".$bmnth."' AND bill_y='".$byr."'")->result_array();
		if(!empty($bill_inv[0]['mbil'])){
		$bill_nos = $this->db->query("SELECT bill_no FROM td_order WHERE order_id=".$bill_inv[0]['mbil'])->result_array();
		$bill_nos_nw = $bill_nos[0]['bill_no'];
		} else {
		$bill_nos_nw = 0;
		}
			//$row_number[] = $bill_inv[0]['mbil'];
			if($bill_nos_nw == '' || $bill_nos_nw == 0) {
			echo '0';
			} else {
		echo $bill_nos_nw;
		}
			// echo json_encode($row_number);die;exit;
							
		}
	else {
	redirect(base_url().'index.php');
	}
	}
	public function MultiRental($id){
		$ids = base64_decode(urldecode($id));
		$expid = explode('=',$ids);
		$exp = explode('%2C',$expid[0]);
		//echo $exp[0];
		$imp = implode(',',$exp);
		$imp2 = implode("','",$exp);
	$this->load->library('user_agent');
	$rdirect = $this->agent->referrer();
	$category['SumUnit'] = $this->db->query('SELECT SUM(unit_total) AS UTotal FROM td_order WHERE order_id IN ('.$imp.')')->result_array();
	$category['SumChrg'] = $this->db->query('SELECT SUM(chrge_amt) AS chrgTotal FROM td_order WHERE order_id IN ('.$imp.')')->result_array();
	$category['SumOChrg'] = $this->db->query('SELECT SUM(other_charge) AS otherTotal FROM td_order WHERE order_id IN ('.$imp.')')->result_array();
	$order2 = $this->db->query('SELECT * FROM td_order WHERE order_id ='.$exp[0])->result_array();
	$order = $this->db->query('SELECT * FROM td_order WHERE order_id IN ('.$imp.')')->result_array();
	$category['Bank'] = $this->db->query('SELECT * FROM td_bank WHERE area_id='.$order[0]['bank'])->result_array();
	$orderNum = $this->db->query('SELECT * FROM td_order WHERE order_id IN ('.$imp.') AND bill_no != 0')->result_array();
	if($order2[0]['bill_type']=='R'){
		$pge = 'multi_rental';
		} elseif($order2[0]['bill_type']=='M') {
		$pge = 'multi_mount';
		}
		
	if($orderNum[0]['bill_no'] != 0) {
		foreach($order as $tidsr) { 	
	$tids[] = $tidsr['tax_id'];
	$billn[] = $tidsr['bill_no'];
	}
	$category['taxesids'] = $tids;
		$category['data'] = $this->db->query('SELECT * FROM td_order WHERE order_id IN ('.$imp.') ORDER BY main_media')->result_array();
		$category['mclient'] = $this->db->query('SELECT * FROM td_client WHERE client_id='.$order[0]['client'])->result_array();
		$category['company'] = $this->db->query('SELECT * FROM td_company')->result_array();
		$category['timpid'] = $imp;
	$this->load->view($pge,$category);
		} else {
	foreach($order as $tidsr) { 
	$num = $this->db->query("SELECT MAX(bill_no) AS oid FROM td_order WHERE bill_m=".$tidsr['bill_m']." AND bill_y=".$tidsr['bill_y'])->result_array();
	$mno = $num[0]['oid']+1;	
	$tids[] = $tidsr['tax_id'];
	}
	$inv_no = $mno;
	$num = $this->db->query("UPDATE td_order SET bill_no='".$inv_no."' WHERE order_id IN ('".$imp2."')");
		$category['taxesids'] = $tids;
		$category['data'] = $this->db->query('SELECT * FROM td_order WHERE order_id IN ('.$imp.') ORDER BY main_media')->result_array();
		$category['mclient'] = $this->db->query('SELECT * FROM td_client WHERE client_id='.$order[0]['client'])->result_array();
		$category['company'] = $this->db->query('SELECT * FROM td_company')->result_array();
		$category['timpid'] = $imp;
	$this->load->view($pge,$category);
	}
	}
	
	public function Rentalreview($id1,$id2,$id3){
	$id = $id1;
	//echo 'SELECT * FROM td_order WHERE bill_no ="'.$id.'" AND bill_m='.$id2.' AND bill_y='.$id3;exit;
	//echo 'SELECT * FROM td_order WHERE bill_no ="'.$id.'"';exit;
	$order = $this->db->query('SELECT * FROM td_order WHERE bill_no ="'.$id.'" AND bill_m='.$id2.' AND bill_y='.$id3)->result_array();
	
	foreach($order as $tidsr) { 	
	$tids[] = $tidsr['tax_id'];
	$imps[] = $tidsr['order_id'];
	}
	$imp = implode(',',$imps);
		$category['taxesids'] = $tids;
		$category['data'] = $this->db->query('SELECT * FROM td_order WHERE bill_no ="'.$id.'" AND bill_m='.$id2.' AND bill_y='.$id3.' ORDER BY main_media')->result_array();
		$category['mclient'] = $this->db->query('SELECT * FROM td_client WHERE client_id='.$order[0]['client'])->result_array();
		$category['company'] = $this->db->query('SELECT * FROM td_company')->result_array();
		$category['SumUnit'] = $this->db->query('SELECT SUM(unit_total) AS UTotal FROM td_order WHERE bill_no="'.$id.'" AND bill_m='.$id2.' AND bill_y='.$id3)->result_array();
	$category['SumChrg'] = $this->db->query('SELECT SUM(chrge_amt) AS chrgTotal FROM td_order WHERE bill_no="'.$id.'" AND bill_m='.$id2.' AND bill_y='.$id3)->result_array();
	$category['SumOChrg'] = $this->db->query('SELECT SUM(other_charge) AS otherTotal FROM td_order WHERE bill_no="'.$id.'" AND bill_m='.$id2.' AND bill_y='.$id3)->result_array();
		$category['timpid'] = $imp;
	$this->load->view('multi_rental1',$category);
	}
	
}
