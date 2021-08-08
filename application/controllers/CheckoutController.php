<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckoutController extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('CheckoutModel');
	}

	public function check_out()
	{
		$customer_id = $this->session->userdata('customer_id');
		$contents= $this->cart->contents();
		$cart_item_info['rowid'] = $contents;

		if ($customer_id && $cart_item_info['rowid']) {
			redirect('billing');
		}
		elseif ($customer_id && $cart_item_info['rowid'] == NULL) {
			redirect('shop');

		}
		elseif ($customer_id =='' && $cart_item_info['rowid']) {

			$data['customer_id_error'] = 'Please Login first..!!';
			$this->session->set_userdata($data);
			redirect('login');
		}
		else
		{
			$data['item_empty_errro'] = 'Your Password is Incorrect..!!';
			$this->session->set_userdata($data);
			redirect('shop');
		}
	}

	public function customer_login()
	{
		if (isset($this->session->customer_id)) {
			redirect(base_url());
		}
		else{
			$data = array();
			$data['title'] = 'Login';
			$data['logo_details'] = $this->AdminModel->show_brand_logo_info();
			$data['company_info'] = $this->AdminModel->show_company_info();
			$data['website_content'] = $this->load->view('pages/login', $data , true);
			$this->load->view('layouts/website', $data);
		}
	}

	public function customer_sign_up_page()
	{
		if (isset($this->session->customer_id)) {
			redirect(base_url());
		}
		else{
			$data = array();
			$data['title'] = 'Login';
			$data['logo_details'] = $this->AdminModel->show_brand_logo_info();
			$data['company_info'] = $this->AdminModel->show_company_info();
			$data['website_content'] = $this->load->view('pages/sign-up', $data , true);
			$this->load->view('layouts/website', $data);
		}
	}

	private function customer_images_upload()
	{
		$config['upload_path']          = './upload_picture/customer_image/';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('customer_image'))
		{
			$data = $this->upload->data();
			$img_path = "upload_picture/customer_image/$data[file_name]";

			return $img_path;
		}else
		{
			$error = $this->upload->display_errors();
		}
	}

	public function insert_sign_up()
	{
		$this->form_validation->set_rules('customer_fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('customer_lname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('customer_email', 'Email', 'trim|required|is_unique[customer_sign_up_tbl.customer_email]');

		$this->form_validation->set_rules('customer_password', 'Password', 'trim|required|min_length[5]|max_length[255]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[5]|max_length[255]|matches[customer_password]');



		if ($this->form_validation->run()) {

			$customer_image = $this->customer_images_upload();
			$customer_id = $this->CheckoutModel->insert_sign_up_info($customer_image);

			$data = array();
			$data['customer_id'] = $customer_id;
			$this->session->set_userdata($data);

			$this->session->set_flashdata('success', 'Registration Successfully Done..!!');
			redirect(base_url());
		}
		else{

			$this->customer_sign_up_page();
		}
	}

	public function billing_page()
	{
		$customer_id = $this->session->userdata('customer_id');
		
		if ($customer_id) {

			$data = array();
			$data['title'] = 'Billing';
			$data['logo_details'] = $this->AdminModel->show_brand_logo_info();
			$data['company_info'] = $this->AdminModel->show_company_info();
			$data['all_area_list'] = $this->AdminModel->all_area_list();
			$customer_id = $this->session->userdata('customer_id');
			$data['customer_information'] = $this->CheckoutModel->select_customer_info_by_id($customer_id);
			$data['website_content'] = $this->load->view('pages/billing', $data , true);
			$this->load->view('layouts/website', $data);
		}
		else{
			redirect('cart');
		}
	}
	
	public function update_billing()
	{
		$this->form_validation->set_rules('customer_fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('customer_lname', 'Last Name', 'trim|required');

		$this->form_validation->set_rules('customer_phone', 'Contact Number', 'trim|required|numeric');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');

		$this->form_validation->set_rules('city', 'Area', 'required|alpha_numeric');
		$this->form_validation->set_message('alpha_numeric', 'The Area field is required');

		$this->form_validation->set_rules('postal_code', 'Postal Code', 'trim|required|numeric');


		if ($this->form_validation->run()) {

			$this->CheckoutModel->update_billing_info();
			redirect('shipping');
		}
		else{

			$this->billing_page();
		}
	}

	public function shipping_page()
	{
		$customer_id = $this->session->userdata('customer_id');
		
		if ($customer_id) {
			$data = array();
			$data['title'] = 'Shipping';
			$data['logo_details'] = $this->AdminModel->show_brand_logo_info();
			$data['company_info'] = $this->AdminModel->show_company_info();
			$data['all_area_list'] = $this->AdminModel->all_area_list();
			$customer_id = $this->session->userdata('customer_id');
			$data['shipping_information'] = $this->CheckoutModel->select_customer_info_by_id($customer_id);
			$data['website_content'] = $this->load->view('pages/shipping', $data , true);
			$this->load->view('layouts/website', $data);
		}
		else{
			redirect('cart');
		}
	}

	public function update_shipping()
	{
		$this->form_validation->set_rules('customer_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('customer_phone', 'Contact Number', 'trim|required|numeric');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');

		$this->form_validation->set_rules('city', 'Area', 'required|alpha_numeric');
		$this->form_validation->set_message('alpha_numeric', 'The Area field is required');

		$this->form_validation->set_rules('postal_code', 'Postal Code', 'trim|required|numeric');


		if ($this->form_validation->run()) {

			$this->CheckoutModel->update_shipping_info();
			redirect('payment');
		}
		else{

			$this->shipping_page();
		}

		
	}

	public function payment_page()
	{
		$customer_id = $this->session->userdata('customer_id');
		$contents= $this->cart->contents();
		$cart_item_info['rowid'] = $contents;
		
		if ($customer_id && $cart_item_info['rowid']) {

			$data = array();
			$data['title'] = 'Payment';
			$data['logo_details'] = $this->AdminModel->show_brand_logo_info();
			$data['company_info'] = $this->AdminModel->show_company_info();
			$data['website_content'] = $this->load->view('pages/payment', $data , true);
			$this->load->view('layouts/website', $data);
		}
		else{
			redirect('shop');
		}
	}

	public function place_order()
	{
		$customer_id = $this->session->userdata('customer_id');
		$contents = $this->cart->contents();
		$cart_product_info['rowid'] = $contents;

		if ($customer_id && $cart_product_info['rowid']) {

			$payment_type= $this->input->post('payment_type', true);

			$data = array();
			$data['title'] = 'Payment';

			if ($payment_type == 'cash_on_delivery') {
			# code...
			}
			if ($payment_type == 'direct_bank_transfer') {
			# code...
			}
			if ($payment_type == 'ssl_commerz') {

				$data = array();
				$data['logo_details'] = $this->AdminModel->show_brand_logo_info();
				$data['company_info'] = $this->AdminModel->show_company_info();
				$data['website_content'] = $this->load->view('pages/ssl_ecommerz', $data , true);
				$this->load->view('layouts/website', $data);
			}
			if ($payment_type == 'check_payment') {
			# code...
			}
			if ($payment_type == 'paypal') {
			# code...
			}
		}
		else{
			redirect(base_url());
		}
	}

	public function success_payment()
	{
		$val_id = urlencode($_POST['val_id']);

		if ($val_id) {
			$data = array();
			$data['logo_details'] = $this->AdminModel->show_brand_logo_info();
			$data['company_info'] = $this->AdminModel->show_company_info();
			$data['website_content'] = $this->load->view('pages/success-payment', $data , true);
			$this->load->view('layouts/website', $data);
		}
		else{
			redirect(base_url());
		}
	}
	
}