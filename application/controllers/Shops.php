<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shops extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->load->model('shops_model', 'shops');
		$this->load->dbutil();
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		
	}
	
	public function index(){
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		$data['title'] = 'Shops Admin';
		$data['shops'] = $this->shops->getShops();
		$this->load->view('welcome_message', $data);
	}
	
	public function add(){
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		
		$data['title'] = 'Add Shop';
		
		if($this->input->post('submit') == 'shops'){
			$this->form_validation->set_rules('shopname', 'Shopname', 'required');
			$this->form_validation->set_rules('hostname', 'Hostname', 'required');
			$this->form_validation->set_rules('dbname', 'Database', 'required');
		
			
			 /* $save['shopname'] = $this->input->post('shopname');
				$save['domainname'] = $this->input->post('domainname');
				$save['hostname'] = $this->input->post('hostname');
				$save['dbname'] = $this->input->post('dbname');
				$save['url'] = $this->input->post('url');
				$save['ecomm'] = ($this->input->post('ecomm') == 'on') ? 1 : 0;
				$save['vc'] = ($this->input->post('vc') == 'on') ? 1 : 0;
				$save['enabled'] = ($this->input->post('enabled') == 'on') ? 1 : 0; */
				
				$shopname 	= $this->input->post('shopname');
				$hostname 	= $this->input->post('hostname');
				$dbname 	= $this->input->post('dbname');
				$url		= $this->input->post('url');
				$ecomm 		= ($this->input->post('ecomm') == 'on') ? 1 : 0;
				$vc			= ($this->input->post('vc') == 'on') ? 1 : 0;
				$enabled 	= ($this->input->post('enabled') == 'on') ? 1 : 0;
				
				$dbname = preg_replace('/\s+/', '',$dbname);
				
				if($this->input->post('domainname') != ''){
					$domainname 	= $this->input->post('domainname');
				}
				
				else{
					$domainid 	= $this->input->post('domainid');
					$domainname 	= $this->shops->get_domain_id($domainid);
				}
				
				$save = array(
					"shopname" 		=> $shopname,
					"domainname"	=> $domainname,
					"hostname" 		=> $hostname,
					"dbname" 		=> $dbname,
					"url" 			=> $url,
					"ecomm" 		=> $ecomm,
					"vc" 			=> $vc,
					"enabled" 		=> $enabled,
				);
			
			if($this->form_validation->run() == FALSE){//checks if the input is empty
				$message= alertMessage(validation_errors(),'danger');
			}
			else if($this->shops->checkShop($shopname) >= 1){//checks if the shopname is existing
				$message = alertMessage('Shopname '.$shopname.' is already existing','danger');
			}
			else if($this->shops->dbChecker($dbname) >= 1){//checks if the database is existing in `shops` table
				$message = alertMessage('Database '.$dbname.' is already existing','danger');
			}
			else if($this->dbutil->database_exists($dbname)){//checks if the shopname is existing
				$message = alertMessage('Database '.$dbname.' is already existing','danger');
			}
			else{
				$result = $this->shops->addShop($save);
				if($result){
				#added by obey
					//to create a DB
					$this->shops->add_tables($save);
					$update = array(
					"status" => 1,
					"shop" => $shopname,
					);
					$this->shops->update_domain($domainid,$update);
				#end added by obey
				
					// $connected = $this->shops->getNewConnection($save['domainname']);
					// if($this->load->database($connected->dbname,TRUE)==true){
						// die('heiro');
					// }
					// die('mis');
					$message = alertMessage('Shop Created!','Success');
					$this->session->set_flashdata('message', $message);
					//$data['domains'] = $this->shops->get_inactive_domains();
					redirect(base_url("shops"));
				}
				else{
					//$data['msg'] = 'Database error occured!';
					$message = alertMessage('Database error occured!','danger');
				}
			}
			$this->session->set_flashdata('message', $message);
		}
		$data['domains'] = $this->shops->get_inactive_domains();
		$this->load->view('addshops', $data);
	}
	
	public function edit($id){
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		if($id){
			
			$data['title'] = 'Edit Shop Details';
			$data['shop'] = $this->shops->getShop($id);
			
			if($this->input->post('submit') == 'shops'){
				$this->form_validation->set_rules('shopname', 'Shopname', 'required');
				$this->form_validation->set_rules('domainname', 'Domainname', 'required');
				$this->form_validation->set_rules('hostname', 'Hostname', 'required');
				$this->form_validation->set_rules('dbname', 'Database', 'required');
				$this->form_validation->set_rules('url', 'URL', 'required');
			
				if($this->form_validation->run() == FALSE){
					$data['msg'] = validation_errors();
				}
				else{
					$save['shopname'] = $this->input->post('shopname');
					$save['domainname'] = $this->input->post('domainname');
					$save['hostname'] = $this->input->post('hostname');
					$save['dbname'] = $this->input->post('dbname');
					$save['url'] = $this->input->post('url');
					$save['ecomm'] = ($this->input->post('ecomm') == 'on') ? 1 : 0;
					$save['vc'] = ($this->input->post('vc') == 'on') ? 1 : 0;
					$save['enabled'] = ($this->input->post('enabled') == 'on') ? 1 : 0;
					
					$result = $this->shops->updateShop($save, $id);
					if($result){
						redirect(base_url());
					}
					else{
						$data['msg'] = 'Database error occured!';
					}
				}
			}
			$this->load->view('editshops', $data);	
		}
	}
	
	public function delete($id){
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		
		if($id){
			$result = $this->shops->deleteShop($id);
			if($result){
				redirect(base_url());
			}
			else{
				echo 'Database error occured.';
			}
			
		}
	}
	
	public function change($id){
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		$info = $this->shops->get_shop_id($id);
		if($info->enabled==1){
			$data = array(
				'enabled' => 0
			);
		}
		else{
			$data = array(
				'enabled' => 1
			);
		}
		$this->shops->updateShop($data, $id);
		redirect("shops");
	}
	
	function flowchart(){
		$this->load->view('cms4');
	}
}
