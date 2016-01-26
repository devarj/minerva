<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Domans extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->load->model('shops_model', 'shops');

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		
		$this->load->library('excel');//upload excel files
	}
	
	public function index(){
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}

		$data["domains"] = $this->shops->get_domain();
		$data['title'] = 'Domain Management';
				//echo "<pre>";print_r($data);
		$this->load->view('domans', $data);
	}
	
	#added by obey 9/1/2015
	public function upload_domains(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'xlsx|csv|xls';

		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
			$message = alertMessage($this->upload->display_errors(),'danger');
		}
		else{
			$data = array('upload_data' => $this->upload->data());

			$file_name = $data['upload_data']['file_name'];
			$full_path = $data['upload_data']['full_path'];
			
			$objPHPExcel = PHPExcel_IOFactory::load($full_path);
			
			$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
			
			foreach ($cell_collection as $cell) {
				$column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
				$row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
				$data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
				$userdata[$row][$column] = $data_value;
			}
			
			$ctrow = $row; //to count the number of rows
			$row = 1; // to set the row to the 1st row
			for($ctr=1; $ctr<=$ctrow; $ctr++){
				$domains = $userdata[$row]['A'];//the cell in column A
			
				if(empty($domains)){
					$message = alertMessage('a cell from "domain" column is empty','danger');
				}
				else if($this->shops->checkDomain($domains) >= 1){
					
					$message = alertMessage('There is an existing domain.<br/>'.$domains." is already existing",'danger');
				}
				else{
			
					$save=array(
						"domains" => $domains,
						"status" => "0",
						"shop" => "none",
					);
				
					$this->shops->save_domain($save);
					$row++;
				}
			}
			
		}
	
		
		$this->session->set_flashdata('message', $message);
		// $this->session->set_flashdata('failed', $failed);
		redirect("Domans/index");
	}
}
