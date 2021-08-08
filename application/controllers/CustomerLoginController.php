<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerLoginController extends CI_Controller {

	public function check_customer_login()
	{
		$customer_email= $this->input->post('customer_email', TRUE);
		$customer_password= $this->input->post('customer_password', TRUE);

		$customer_details = $this->CustomerModel->customer_login_info($customer_email);
		

		if (password_verify($customer_password, $customer_details->customer_password)) {
			
			$_SESSION['customer_id']=$customer_details->customer_id;
			$_SESSION['customer_fname']=$customer_details->customer_fname;
			$_SESSION['customer_lname']=$customer_details->customer_lname;
			$_SESSION['customer_email']=$customer_details->customer_email;
			$_SESSION['customer_phone']=$customer_details->customer_phone;
			$_SESSION['address']=$customer_details->address;
			$_SESSION['city']=$customer_details->city;
			$_SESSION['postal_code']=$customer_details->postal_code;

			$customer_id = $this->session->userdata('customer_id');
			$contents= $this->cart->contents();
			$cart_item_info['rowid'] = $contents;

			$data = array();
			$data['customer_id'] = $customer_details->customer_id;
			$data['customer_email'] = $customer_details->customer_email;
			$data['customer_fname'] = $customer_details->customer_fname;
			$data['customer_phone'] = $customer_details->customer_phone;
			$this->session->set_userdata($data);

			if ($customer_id && $cart_item_info['rowid']) {
				redirect('billing');
			}
			elseif ($customer_id && $cart_item_info['rowid'] = NULL) {
				redirect(base_url());

			}
			elseif ($customer_id=='' && $cart_item_info['rowid']) {
				redirect('login');
			}
			else
			{
				redirect(base_url());
			}
			
		}
		else{

			$data['customer_password_error_message'] = 'Your Email or Password is Incorrect..!!';
			$this->session->set_userdata($data);
			redirect('login');
		}
	}
	
	public function customer_logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}