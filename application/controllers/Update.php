<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {
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
	public function MediaType()
	{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('cid');
		$main_id = $this->input->post('mmid');
		$service = $this->input->post('txt_service');
		$num = $this->db->query("SELECT * FROM td_media_type WHERE type_id=".$cid)->result_array();
		$uni = explode('/',$num[0]['uni_code']);
		$nw_uni =  substr($service,0,4).'/'.$uni[1].'/BELL/'.$uni[3];
		$fields = array(
			'type' => $service,
			'uni_code' => $nw_uni
		);
		$service = $this->base_model->mtype_update('td_media_type',$fields,$cid);
		if($service)
		{
		redirect(base_url().'index.php/view/MediaType');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
		public function LandLord()
	{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('cid');
		$space_owner = $this->input->post('txt_space_lord');
		$space_price = $this->input->post('txt_space_price');
		$space_rent_starts = $this->input->post('txt_space_rental_start');
		$space_rent_ends = $this->input->post('txt_space_rental_end');
		$space_tax = $this->input->post('txt_space_tax');
		$space_electricity = $this->input->post('txt_space_elec');
		$space_misc = $this->input->post('txt_space_misc');
		$space_size = $this->input->post('txt_space_size');
		$space_address = $this->input->post('txt_space_add');
		$tax_size = $this->input->post('txt_tax_size');
		$space_location = $this->input->post('txt_space_loc');
		$space_remarks = $this->input->post('txt_misc_remarks');
		$spc_acq_for = $this->input->post('txt_acq_for');
		$fields = array(
			
			'sp_lord' => $space_owner,
			'acq_for' => $spc_acq_for,
			'sp_price' => $space_price,
			'sp_start' => $space_rent_starts,
			'sp_ends' => $space_rent_ends,
			'sp_tax' => $space_tax,
			'sp_elec' => $space_electricity,
			'sp_misc' => $space_misc,
			'sp_size' => $space_size,
			'sp_address' => $space_address,
			'loc' => $space_location,
			'tax_size' => $tax_size,
			'sp_remarks' => $space_remarks
		);
		$service = $this->base_model->land_update('td_landlord',$fields,$cid);
		if($service)
		{
		redirect(base_url().'index.php/view/Landlords');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function Trading()
	{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('cid');
		$space_owner = $this->input->post('txt_space_lord');
		$space_price = $this->input->post('txt_space_price');
		$space_rent_starts = $this->input->post('txt_space_rental_start');
		$space_rent_ends = $this->input->post('txt_space_rental_end');
		$space_tax = $this->input->post('txt_space_tax');
		$space_electricity = $this->input->post('txt_space_elec');
		$space_misc = $this->input->post('txt_space_misc');
		$space_size = $this->input->post('txt_space_size');
		$space_address = $this->input->post('txt_space_add');
		$space_remarks = $this->input->post('txt_misc_remarks');
		
		$fields = array(
			
			'sp_lord' => $space_owner,
			'sp_price' => $space_price,
			'sp_start' => $space_rent_starts,
			'sp_ends' => $space_rent_ends,
			'sp_tax' => $space_tax,
			'sp_elec' => $space_electricity,
			'sp_misc' => $space_misc,
			'sp_size' => $space_size,
			'sp_address' => $space_address,
			'sp_remarks' => $space_remarks
		);
		$service = $this->base_model->trade_update('td_trading',$fields,$cid);
		if($service)
		{
		redirect(base_url().'index.php/view/Trading');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function MediaCountr()
	{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('cid');
		$main_H_booked = $this->input->post('txt_main_booked_no');
		$main_H_vac = $this->input->post('txt_main_vac_no');
		$vald = $this->db->query("SELECT * FROM td_media_number WHERE num_id=".$cid)->result_array();
		if($vald[0]['display1'] != 'NA') {
			$display1_booked = $this->input->post('txt_display_booked_media_no_1');
			$display1_vacant = $this->input->post('txt_display_vacant_media_no_1');
		}
		if($vald[0]['display2'] != 'NA') {
			$display2_booked = $this->input->post('txt_display_booked_media_no_2');
			$display2_vacant = $this->input->post('txt_display_vacant_media_no_2');
		}
		if($vald[0]['display3'] != 'NA') {
			$display3_booked = $this->input->post('txt_display_booked_media_no_3');
			$display3_vacant = $this->input->post('txt_display_vacant_media_no_3');
		}
		if($vald[0]['display4'] != 'NA') {
			$display4_booked = $this->input->post('txt_display_booked_media_no_4');
			$display4_vacant = $this->input->post('txt_display_vacant_media_no_4');
		}
		if($vald[0]['display5'] != 'NA') {
			$display5_booked = $this->input->post('txt_display_booked_media_no_5');
			$display5_vacant = $this->input->post('txt_display_vacant_media_no_5');
		}
		if($vald[0]['display6'] != 'NA') {
			$display6_booked = $this->input->post('txt_display_booked_media_no_6');
			$display6_vacant = $this->input->post('txt_display_vacant_media_no_6');
		}
		$fields = array(
			'main_media_booked' => $main_H_booked,
			'main_media_vac' => $main_H_vac,
			'display1_booked' => $display1_booked,
			'display1_vacant' => $display1_vacant,
			'display2_booked' => $display2_booked,
			'display2_vacant' => $display2_vacant,
			'display3_booked' => $display3_booked,
			'display3_vacant' => $display3_vacant,
			'display4_booked' => $display4_booked,
			'display4_vacant' => $display4_vacant,
			'display5_booked' => $display5_booked,
			'display5_vacant' => $display5_vacant,
			'display6_booked' => $display6_booked,
			'display6_vacant' => $display6_vacant
		);
		$service = $this->base_model->Mcount_update('td_media_number',$fields,$cid);
		if($service)
		{
		redirect(base_url().'index.php/view/MediaCount');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function MediaSizes()
	{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('cid');
		$service = $this->input->post('txt_size');
		$note = $this->input->post('txt_notes');
		if($note == '') {
			$nts = 'N/A';
		} else {
			$nts = $this->input->post('txt_notes');
		}
		$fields = array(
			'size' => $service,
			'note' => $nts
		);
		$service = $this->base_model->size_update('td_size',$fields,$cid);
		if($service)
		{
		redirect(base_url().'index.php/view/MediaSizes');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function NewUser()
	{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('cid');
		$user = $this->input->post('txt_user');
		$pass = $this->input->post('txt_pass');
		$sflPss1 = substr($pass,0,3);
	$sflPss2 = substr($pass,-3);
	$str = $sflPss2.$pass.$sflPss1;
	$AuthKey = $this->db->query("SELECT * FROM td_pass_key")->result_array();
	$SaltKey = $AuthKey[0]['pass_key'];
	$saltedPW =  $pass . $SaltKey;
	$hashedPW = hash('sha256', $saltedPW);
		$fields = array(
			'user' => $user,
			'pass' => $hashedPW,
			'pass_original' => $pass
		);
		$service = $this->base_model->profile_update('td_admin',$fields,$cid);
		if($service)
		{
		redirect(base_url().'index.php/Index/NewUser');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	
	public function Service()
	{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('cid');
		$service = $this->input->post('txt_service');
		$note = $this->input->post('txt_notes');
		$num = $this->db->query("SELECT * FROM td_service WHERE service_id=".$cid)->result_array();
		$uni = explode('/',$num[0]['uni_code']);
		$nw_uni =  substr($service,0,4).'/BELL/'.$uni[2];
		if($note == '') {
			$nts = 'N/A';
		} else {
			$nts = $this->input->post('txt_notes');
		}
		$fields = array(
			'service_name' => $service,
			'note' => $nts,
			'uni_code' => $nw_uni
		);
		$service = $this->base_model->service_update('td_service',$fields,$cid);
		if($service)
		{
		redirect(base_url().'index.php/view/Service');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function ServiceCharge()
	{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('cid');
		$service = $this->input->post('txt_service');
		$percent = $this->input->post('txt_percent');
		$fields = array(
			'charge_name' => $service,
			'percent' => $percent
		);
		$service = $this->base_model->tax_update('td_service_charge',$fields,$cid);
		if($service)
		{
		redirect(base_url().'index.php/view/ServiceCharge');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function SubAdminAccess($admid,$typ,$col)
	{
	if ( isset($_SESSION['user'])) {
		$cid = $admid;
		$service = $typ;
		$colval = 'acc'.$col;
		$service = $this->db->query('UPDATE td_admin_access SET '.$colval.'=0 WHERE adm_id='.$cid.' AND acc_type="'.$service.'"');
		if($service)
		{
		redirect(base_url().'index.php/view/Users');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function Area()
	{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('cid');
		$service = $this->input->post('txt_area');
		$landm = $this->input->post('txt_landmark');
		$add = $this->input->post('txt_address');
		$client = $this->input->post('txt_client');
		$agg_per = $this->input->post('txt_ag_per');
		$rent_amt = $this->input->post('txt_rent_amt');
		$rmarks = $this->input->post('txt_remarks');
		$num = $this->db->query("SELECT * FROM td_area WHERE area_id=".$cid)->result_array();
		$uni = explode('/',$num[0]['uni_code']);
		$nw_uni =  substr($service,0,4).'/'.substr($landm,0,4).'/BELL/'.$uni[3];
		
		$fields = array(
			'area_name' => $service,
			'landmark' => $landm,
			'address' => $add,
			'uni_code' => $nw_uni,
			'c_name' => $client,
			'ag_p' => $agg_per,
			'rent_amt' => $rent_amt,
			'rmrks' => $rmarks
		);
		$service = $this->base_model->area_update('td_area',$fields,$cid);
		if($service)
		{
		redirect(base_url().'index.php/view/Area');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
public function Bank()
	{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('cid');
		$service = $this->input->post('txt_area');
		$client = $this->input->post('txt_landmark');
		$agg_per = $this->input->post('txt_address');
		$rent_amt = $this->input->post('txt_client');
		$rmarks = $this->input->post('txt_ag_per');
		$num = $this->db->query("SELECT * FROM td_bank WHERE area_id=".$cid)->result_array();
		$uni = explode('/',$num[0]['uni_code']);
		$nw_uni =  substr($service,0,4).'/'.substr($client,0,4).'/BELL/'.$uni[3];
		
		$fields = array(
			'area_name' => $service,
			'uni_code' => $nw_uni,
			'c_name' => $client,
			'ag_p' => $agg_per,
			'rent_amt' => $rent_amt,
			'rmrks' => $rmarks
		);
		$service = $this->base_model->area_update('td_bank',$fields,$cid);
		if($service)
		{
		redirect(base_url().'index.php/view/Bank');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}

	public function Client()
	{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('cid');
		$name = $this->input->post('txt_client');
		$phn1 = $this->input->post('txt_phn');
		$email1 = $this->input->post('txt_email');
		$add1 = $this->input->post('txt_address');
		$cl_nick = $this->input->post('txt_nick_name');
		$cl_vat = $this->input->post('txt_vat_no');
		$cl_pan = $this->input->post('txt_pan_no');
		$cl_st = $this->input->post('txt_st_no');
		if($phn1 == '') {
			$phn = 'N/A';
		} else {
			$phn = $this->input->post('txt_phn');
		}
		if($email1 == '') {
			$email = 'N/A';
		} else {
			$email = $this->input->post('txt_email');
		}
		if($add1 == '') {
			$add = 'N/A';
		} else {
			$add = $this->input->post('txt_address');
		}
		$fields = array(
			'client_name' => $name,
			'client_ph' => $phn,
			'client_email' => $email,
			'client_address' => $add,
			'client_nick' => $cl_nick,
			'client_vat' => $cl_vat,
			'client_pan' => $cl_pan,
			'client_st' => $cl_st
		);
		$service = $this->base_model->client_update('td_client',$fields,$cid);
		if($service)
		{
		redirect(base_url().'index.php/view/Client');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function Company()
	{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('cid');
		$name = $this->input->post('txt_client');
		$phn1 = $this->input->post('txt_phn');
		$email1 = $this->input->post('txt_email');
		$pan = $this->input->post('txt_pan');
		$sa = $this->input->post('txt_sa');
		$vat = $this->input->post('txt_vat');
		
		$fields = array(
			'com_name' => $name,
			'com_ph' => $phn1,
			'com_email' => $email1,
			'pan' => $pan,
			'sa' => $sa,
			'vat' => $vat
		);
		$service = $this->base_model->company_update('td_company',$fields,$cid);
		if($service)
		{
		redirect(base_url().'index.php/view/Company');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}


	public function Project()
	{
	if ( isset($_SESSION['user'])) {
		$cid = $this->input->post('cid');
		$name = $this->input->post('txt_project');
		$type = $this->input->post('txt_type');
		if($type == 'web') {
			$domain = $this->input->post('txt_domain');
		} else {
			$domain = 'N/A';
		}
		$fields = array(
			'prj_name' => $name,
			'prj_type' => $type,
			'prj_domain' => $domain
		);
		$service = $this->base_model->project_update('td_project',$fields,$cid);
		if($service)
		{
		redirect(base_url().'index.php/view/Projects');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function ServiceAssign()
	{
	if ( isset($_SESSION['user'])) {
		$sa_id = $this->input->post('sa_id');
		$client = $this->input->post('txt_client');
		$service = $this->input->post('txt_service');
		$duration = $this->input->post('txt_duration');
		$type = $this->input->post('txt_stype');
		$url = $this->input->post('txt_url');
		$cost = $this->input->post('txt_cost');
		$note = $this->input->post('txt_note');
		$alloc_date = $this->input->post('txt_alloc_date');
		if($type=='many')
                  {
		$parts_allcdate = explode('-', $alloc_date);
        $expiry_date = date('Y-m-d', mktime(0, 0, 0, $parts_allcdate[1], $parts_allcdate[2] + $duration, $parts_allcdate[0]));
		$parts_excdate = explode('-', $expiry_date);
        $notification_date = date('Y-m-d', mktime(0, 0, 0, $parts_excdate[1], $parts_excdate[2] - 15, $parts_excdate[0]));
              
		$fields = array(
			'client_id' => $client,
			'service_id' => $service,
			'cost' => $cost,
			'url' => $url,
			'type' => $type,
			'duration' => $duration,
			'allocation_date' => $alloc_date,
			'service_date' => $alloc_date,
			'notification_date' => $notification_date,
			'expiry_date' => $expiry_date,
			'note' => $note
		);
                  }
                else
                  {
                  $fields = array(
			'client_id' => $client,
			'service_id' => $service,
			'cost' => $cost,
			'url' => $url,
			'type' => $type,
			'duration' => $duration,
			'status' => 1,
			'note' => $note
		);
                  }
		$service = $this->base_model->update_data('td_service_assign',$fields,'sa_id',$sa_id);
		$this->db->query('update td_service_assign set payment_status=0 where type="many" and notification_date<="'.date('Y-m-d').'" and expiry_date>="'.date('Y-m-d').'"');
		$this->db->query('update td_service_assign set due_status=1 where  type="many" and notification_date<="'.date('Y-m-d').'" and expiry_date<="'.date('Y-m-d').'"');
		if($service)
		{
		redirect(base_url().'index.php/View/ServiceAssign');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function Payment($sa_id)
	{
	if ( isset($_SESSION['user'])) {
		$sa_id = $sa_id;
		$service = $this->db->query('select * from td_service_assign where sa_id='.$sa_id.'')->result_array();
		'select * from td_service_assign where sa_id='.$sa_id.'';
		$duration = $service[0]['duration'];
		$old_alloc_date = $service[0]['allocation_date'];
		$old_notify_date = $service[0]['notification_date'];
		$old_exp_date = $service[0]['expiry_date'];
		
		$parts_olddate = explode('-', $old_exp_date);
        $alloc_date = date('Y-m-d', mktime(0, 0, 0, $parts_olddate[1], $parts_olddate[2] + 1, $parts_olddate[0]));
		
		$parts_allcdate = explode('-', $alloc_date);
        $expiry_date = date('Y-m-d', mktime(0, 0, 0, $parts_allcdate[1], $parts_allcdate[2] + $duration, $parts_allcdate[0]));
		
		$parts_excdate = explode('-', $expiry_date);
        $notification_date = date('Y-m-d', mktime(0, 0, 0, $parts_excdate[1], $parts_excdate[2] - 15, $parts_excdate[0]));

		$fields = array(
			'allocation_date' => $alloc_date,
			'notification_date' => $notification_date,
			'expiry_date' => $expiry_date,
			'due_status' => 0,
			'payment_status' => 1
		);
		$fields_report = array(
		    'sa_id' => $sa_id,
			'service_id' => $service[0]['service_id'],
			'allocation_date' => $service[0]['allocation_date'],
			'notification_date' => $service[0]['notification_date'],
			'expiry_date' => $service[0]['expiry_date'],
			'duration' => $service[0]['duration'],
			'amount' => $service[0]['cost'],
			'submission_date' => date('Y-m-d')
		);

		$service = $this->base_model->update_data('td_service_assign',$fields,'sa_id',$sa_id);
		$service_report = $this->base_model->form_post('td_account',$fields_report);
		if($service)
		{
		redirect(base_url().'index.php/View/PaymentList');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function Profile()
{
if ( isset($_SESSION['user'])) {
$cid = $this->input->post('prof_id');
$name = $this->input->post('txt_aname');
$username = $this->input->post('txt_username');
$pass = $this->input->post('txt_pass');
$sflPss1 = substr($pass,0,3);
$sflPss2 = substr($pass,-3);
$str = $sflPss2.$pass.$sflPss1;
$saltedPW =  $pass . $str;
	$hashedPW = hash('sha256', $saltedPW);
$fields = array(
'name' => $name,
'user' => $username,
'pass' => $hashedPW
);
$service1 = $this->base_model->profile_update('td_admin',$fields,$cid);
$fields1 = array(
'pass_key' => $str
);
$service = $this->base_model->profile_update('td_pass_key',$fields1,$cid);
if($service)
{
redirect(base_url().'index.php/Index/logout');
}
}
else {
redirect(base_url().'index.php');
}
}


public function ProfileImage()
{
if ( isset($_SESSION['user'])) {
$cid = $this->input->post('prof_id');
$imges = $_FILES["txt_file"]["name"];
$exp = explode('.',$imges);
$image = $exp[0].time().'.'.$exp[1];
$temp = $_FILES["txt_file"]["tmp_name"];
$fields = array(
'photo' => $image
);
$service = $this->base_model->profile_update('td_admin',$fields,$cid);
if($service)
{
$this->base_model->file_upload($image,$temp);
$_SESSION['photo'] = '';
$show = $this->base_model->show_data('td_admin','*','')->result_array();
$_SESSION['photo'] = $show[0]['photo'];
redirect(base_url().'index.php/Index/dashboard');
}
}
else {
redirect(base_url().'index.php');
}
}

public function ServiceStatus($cid,$sa_id)
{
$fields = array(
			'status' => 0
		);

		$service = $this->base_model->update_data('td_service_assign',$fields,'sa_id',$sa_id);
		if($service)
		{
		redirect(base_url().'index.php/View/ClientService/'.$cid);
		}
		else {
		redirect(base_url().'index.php');
		}	
}
	
}