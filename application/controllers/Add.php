<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
$this->load->helper('date');
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
		$service = $this->input->post('txt_service');
		$note = $this->input->post('txt_notes');
		$num = $this->db->query("SELECT MAX(service_id) AS mid FROM td_service")->result_array();
		if($note == '') {
			$nts = 'N/A';
		} else {
			$nts = $this->input->post('txt_notes');
		}
		$uni = substr($service,0,4).'/BELL/'.$num[0]['mid'];
		$fields = array(
			'service_name' => $service,
			'note' => $nts,
			'uni_code' => $uni
		);
		$service = $this->base_model->form_post('td_service',$fields);
		if($service)
		{
		redirect(base_url().'index.php/Index/serviceadd');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function LandLord()
	{
	if ( isset($_SESSION['user'])) {
		
		
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
		$service1 = $this->base_model->form_post('td_landlord',$fields);
		$cid = $this->db->insert_id();
		
		if($service1)
		{
		redirect(base_url().'index.php/Index/Landlord');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function Trading()
	{
	if ( isset($_SESSION['user'])) {
		
		
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
		$service1 = $this->base_model->form_post('td_trading',$fields);
		$cid = $this->db->insert_id();
		
		if($service1)
		{
		redirect(base_url().'index.php/Index/Trading');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function OrderDetails()
	{
	if ( isset($_SESSION['user'])) {
		
		$Main_media = $this->input->post('txt_media');
		$Main_media_type = $this->input->post('txt_media_type');
		//print_r($this->input->post('txt_media_area'));
		$Main_media_area = implode($this->input->post('txt_media_area'),',');
		$Main_media_client = $this->input->post('txt_media_client');
		$bank_id = $this->input->post('txt_bank');
		$szMain = $this->input->post('txt_media_size');
		$nameArray = explode(",", $szMain);
		foreach($nameArray as $value)
		{
    	$trimSZ[] = trim($value);
		}
		$Main_media_sz = implode($trimSZ,',');
		$stringSz = rtrim($Main_media_sz, ',');
		
		$Main_media_size2 = explode(',',$stringSz);
		$cntSZ = count($Main_media_size2)-1;
		
		//print_r($Main_media_size2);die;exit;
		//$Main_media_size1 = implode(array_map('trim',$Main_media_size2),"','");
		//if($Main_media_size1 == '') {
//		$Main_media_size = 'NA';
//		} else {
//		$Main_media_size = $Main_media_size1;
//		}
		//echo "SELECT * FROM td_size WHERE size IN('".$Main_media_size1."')";
		for($i=0;$i<=$cntSZ;$i++){
			//echo "SELECT * FROM td_size WHERE size ='".$Main_media_size2[$i]."'";
			$srchSz=str_replace(' ','',$Main_media_size2[$i]);
		$sizeId = $this->db->query("SELECT * FROM td_size WHERE size LIKE '%".$srchSz."%'")->result_array();
		$szids[]=$sizeId[0]['size_id'];
			}
		$Main_media_size = implode($szids,',');
		
		$Main_media_bill = $this->input->post('txt_media_bill');
		$Main_media_title1 = $this->input->post('txt_media_title');
		if($Main_media_title1 == '') {
			$Main_media_title= 'NA';
			}
		else {
			$Main_media_title= $Main_media_title1;
			}
		$Main_media_typeP = $this->input->post('package');
		if($Main_media_typeP == 1) {
			$Main_space_chrge= $this->input->post('txt_space_monthly');
			$Main_space_amt= $this->input->post('txt_chrge_amt');
			}
		else {
			$Main_space_chrge= 'NA';
			$Main_space_amt= 'NA';
			}		
		$Main_media_price = $this->input->post('txt_price');
		$Main_media_price_mounting = $this->input->post('txt_price_mounting');
		$Main_media_price_mnthly = $this->input->post('txt_price_monthly');
		$Main_media_quantity = $this->input->post('txt_quantity');
		$Main_media_total = $this->input->post('txt_total');
		$Main_media_rent_f = $this->input->post('txt_rental_from');
		$Main_media_rent_t = $this->input->post('txt_rental_to');
		$Main_media_bill_no = $this->input->post('txt_new_bill');
		$expBill = explode('/',$Main_media_bill_no);
		$bilnCount = count($expBill)-1;
		$Main_media_bill_date = $this->input->post('txt_bill_date');
		$exp = explode('/',$Main_media_bill_date);
		$bill_month = $exp[0];
		$bill_date = $exp[1];
		$bill_year = $exp[2];
		$Main_media_tax_id = $this->input->post('txt_tax_id');
		$taxplode = explode(',',$Main_media_tax_id);
		$cnt = count($taxplode);
		$Main_media_tax_1 = $this->input->post('per_1');
		$Main_media_tax_2 = $this->input->post('per_2');
		$Main_media_tax_3 = $this->input->post('per_3');
		$Main_media_tax_4 = $this->input->post('per_4');
		$Main_media_tax_5 = $this->input->post('per_5');
		$Main_media_tax_6 = $this->input->post('per_6');
		if(!empty($Main_media_tax_1)) {
		$Main_media_tax1 = $Main_media_tax_1;
		} else {
		$Main_media_tax1 =0;	
		}
		if(!empty($Main_media_tax_2)) {
		$Main_media_tax2 = $Main_media_tax_2;
		} else {
		$Main_media_tax2 =0;	
		}
		if(!empty($Main_media_tax_3)) {
		$Main_media_tax3 = $Main_media_tax_3;
		} else {
		$Main_media_tax3 =0;	
		}
		if(!empty($Main_media_tax_4)) {
		$Main_media_tax4 = $Main_media_tax_4;
		} else {
		$Main_media_tax4 =0;	
		}
		if(!empty($Main_media_tax_5)) {
		$Main_media_tax5 = $Main_media_tax_5;
		} else {
		$Main_media_tax5 =0;	
		}
		if(!empty($Main_media_tax_6)) {
		$Main_media_tax6 = $Main_media_tax_6;
		} else {
		$Main_media_tax6 =0;	
		}
		
		$Main_media_othr_chrg = $this->input->post('txt_other_amt');
		if($Main_media_othr_chrg != '') {
			$media_other_charge = $Main_media_othr_chrg;
			} else {
			$media_other_charge = '0';
			}
		$Main_media_chrgable_amt = round($this->input->post('txt_chrg_amt'));
		$Order_note = $this->input->post('txt_note');
		$space_owner = $this->input->post('txt_land_lord_dtl');
		$trade_owner = $this->input->post('txt_trade_dtlt');
		$space_price = 'NA';
		$space_rent_starts = 'NA';
		$space_rent_ends = 'NA';
		$space_tax = 'NA';
		$space_electricity = 'NA';
		$space_misc = 'NA';
		$space_size = 'NA';
		$space_address = 'NA';
		$space_remarks = 'NA';
		$po_no = $this->input->post('txt_po_no');
		$fields = array(
			'main_media' => $Main_media,
			'media_type' => $Main_media_type,
			'area' => $Main_media_area,
			'client' => $Main_media_client,
			'size' => $Main_media_size,
			'bill_type' => $Main_media_bill,
			'bank' => $bank_id,
			'main_media_title' => $Main_media_title,
			'main_price_unit' => $Main_media_price,
			'main_price_unit_mounting' => $Main_media_price_mounting,
			'main_price_unit_mnthly' => $Main_media_price_mnthly,
			'quantity' => $Main_media_quantity,
			'unit_total' => $Main_media_total,
			'rent_f' => $Main_media_rent_f,
			'rent_t' => $Main_media_rent_t,
			'bill_m' => $bill_month,
			'bill_d' => $bill_date,
			'bill_y' => $bill_year,
			'tax_id' => $Main_media_tax_id,
			'tax1' => $Main_media_tax1,
			'tax2' => $Main_media_tax2,
			'tax3' => $Main_media_tax3,
			'tax4' => $Main_media_tax4,
			'tax5' => $Main_media_tax5,
			'tax6' => $Main_media_tax6,
			'other_charge' => $media_other_charge,
			'bill_no' => $expBill[$bilnCount],
			'invoice_no' => $Main_media_bill_no,
			'chrge_amt' => $Main_media_chrgable_amt,
			'billing_date' => $Main_media_bill_date,
			'sp_lord' => $space_owner,
			'trade_lord' => $trade_owner,
			'sp_price' => $space_price,
			'sp_start' => $space_rent_starts,
			'sp_ends' => $space_rent_ends,
			'sp_tax' => $space_tax,
			'sp_elec' => $space_electricity,
			'sp_misc' => $space_misc,
			'sp_size' => $space_size,
			'sp_address' => $space_address,
			'note' => $Order_note,
			'po_no' => $po_no,
			'sp_remarks' => $space_remarks,
			'package_type' => $Main_media_typeP,
			'space_chrge' => $Main_space_chrge,
			'space_amt' => $Main_space_amt
		);
		$service1 = $this->base_model->form_post('td_order',$fields);
		$cid = $this->db->insert_id();
		//$num = $this->db->query("SELECT MAX(order_id) AS oid FROM td_order WHERE bill_m=".$bill_month." AND bill_y=".$bill_year)->result_array();
		//$mno = $num[0]['oid']+1;
		//$inv_no = 'B/SYNS/'.$Main_media_bill.'/'.$cid;
//		$fields1 = array(
//			'invoice_no' => $inv_no
//		);
//		$service = $this->base_model->order_update('td_order',$fields1,$cid);
		if($service1)
		{
		redirect(base_url().'index.php/Index/OrderSuccess/'.$cid);
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function PrintOrderDetails()
	{
	if ( isset($_SESSION['user'])) {
		
		$Main_media = $this->input->post('txt_media');
		$Main_media_type = $this->input->post('txt_media_type');
		$Main_media_area = implode($this->input->post('txt_media_area'),',');
		$Main_media_client = $this->input->post('txt_media_client');
		$bank_id = $this->input->post('txt_bank');
		$Main_media_sides = $this->input->post('txt_media_side');
		$szMain = $this->input->post('txt_media_size');
		$nameArray = explode(",", $szMain);
		foreach($nameArray as $value)
		{
    	$trimSZ[] = trim($value);
		}
		$Main_media_sz = implode($trimSZ,',');
		$stringSz = rtrim($Main_media_sz, ',');
		
		$Main_media_size2 = explode(',',$stringSz);
		$cntSZ = count($Main_media_size2)-1;
		for($i=0;$i<=$cntSZ;$i++){
			//echo "SELECT * FROM td_size WHERE size ='".$Main_media_size2[$i]."'";
			$srchSz=str_replace(' ','',$Main_media_size2[$i]);
		$sizeId = $this->db->query("SELECT * FROM td_size WHERE size LIKE '%".$srchSz."%'")->result_array();
		$szids[]=$sizeId[0]['size_id'];
			}
		$Main_media_size = implode($szids,',');
		$Main_media_bill = $this->input->post('txt_media_bill');
		$Main_media_title1 = $this->input->post('txt_media_title');
		if($Main_media_title1 == '') {
			$Main_media_title= 'NA';
			}
		else {
			$Main_media_title= $Main_media_title1;
			}	
			$Main_media_typeP = $this->input->post('package');
		if($Main_media_typeP == 1) {
			$Main_space_chrge= $this->input->post('txt_sqr_fit');
			$Main_space_amt= $this->input->post('txt_chrge_amt');
			}
		else {
			$Main_space_chrge= 'NA';
			$Main_space_amt= 'NA';
			}
		$Main_media_price = $this->input->post('txt_price');
		$Main_media_quantity = $this->input->post('txt_quantity');
		$Main_media_total = $this->input->post('txt_total');
		$Main_media_rent_f = 'NA';
		$Main_media_rent_t = 'NA';
		$Main_media_bill_no = $this->input->post('txt_new_bill');
		$expBill = explode('/',$Main_media_bill_no);
		$bilnCount = count($expBill)-1;
		$Main_media_bill_date = $this->input->post('txt_bill_date');
		$exp = explode('/',$Main_media_bill_date);
		$bill_month = $exp[0];
		$bill_date = $exp[1];
		$bill_year = $exp[2];
		$Main_media_tax_id = $this->input->post('txt_tax_id');
		$taxplode = explode(',',$Main_media_tax_id);
		$cnt = count($taxplode);
		$Main_media_tax_1 = $this->input->post('per_1');
		$Main_media_tax_2 = $this->input->post('per_2');
		$Main_media_tax_3 = $this->input->post('per_3');
		$Main_media_tax_4 = $this->input->post('per_4');
		$Main_media_tax_5 = $this->input->post('per_5');
		$Main_media_tax_6 = $this->input->post('per_6');
		if(!empty($Main_media_tax_1)) {
		$Main_media_tax1 = $Main_media_tax_1;
		} else {
		$Main_media_tax1 =0;	
		}
		if(!empty($Main_media_tax_2)) {
		$Main_media_tax2 = $Main_media_tax_2;
		} else {
		$Main_media_tax2 =0;	
		}
		if(!empty($Main_media_tax_3)) {
		$Main_media_tax3 = $Main_media_tax_3;
		} else {
		$Main_media_tax3 =0;	
		}
		if(!empty($Main_media_tax_4)) {
		$Main_media_tax4 = $Main_media_tax_4;
		} else {
		$Main_media_tax4 =0;	
		}
		if(!empty($Main_media_tax_5)) {
		$Main_media_tax5 = $Main_media_tax_5;
		} else {
		$Main_media_tax5 =0;	
		}
		if(!empty($Main_media_tax_6)) {
		$Main_media_tax6 = $Main_media_tax_6;
		} else {
		$Main_media_tax6 =0;	
		}
		
		$Main_media_othr_chrg = $this->input->post('txt_other_amt');
		if($Main_media_othr_chrg != '') {
			$media_other_charge = $Main_media_othr_chrg;
			} else {
			$media_other_charge = '0';
			}
		$Main_media_chrgable_amt = round($this->input->post('txt_chrg_amt'));
		$Order_note = $this->input->post('txt_note');
		$po_no = $this->input->post('txt_po_no');
		$space_owner = 'NA';
		$space_price = 'NA';
		$space_rent_starts = 'NA';
		$space_rent_ends = 'NA';
		$space_tax = 'NA';
		$space_electricity = 'NA';
		$space_misc ='NA';
		$space_size = 'NA';
		$space_address = 'NA';
		$fields = array(
			'main_media' => $Main_media,
			'media_type' => $Main_media_type,
			'area' => $Main_media_area,
			'client' => $Main_media_client,
			'size' => $Main_media_size,
			'bill_type' => $Main_media_bill,
			'bank' => $bank_id,
			'main_media_title' => $Main_media_title,
			'main_price_unit' => $Main_media_price,
			'quantity' => $Main_media_quantity,
			'unit_total' => $Main_media_total,
			'rent_f' => $Main_media_rent_f,
			'rent_t' => $Main_media_rent_t,
			'bill_m' => $bill_month,
			'bill_d' => $bill_date,
			'bill_y' => $bill_year,
			'tax_id' => $Main_media_tax_id,
			'tax1' => $Main_media_tax1,
			'tax2' => $Main_media_tax2,
			'tax3' => $Main_media_tax3,
			'tax4' => $Main_media_tax4,
			'tax5' => $Main_media_tax5,
			'tax6' => $Main_media_tax6,
			'other_charge' => $media_other_charge,
			'bill_no' => $expBill[$bilnCount],
			'invoice_no' => $Main_media_bill_no,
			'chrge_amt' => $Main_media_chrgable_amt,
			'billing_date' => $Main_media_bill_date,
			'sp_lord' => $space_owner,
			'sp_price' => $space_price,
			'sp_start' => $space_rent_starts,
			'sp_ends' => $space_rent_ends,
			'sp_tax' => $space_tax,
			'sp_elec' => $space_electricity,
			'sp_misc' => $space_misc,
			'sp_size' => $space_size,
			'sp_address' => $space_address,
			'note' => $Order_note,
			'po_no' => $po_no,
			'print_sides' => $Main_media_sides,
			'package_type' => $Main_media_typeP,
			'tot_sqr_fit_P' => $Main_space_chrge,
			'tot_amt_p' => $Main_space_amt
		);
		$service1 = $this->base_model->form_post('td_order',$fields);
		$cid = $this->db->insert_id();
		//$num = $this->db->query("SELECT MAX(order_id) AS oid FROM td_order WHERE bill_m=".$bill_month." AND bill_y=".$bill_year)->result_array();
		//$mno = $num[0]['oid']+1;
		//$inv_no = 'B/SYNS/'.$Main_media_bill.'/'.$cid;
//		$fields1 = array(
//			'invoice_no' => $inv_no
//		);
//		$service = $this->base_model->order_update('td_order',$fields1,$cid);
		if($service1)
		{
		redirect(base_url().'index.php/Index/OrderSuccess/'.$cid);
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function MediaNumber()
	{
	if ( isset($_SESSION['user'])) {
		$main_H = $this->input->post('txt_media');
		$main_H_booked = $this->input->post('txt_main_booked_no');
		$main_H_vac = $this->input->post('txt_main_vac_no');
		if($this->input->post('txt_display_media_1') != '') {
			$display1 = $this->input->post('txt_display_media_1');
			$display1_booked = $this->input->post('txt_display_booked_media_no_1');
			$display1_vacant = $this->input->post('txt_display_vacant_media_no_1');
			} else {
				$display1 = 'NA';
			$display1_booked = 'NA';
			$display1_vacant = 'NA';
			}
			if($this->input->post('txt_display_media_2')!= '') {
			$display2 = $this->input->post('txt_display_media_2');
			$display2_booked = $this->input->post('txt_display_booked_media_no_2');
			$display2_vacant = $this->input->post('txt_display_vacant_media_no_2');
			} else {
				$display2 = 'NA';
			$display2_booked = 'NA';
			$display2_vacant = 'NA';
			}
			if($this->input->post('txt_display_media_3')!= '') {
			$display3 = $this->input->post('txt_display_media_3');
			$display3_booked = $this->input->post('txt_display_booked_media_no_3');
			$display3_vacant = $this->input->post('txt_display_vacant_media_no_3');
			} else {
				$display3 = 'NA';
			$display3_booked = 'NA';
			$display3_vacant = 'NA';
			}
			if($this->input->post('txt_display_media_4')!= '') {
			$display4 = $this->input->post('txt_display_media_4');
			$display4_booked = $this->input->post('txt_display_booked_media_no_4');
			$display4_vacant = $this->input->post('txt_display_vacant_media_no_4');
			} else {
				$display4 = 'NA';
			$display4_booked = 'NA';
			$display4_vacant = 'NA';
			}
			if($this->input->post('txt_display_media_5')!= '') {
			$display5 = $this->input->post('txt_display_media_5');
			$display5_booked = $this->input->post('txt_display_booked_media_no_5');
			$display5_vacant = $this->input->post('txt_display_vacant_media_no_5');
			} else {
				$display5 = 'NA';
			$display5_booked = 'NA';
			$display5_vacant = 'NA';
			}
			if($this->input->post('txt_display_media_6')!= '') {
			$display6 = $this->input->post('txt_display_media_6');
			$display6_booked = $this->input->post('txt_display_booked_media_no_6');
			$display6_vacant = $this->input->post('txt_display_vacant_media_no_6');
			} else {
				$display6 = 'NA';
			$display6_booked = 'NA';
			$display6_vacant = 'NA';
			}
		$area = $this->input->post('txt_media_area');
		
		$fields = array(
			'main_media' => $main_H,
			'main_media_booked' => $main_H_booked,
			'main_media_vac' => $main_H_vac,
			'display1' => $display1,
			'display1_booked' => $display1_booked,
			'display1_vacant' => $display1_vacant,
			'display2' => $display2,
			'display2_booked' => $display2_booked,
			'display2_vacant' => $display2_vacant,
			'display3' => $display3,
			'display3_booked' => $display3_booked,
			'display3_vacant' => $display3_vacant,
			'display4' => $display4,
			'display4_booked' => $display4_booked,
			'display4_vacant' => $display4_vacant,
			'display5' => $display5,
			'display5_booked' => $display5_booked,
			'display5_vacant' => $display5_vacant,
			'display6' => $display6,
			'display6_booked' => $display6_booked,
			'display6_vacant' => $display6_vacant,
			'area' => $area
		);
		$service = $this->base_model->form_post('td_media_number',$fields);
		if($service)
		{
		redirect(base_url().'index.php/Index/MediaCount');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function ServiceCharge()
	{
	if ( isset($_SESSION['user'])) {
		$service = $this->input->post('txt_service');
		$percent = $this->input->post('txt_percent');
		$fields = array(
			'charge_name' => $service,
			'percent' => $percent
		);
		$service = $this->base_model->form_post('td_service_charge',$fields);
		if($service)
		{
		redirect(base_url().'index.php/Index/Taxes');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function GiveAccess($admn_id)
	{
	if ( isset($_SESSION['user'])) {
		$admin_id = $admn_id;
		//$service = implode(',',$this->input->post('add'));
		$service_typ = $this->input->post('access_type');
		//$expAdding = explode(',',$service);
		//$expAdd = count(explode(',',$service));
		//$limit = $expAdd-1;
		$serviceDel=  $this->db->query('delete from td_admin_access where adm_id = '.$admin_id.' AND acc_type="'.$service_typ.'"');
		if($service_typ == 'add') {
		$fields = array(
			'adm_id' => $admin_id,
			'acc1' => $this->input->post('a1'),
			'acc2' => $this->input->post('a2'),
			'acc3' => $this->input->post('a3'),
			'acc4' => $this->input->post('a4'),
			'acc5' => $this->input->post('a5'),
			'acc6' => $this->input->post('a6'),
			'acc7' => $this->input->post('a7'),
			'acc8' => $this->input->post('a8'),
			'acc9' => $this->input->post('a9'),
			'acc10' => $this->input->post('a10'),
			'acc11' => $this->input->post('a11'),
			'acc12' => $this->input->post('a12'),
			'acc13' => $this->input->post('a13'),
			'acc14' => $this->input->post('a14'),
			'acc15' => $this->input->post('a15'),
			'acc16' => $this->input->post('a16'),
			'acc17' => $this->input->post('a17'),
			'acc_type' => $service_typ
		);
	} elseif($service_typ == 'view') {
		$fields = array(
			'adm_id' => $admin_id,
			'acc1' => $this->input->post('b1'),
			'acc2' => $this->input->post('b2'),
			'acc3' => $this->input->post('b3'),
			'acc4' => $this->input->post('b4'),
			'acc5' => $this->input->post('b5'),
			'acc6' => $this->input->post('b6'),
			'acc7' => $this->input->post('b7'),
			'acc8' => $this->input->post('b8'),
			'acc9' => $this->input->post('b9'),
			'acc10' => $this->input->post('b10'),
			'acc11' => $this->input->post('b11'),
			'acc16' => $this->input->post('b16'),
			'acc15' => $this->input->post('b15'),
			'acc14' => $this->input->post('b14'),
			'acc13' => $this->input->post('b13'),
			'acc17' => $this->input->post('b17'),
			'acc_type' => $service_typ
		);
	}
		$service = $this->base_model->form_post('td_admin_access',$fields);
		
		
		if($service)
		{
		redirect(base_url().'index.php/View/Users');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function NewUser()
	{
	if ( isset($_SESSION['user'])) {
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
			'login_allow' => 1,
			'sub_admin' => 1,
			'attempt_count' => 0,
			'pass_original' => $pass
		);
		
		$service = $this->base_model->form_post('td_admin',$fields);
		$lid = $this->db->insert_id();
		$fields1 = array(
			'adm_id' => $lid,
			'acc1' => 0,
			'acc2' => 0,
			'acc3' => 0,
			'acc4' => 0,
			'acc5' => 0,
			'acc6' => 0,
			'acc7' => 0,
			'acc8' => 0,
			'acc9' => 0,
			'acc10' => 0,
			'acc11' => 0,
			'acc12' => 0,
			'acc13' => 0,
			'acc14' => 0,
			'acc15' => 0,
			'acc16' => 0,
			'acc_type' => 'add'
		);
		$fields2 = array(
			'adm_id' => $lid,
			'acc1' => 0,
			'acc2' => 0,
			'acc3' => 0,
			'acc4' => 0,
			'acc5' => 0,
			'acc6' => 0,
			'acc7' => 0,
			'acc8' => 0,
			'acc9' => 0,
			'acc10' => 0,
			'acc11' => 0,
			'acc12' => 0,
			'acc13' => 0,
			'acc14' => 0,
			'acc15' => 0,
			'acc16' => 0,
			'acc_type' => 'view'
		);
		$service1 = $this->base_model->form_post('td_admin_access',$fields1);
		$service2 = $this->base_model->form_post('td_admin_access',$fields2);
		if($service)
		{
		redirect(base_url().'index.php/Index/NewUser');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	
	public function Area()
	{
	if ( isset($_SESSION['user'])) {
		$service = $this->input->post('txt_area');
		$landm = $this->input->post('txt_landmark');
		$add = $this->input->post('txt_address');
		$client = $this->input->post('txt_client');
		$agg_per = $this->input->post('txt_ag_per');
		$rent_amt = $this->input->post('txt_rent_amt');
		$rmarks = $this->input->post('txt_remarks');
		$num1 = $this->db->query("SELECT MAX(area_id) AS aid FROM td_area")->result_array();
		if($num1[0]['aid'] == '') {$num=1;} else {$num = $num1[0]['aid']+1;}
		$uni = substr($service,0,4).'/'.substr($landm,0,4).'/BELL/'.$num;
		$fields = array(
			'area_name' => $service,
			'landmark' => $landm,
			'address' => $add,
			'uni_code' => $uni,
			'c_name' => $client,
			'ag_p' => $agg_per,
			'rent_amt' => $rent_amt,
			'rmrks' => $rmarks
		);
		$service = $this->base_model->form_post('td_area',$fields);
		if($service)
		{
		redirect(base_url().'index.php/Index/Area');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function Bank()
	{
	if ( isset($_SESSION['user'])) {
		$service = $this->input->post('txt_area');
		$client = $this->input->post('txt_client');
		$agg_per = $this->input->post('txt_ag_per');
		$rent_amt = $this->input->post('txt_rent_amt');
		$rmarks = $this->input->post('txt_remarks');
		$num1 = $this->db->query("SELECT MAX(area_id) AS aid FROM td_bank")->result_array();
		if($num1[0]['aid'] == '') {$num=1;} else {$num = $num1[0]['aid']+1;}
		$uni = substr($service,0,4).'/'.substr($client,0,4).'/BELL/'.$num;
		$fields = array(
			'area_name' => $service,
			'uni_code' => $uni,
			'c_name' => $client,
			'ag_p' => $agg_per,
			'rent_amt' => $rent_amt,
			'rmrks' => $rmarks
		);
		$service = $this->base_model->form_post('td_bank',$fields);
		if($service)
		{
		redirect(base_url().'index.php/Index/Bank');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function SignalInstal()
	{
	if ( isset($_SESSION['user'])) {
		$area = $this->input->post('txt_media_area');
		$od_no = $this->input->post('txt_od_no');
		$od_frm = $this->input->post('txt_od_frm');
		$client = $this->input->post('txt_media_client');
		$Order_upto = $this->input->post('txt_space_rental_start');
		$pole = $this->input->post('txt_pole');
		$arm = $this->input->post('txt_arm');
		$bld_mat = $this->input->post('txt_build_material');
		$paints = $this->input->post('txt_paint');
		$aspects = $this->input->post('txt_aspects');
		$led = $this->input->post('txt_led');
		$met_box = $this->input->post('txt_meter_box');
		$ctrl_box = $this->input->post('txt_ctrl_box');
		$cble = $this->input->post('txt_cable');
		$cpu = $this->input->post('txt_cpu');
		$psply = $this->input->post('txt_p_sply');
		$moduler = $this->input->post('txt_moduler');
		$modem = $this->input->post('txt_modem');
		$antena = $this->input->post('txt_antena');
		$jb = $this->input->post('txt_jb_box');
		$connector = $this->input->post('txt_connector');
		$wiring_wire = $this->input->post('txt_p_wire');
		$op_box = $this->input->post('txt_op_box');
		$dp = $this->input->post('txt_dp_switch');
		$push_switch = $this->input->post('txt_psh_swtch');
		$transform = $this->input->post('txt_transformer');
		$rlay_pan = $this->input->post('txt_rlay_panel');
		$fuse_conect = $this->input->post('txt_fuse_conect');
		$fuse = $this->input->post('txt_fuse');
		$tie = $this->input->post('txt_tie');
		$terminal = $this->input->post('txt_terminal');
		$earthin = $this->input->post('txt_erth_rode');
		$fst_note = $this->input->post('1st_note');
		$se_note = $this->input->post('2nd_note');
		$th_note = $this->input->post('3rd_note');
		$fields = array(
		'area' => $area,
			'od_num' => $od_no,
			'od_from' => $od_frm,
			'client' => $client,
			'duration' => $Order_upto,
			'pole' => $pole,
			'arm' => $arm,
			'bld_mat' => $bld_mat,
			'paints' => $paints,
			'aspects' => $aspects,
			'led' => $led,
			'met_box' => $met_box,
			'ctrl_box' => $ctrl_box,
			'cble' => $cble,
			'cpu' => $cpu,
			'psply' => $psply,
			'moduler' => $moduler,
			'modem' => $modem,
			'antena' => $antena,
			'jb' => $jb,
			'connector' => $connector,
			'wiring_wire' => $wiring_wire,
			'op_box' => $op_box,
			'dp' => $dp,
			'push_switch' => $push_switch,
			'transform' => $transform,
			'rlay_pan' => $rlay_pan,
			'fuse_conect' => $fuse_conect,
			'fuse' => $fuse,
			'tie' => $tie,
			'terminal' => $terminal,
			'earthin' => $earthin,
			'first_note' => $fst_note,
			'second_note' => $se_note,
			'third_note' => $th_note
		);
		$service = $this->base_model->form_post('td_signal',$fields);
		if($service)
		{
		redirect(base_url().'index.php/Index/signalInstal');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function HordingInstal()
	{
	if ( isset($_SESSION['user'])) {
		$area = $this->input->post('txt_media_area');
		$od_no = $this->input->post('txt_od_no');
		$od_frm = $this->input->post('txt_od_frm');
		$client = $this->input->post('txt_media_client');
		$Order_upto = $this->input->post('txt_space_rental_start');
		$joist = $this->input->post('txt_joist');
		$channel = $this->input->post('txt_channel');
		$angel = $this->input->post('txt_angel');
		$nut = $this->input->post('txt_nut_bolt');
		$cement = $this->input->post('txt_cement');
		$sand = $this->input->post('txt_sand');
		$stone = $this->input->post('txt_stn_chps');
		$brick = $this->input->post('txt_brick');
		$sheet = $this->input->post('txt_sheet');
		$wood = $this->input->post('txt_wood');
		$nail = $this->input->post('txt_nail');
		$labour = $this->input->post('txt_labour');
		$lamp = $this->input->post('txt_lamp');
		$chok = $this->input->post('txt_choke');
		$ignator = $this->input->post('txt_ignator');
		$condensor = $this->input->post('txt_condensor');
		$holder = $this->input->post('txt_holder');
		$fst_note = $this->input->post('1st_note');
		$se_note = $this->input->post('2nd_note');
		$th_note = $this->input->post('3rd_note');
		$f_note = $this->input->post('4th_note');
		$fields = array(
		'area' => $area,
			'od_num' => $od_no,
			'od_from' => $od_frm,
			'client' => $client,
			'duration' => $Order_upto,
			'joist' => $joist,
			'channel' => $channel,
			'angel' => $angel,
			'nut' => $nut,
			'cement' => $cement,
			'sand' => $sand,
			'stone' => $stone,
			'brick' => $brick,
			'sheet' => $sheet,
			'wood' => $wood,
			'nail' => $nail,
			'labour' => $labour,
			'lamp' => $lamp,
			'chok' => $chok,
			'ignator' => $ignator,
			'condensor' => $condensor,
			'holder' => $holder,
			'first_note' => $fst_note,
			'second_note' => $se_note,
			'third_note' => $th_note,
			'frth_note' => $f_note
		);
		$service = $this->base_model->form_post('td_hording_instal',$fields);
		if($service)
		{
		redirect(base_url().'index.php/Index/HordingInstal');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function PoleKiosk()
	{
	if ( isset($_SESSION['user'])) {
		$area = $this->input->post('txt_media_area');
		$od_no = $this->input->post('txt_od_no');
		$od_frm = $this->input->post('txt_od_frm');
		$client = $this->input->post('txt_media_client');
		$Order_upto = $this->input->post('txt_space_rental_start');
		$pole = $this->input->post('txt_pole');
		$kiosk = $this->input->post('txt_kiosk_type');
		$bld_mat = $this->input->post('txt_bldng_mat');
		$f_note = $this->input->post('4th_note');
		$fields = array(
		'area' => $area,
			'od_num' => $od_no,
			'od_from' => $od_frm,
			'client' => $client,
			'duration' => $Order_upto,
			'pole' => $pole,
			'kiosk' => $kiosk,
			'material' => $bld_mat,
			'frth_note' => $f_note
		);
		$service = $this->base_model->form_post('td_pole_kiosk',$fields);
		if($service)
		{
		redirect(base_url().'index.php/Index/PoleKiosk');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function Size()
	{
	if ( isset($_SESSION['user'])) {
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
		$service = $this->base_model->form_post('td_size',$fields);
		if($service)
		{
		redirect(base_url().'index.php/Index/MediaSizes');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function Client()
	{
	if ( isset($_SESSION['user'])) {
		$name = $this->input->post('txt_client');
		$phn1 = $this->input->post('txt_phn');
		$email1 = $this->input->post('txt_email');
		$add1 = $this->input->post('txt_address');
		$cmpny1 = $this->input->post('txt_company');
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
		if($cmpny1 == '') {
			$cmpny = 'N/A';
		} else {
			$cmpny = $this->input->post('txt_company');
		}
		$fields = array(
			'client_name' => $name,
			'client_ph' => $phn,
			'client_email' => $email,
			'client_address' => $add,
			'client_company' => $cmpny,
			'client_nick' => $cl_nick,
			'client_vat' => $cl_vat,
			'client_pan' => $cl_pan,
			'client_st' => $cl_st
		);
		$service = $this->base_model->form_post('td_client',$fields);
		if($service)
		{
		redirect(base_url().'index.php/Index/clientadd');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function Company()
	{
	if ( isset($_SESSION['user'])) {
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
		$service = $this->base_model->form_post('td_company',$fields);
		if($service)
		{
		redirect(base_url().'index.php/Index/CompanyAdd');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}

	public function Project()
	{
	if ( isset($_SESSION['user'])) {
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
		$service = $this->base_model->form_post('td_project',$fields);
		if($service)
		{
		redirect(base_url().'index.php/Index/projectadd');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	public function ServiceAssign()
	{
	if ( isset($_SESSION['user'])) {
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
		// print_r($parts_allcdate);die;
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
			'status' => 1,
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

		$service = $this->base_model->form_post('td_service_assign',$fields);
		$this->db->query('update td_service_assign set payment_status=0 where  type="many" and  notification_date<="'.date('Y-m-d').'" and expiry_date>="'.date('Y-m-d').'"');
		$this->db->query('update td_service_assign set due_status=1 where  type="many" and notification_date<="'.date('Y-m-d').'" and expiry_date<="'.date('Y-m-d').'"');
		if($service)
		{
		redirect(base_url().'index.php/View/serviceassign');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}
	
	public function MediaType()
	{
	if ( isset($_SESSION['user'])) {
		$service = $this->input->post('txt_media');
		$mtype = $this->input->post('txt_type');
		//echo "SELECT MAX(type_id) AS mid FROM td_media_type";exit;
		$num = $this->db->query("SELECT MAX(type_id) AS mid FROM td_media_type")->result_array();
		if($num[0]['mid'] == '') {
			$nm = 1;
			}else {
		$nm = $num[0]['mid']+1;
		}
		$mmedia = $this->db->query("SELECT * FROM td_service WHERE service_id=".$service)->result_array();
		$uni = substr($mtype,0,4).'/'.substr($mmedia[0]['service_name'],0,4).'/BELL/'.$nm;
		$fields = array(
			'main_media_name' => $service,
			'type' => $mtype,
			'uni_code' => $uni
		);
		$service = $this->base_model->form_post('td_media_type',$fields);
		if($service)
		{
		redirect(base_url().'index.php/Index/MediaType');
		}
		}
		else {
		redirect(base_url().'index.php');
		}
	}

}
