<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteController extends CI_Controller {

	public function index()
	{
		$data = array();
		$data['title'] = 'Home';
		$data['show_active_categories_info'] = $this->AdminModel->show_active_categories_info();
		$data['show_daily_deals'] = $this->AdminModel->show_daily_deals();
		$data['show_active_product_info'] = $this->AdminModel->show_active_product_info();


		$data['website_content'] = $this->load->view('pages/index', $data , true);
		$this->load->view('layouts/website', $data);
	}


	public function contact()
	{
		$data = array();
		$data['title'] = 'Contact';
		$data['logo_details'] = $this->AdminModel->show_brand_logo_info();
		$data['company_info'] = $this->AdminModel->show_company_info();
		$data['website_content'] = $this->load->view('pages/contact', $data , true);
		$this->load->view('layouts/website', $data);
	}

	public function insert_contact()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required');
		$this->form_validation->set_rules('contact_number', 'Contact Number', 'trim|required|numeric');

		if ($this->form_validation->run()) {

			$this->CustomerModel->insert_contact_info();

			$this->session->set_flashdata('success', 'Congratulations. Your message has been sent successfully');
			redirect('contact');

		}
		else{

			$this->contact();
		}

	}

	public function shop_page()
	{
		$data = array();
		$data['title'] = 'Shop';
		$data['show_active_categories_info'] = $this->AdminModel->show_active_categories_info();
		$data['show_active_brands_info'] = $this->AdminModel->show_active_brands_info();
		$data['show_active_product_info'] = $this->AdminModel->show_active_product_info();
		

		$data['website_content'] = $this->load->view('pages/shop', $data , true);
		$this->load->view('layouts/website', $data);
	}

	public function category_wise_product($category_id)
	{
		$data = array();
		$data['title'] = 'Shop';
		

		$data['website_content'] = $this->load->view('pages/shop', $data , true);
		$this->load->view('layouts/website', $data);
	}

	public function product_details_page($id)
	{
		$data = array();
		$data['title'] = 'Product Details';
		$data['show_active_categories_info'] = $this->AdminModel->show_active_categories_info();
		$data['show_daily_deals'] = $this->AdminModel->show_daily_deals();

		$data['show_active_product_info_by_id'] = $this->AdminModel->show_active_product_info_by_id($id);

		$data['website_content'] = $this->load->view('pages/product-details', $data , true);
		$this->load->view('layouts/website', $data);
	}

	public function profile_page()
	{
		$data = array();
		$data['title'] = 'Profile';
		$data['logo_details'] = $this->AdminModel->show_brand_logo_info();
		$data['company_info'] = $this->AdminModel->show_company_info();
		$data['website_content'] = $this->load->view('pages/profile', $data , true);
		$this->load->view('layouts/website', $data);
	}






























}
