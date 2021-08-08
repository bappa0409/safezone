<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLoginModel extends CI_Model {

	public function admin_login_info($admin_email)
	{
		$this->db->select('*');
		$this->db->from('admin_tbl');
		$this->db->where('admin_email', $admin_email);
		$query = $this->db->get();
		$result = $query->row();
		
		return $result;
	}

	public function admin_register_save_info()
	{
		$data= array();
		$data['admin_name'] = $this->input->post('admin_name', true);
		$data['admin_email'] = $this->input->post('admin_email', true);
		$data['admin_username'] = $this->input->post('admin_username', true);
		$data['admin_contact'] = $this->input->post('admin_contact', true);
		$data['admin_password']  = password_hash($this->input->post('admin_password', true), PASSWORD_DEFAULT);
		$data['confirm_password'] = $this->input->post('confirm_password', true);
		
		$sdata= array();
		$error= '';
		$config['upload_path']          = './upload_picture/admin_image/';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('admin_image'))
		{
			$sdata = $this->upload->data();
			$data['admin_image'] = $config['upload_path'].$sdata['file_name'];
		}else
		{
			$error = $this->upload->display_errors();
		}

		$this->db->insert('admin_tbl', $data);
		
	}
}