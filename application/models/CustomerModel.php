
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerModel extends CI_Model {

	public function customer_login_info($customer_email)
	{
		$this->db->select('*');
		$this->db->from('customer_sign_up_tbl');
		$this->db->where('customer_email', $customer_email);
		$query = $this->db->get();
		$result = $query->row();

		return $result;
	}

	public function all_customer_information()
	{
		$this->db->select('*');
		$this->db->from('customer_sign_up_tbl');
		$query = $this->db->get();
		$all_customer_information = $query->result();

		return $all_customer_information;
	}
	
	public function insert_contact_info()
	{
		$data= array();
		$data['name'] = $this->input->post('name', true);
		$data['email'] = $this->input->post('email', true);
		$data['contact_number'] = $this->input->post('contact_number', true);
		$data['message'] = $this->input->post('message', true);

		$this->db->insert('contact_tbl', $data);
	}
	
	public function insert_reservation_info()
	{
		$data= array();
		$data['date'] = $this->input->post('date', true);
		$data['time'] = $this->input->post('time', true);
		$data['name'] = $this->input->post('name', true);
		$data['email'] = $this->input->post('email', true);
		$data['contact_number'] = $this->input->post('contact_number', true);
		$data['message'] = $this->input->post('message', true);

		$this->db->insert('reservation_tbl', $data);
	}

}