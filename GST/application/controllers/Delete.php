<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
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
	$service=  $this->db->query('delete from td_service where service_id = '.$id);
	redirect(base_url().'index.php/view/Service');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Trading($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service=  $this->db->query('delete from td_trading where trad_id = '.$id);
	redirect(base_url().'index.php/view/Trading');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Orders($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service=  $this->db->query('delete from td_order where order_id = '.$id);
	redirect(base_url().'index.php/view/Orders');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
		public function Signal($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service=  $this->db->query('delete from td_signal where sig_id = '.$id);
	redirect(base_url().'index.php/view/SignalInstal');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
		public function HordingDetails($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service=  $this->db->query('delete from td_hording_instal where hord_id = '.$id);
	redirect(base_url().'index.php/view/hordingInstal');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Landlord($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service=  $this->db->query('delete from td_landlord where land_id = '.$id);
	redirect(base_url().'index.php/view/Landlords');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function PoleKiosk($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service=  $this->db->query('delete from td_pole_kiosk where pl_id = '.$id);
	redirect(base_url().'index.php/view/PoleKiosk');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function User($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service=  $this->db->query('delete from td_admin where id = '.$id);
	redirect(base_url().'index.php/view/Users');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Company($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service=  $this->db->query('delete from td_company where com_id = '.$id);
	redirect(base_url().'index.php/view/Service');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function MediaCount($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service=  $this->db->query('delete from td_media_number where num_id = '.$id);
	redirect(base_url().'index.php/view/MediaCount');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function ServiceCharge($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service=  $this->db->query('delete from td_service_charge where sc_id = '.$id);
	redirect(base_url().'index.php/view/ServiceCharge');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Area($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service=  $this->db->query('delete from td_area where area_id = '.$id);
	redirect(base_url().'index.php/view/Area');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
		public function Bank($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service=  $this->db->query('delete from td_bank where area_id = '.$id);
	redirect(base_url().'index.php/view/Bank');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function MediaSizes($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service=  $this->db->query('delete from td_size where size_id = '.$id);
	redirect(base_url().'index.php/view/MediaSizes');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function MediaType($id)
	{
	
		if ( isset($_SESSION['user'])) {
	$service=  $this->db->query('delete from td_media_type where type_id = '.$id);
	redirect(base_url().'index.php/view/Mediatype');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function Client($id)
	{
	if ( isset($_SESSION['user'])) {

	$service= $this->db->query('delete from td_client where client_id = '.$id);
	redirect(base_url().'index.php/view/Client');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}

	public function Project($pid)
	{
	if ( isset($_SESSION['user'])) {
	$service= $this->db->query('delete from td_project where prj_id = '.$pid);
	redirect(base_url().'index.php/view/Projects');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	public function ServiceAssign($sa_id)
	{
	if ( isset($_SESSION['user'])) {
	$service= $this->db->query('delete from td_service_assign where sa_id = '.$sa_id);
	redirect(base_url().'index.php/view/ServiceAssign');
	}
	else {
	redirect(base_url().'index.php');
	}	
	}
	
}
