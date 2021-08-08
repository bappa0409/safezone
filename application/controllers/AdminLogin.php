<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller {

	public function login_page()
	{
		if (isset($this->session->admin_id)) {
			redirect('dashboard');
		}
		else{
			$this->load->view('admin/login');
		}
	}

	public function check_admin_login()
	{
		$admin_email = $this->input->post('admin_email', TRUE);
		$admin_password = $this->input->post('admin_password', TRUE);

		$admin_details = $this->AdminLoginModel->admin_login_info($admin_email);

		if (password_verify($admin_password, $admin_details->admin_password)) {
			
			$data = array();
			$data['admin_id'] = $admin_details->admin_id;
			$data['admin_name'] = $admin_details->admin_name;
			$data['admin_email'] = $admin_details->admin_email;
			$data['admin_image'] = $admin_details->admin_image;
			$data['admin_username'] = $admin_details->admin_username;
			
			$this->session->set_userdata($data);

			redirect('dashboard');
		}
		else{
			
			$data['password_error_message'] = 'Your Email Or Password is Incorrect..!!';
			$this->session->set_userdata($data);
			redirect('admin');
		}


	}
	public function admin_logout()
	{
		$this->session->sess_destroy();

		$this->session->set_flashdata('success', 'Logout Successfully Done..!!');
		redirect('admin');
	}

	public function admin_forgot_password()
	{
		$this->load->view('admin/admin-forgot-password');
	}
	
	public function adminresetlink()
	{
		$email= $this->input->post('email', TRUE);
		$pass_reset = $this->db->query("SELECT *  from admin_tbl where admin_email = '".$email."' ")->row_array();;


		if ($pass_reset) {

			$token =  rand(1000, 9999);
			$this->db->query("update admin_tbl set token='".$token."' where admin_email='".$email."'");

			$this->email->set_newline("\r\n");
			$this->email->from('bappasutradhar78@gmail.com');
			$this->email->to($email);
			$this->email->subject('Reset Password');


			//$link = base_url('reset?token=');

			$message = "Please Click Here To Reset Your Password '".base_url('reset?token=').$token."'";
			$this->email->message($message);

			if($this->email->send()){

				$data['send_password'] = 'Password Send Successfully..!! <br> Please check your email to reset password';
				$this->session->set_userdata($data);
				redirect('admin-forgot-password');
			}

			else
			{
				$data['reset_link_not_send'] = 'Password Reset Link Not Send..!!';
				$this->session->set_userdata($data);
				redirect('admin-forgot-password');
			}
		}
		else{

			$data['email_not_exit'] = 'Email Not Registered..!!';
			$this->session->set_userdata($data);
			$this->admin_forgot_password();
		}
	}

	public function reset()
	{
		$data['token'] = $this->input->get('token');
		$_SESSION['token'] = $data['token'];
		$this->load->view('admin/recover-password');
	}

	public function update_password()
	{

		$_SESSION['token'];
		$data = $this->input->post('token', TRUE);

		if($data['admin_password'] == $data['confirm_password']){

			$this->AdminModel->update_admin_info($data);

			$data['change_pass_success'] = "Your Password Has Been Changed Successfully. <br> Please Login..!!";
			$this->session->set_userdata($data);
			redirect('admin');

		}
	}

}
