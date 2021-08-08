<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckoutModel extends CI_Model {


	public function insert_sign_up_info($customer_image)
	{
		$data= array();
		$data['customer_email']= $this->input->post('customer_email', true);
		$data['customer_password']  = password_hash($this->input->post('customer_password', true), PASSWORD_DEFAULT);
		$data['confirm_password']  = $this->input->post('confirm_password', true);

		$this->db->insert('customer_sign_up_tbl', $data);
		$customer_id = $this->db->insert_id();

		return $customer_id;
	}
	
	public function all_customer_info()
	{
		$this->db->select('*');
		$this->db->from('customer_sign_up_tbl');
		$query = $this->db->get();
		$all_customer_information = $query->result();

		return $all_customer_information;
	}
	
	public function select_customer_info_by_id($customer_id)
	{
		$this->db->select('*');
		$this->db->from('customer_sign_up_tbl');
		$this->db->where('customer_id', $customer_id);
		$query = $this->db->get();
		$customer_information = $query->row();

		return $customer_information;
	}
	
	public function update_billing_info()
	{
		$data= array();
		$customer_id = $this->input->post('customer_id', true);

		$data['customer_fname'] = $this->input->post('customer_fname', true);
		$data['customer_lname'] = $this->input->post('customer_lname', true);
		$data['customer_phone']= $this->input->post('customer_phone', true);
		$data['address']= $this->input->post('address', true);
		$data['city']= $this->input->post('city', true);
		$data['postal_code']= $this->input->post('postal_code', true);


		$this->db->where('customer_id', $customer_id);
		$this->db->update('customer_sign_up_tbl', $data);
		

		// $shipping_status= $this->input->post('shipping_status', true);
		
		// if ($shipping_status == 'on') {
		// 	$customer_id= $this->input->post('customer_id', true);
		// 	$this->db->where('customer_id', $customer_id);
		// 	$this->db->update('customer_sign_up_tbl', $data);

		// 	$data['customer_id']= $customer_id;
		// 	$this->db->insert('shipping_tbl', $data);
		// 	$shipping_id= $this->db->insert_id();

		// 	$sdata['shipping_id'] = $shipping_id;
		// 	$this->session->set_userdata($sdata);
		// }
		// else{
		// 	$customer_id= $this->input->post('customer_id', true);
		// 	$this->db->where('customer_id', $customer_id);
		// 	$this->db->update('customer_sign_up_tbl', $data);
		// }
	}

	public function update_shipping_info()
	{
		$data= array();
		$customer_id = $this->input->post('customer_id', true);

		$data['customer_name'] = $this->input->post('customer_name', true);
		$data['customer_phone'] = $this->input->post('customer_phone', true);
		$data['address'] = $this->input->post('address', true);
		$data['postal_code'] = $this->input->post('postal_code', true);
		$data['city'] = $this->input->post('city', true);
		$data['message'] = $this->input->post('message', true);
		
		$data['customer_id']= $customer_id;
		$this->db->insert('shipping_tbl', $data);
		$shipping_id = $this->db->insert_id();

		$sdata['shipping_id'] = $shipping_id;
		$this->session->set_userdata($sdata);
	}
	
	

}