<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if (!isset($this->session->admin_id)) {
			
			$data['session_message'] = 'Please Login First..!!';
			$this->session->set_userdata($data);

			redirect('admin');
		}
	}

	public function dashboard()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('admin/dashboard', '' , true);
		$this->load->view('layouts/admin', $data);
	}

	public function admin_registration()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('admin/pages/admin_registration', '', true);
		$this->load->view('layouts/admin', $data);
	}

	public function admin_register_save()
	{
		$this->form_validation->set_rules('admin_name', 'Name', 'trim|required|min_length[5]|max_length[255]');
		$this->form_validation->set_rules('admin_email', 'Email Address', 'trim|required');
		$this->form_validation->set_rules('admin_username', 'User Name', 'trim|required|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('admin_contact', 'Contact Number', 'trim|required|numeric');
		$this->form_validation->set_rules('admin_password', 'Password', 'trim|required|min_length[5]|max_length[255]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[5]|max_length[255]|matches[admin_password]');


		if ($this->form_validation->run()) {

			$result = $this->AdminLoginModel->admin_register_save_info();

			$this->session->set_flashdata('success', 'Registration Successfully Done..!!');
			redirect('admin-register');

		}
		else{

			$this->admin_registration();
		}
	}

	public function brand_logo()
	{
		$data = array();
		$data['logo_details'] = $this->AdminModel->show_brand_logo_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/logo', $data , true);
		$this->load->view('layouts/admin', $data);
	}

	public function brand_logo_update()
	{
		$result = $this->AdminModel->logo_update();

		$this->session->set_flashdata('success', 'Update Successfully Done..!!');
		redirect('brand-logo');
	}

	public function slider()
	{
		$data = array();
		$data['slider_details'] = $this->AdminModel->show_slider_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/slider', $data , true);
		$this->load->view('layouts/admin', $data);
	}

	public function add_slider_page_show()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('admin/pages/add-slider', '' , true);
		$this->load->view('layouts/admin', $data);
	}

	public function insert_slider()
	{
		$hero_details = $this->AdminModel->insert_slider_info();

		$this->session->set_flashdata('success', 'Slider Insert Successfully Done..!!');
		redirect('slider');
	}

	public function change_slider_status($id, $status)
	{
		$this->AdminModel->change_slider_status_by_id($id, $status);
		redirect('slider');
	}

	public function edit_slider_page_show($id)
	{
		$data = array();
		
		$data['edit_slider_by_id'] = $this->AdminModel->edit_slider_by_id($id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit-slider', $data , true);
		$this->load->view('layouts/admin', $data);		
	}

	public function update_slider()
	{
		$this->AdminModel->update_slider_by_id();

		$this->session->set_flashdata('success', 'Slider Update Successfully Done..!!');
		redirect('slider');
	}

	public function delete_slider($id)
	{
		$this->AdminModel->delete_slider_info($id);

		$this->session->set_flashdata('success', 'Slider Delete Successfully Done..!!');
		redirect('slider');
	}


	public function promotion_images()
	{
		$data = array();
		$data['show_promotion_images'] = $this->AdminModel->show_promotion_images();
		$data['admin_main_content'] = $this->load->view('admin/pages/promotion-images', $data , true);
		$this->load->view('layouts/admin', $data);
	}

	public function edit_promotion_images_page_show($id)
	{
		$data = array();
		$data['edit_promotion_images_by_id'] = $this->AdminModel->edit_promotion_images_by_id($id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit-promotion-image', $data , true);
		$this->load->view('layouts/admin', $data);		
	}

	private function promotion_images_upload()
	{
		$config['upload_path']          = './upload_picture/promotion_images/';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image'))
		{
			$data = $this->upload->data();
			$img_path = "upload_picture/promotion_images/$data[file_name]";

			return $img_path;
		}else
		{
			$error = $this->upload->display_errors();
		}
	}

	public function promotion_images_update()
	{

		$image = $this->promotion_images_upload();
		$this->AdminModel->update_promotion_images_info($image);

		unlink($this->input->post('old_image', true));
		$this->session->set_flashdata('success', 'Item Update Successfully Done..!!');
		redirect('promotion-images');

	}


	public function company_info_page_show()
	{
		$data = array();
		$data['company_info'] = $this->AdminModel->show_company_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/company-info', $data , true);
		$this->load->view('layouts/admin', $data);
	}

	public function update_company_info()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required|numeric');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');

		if ($this->form_validation->run()) {

			$this->AdminModel->update_company_info_by_id();

			$this->session->set_flashdata('success', 'Item Update Successfully Done..!!');
			redirect('company-info');
		}
		else{

			$this->company_info_page_show();
		}
	}


	public function add_category_page_show()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('admin/pages/add-category', '' , true);
		$this->load->view('layouts/admin', $data);
	}

	private function category_image_upload()
	{
		$config['upload_path']          = './upload_picture/category_images/';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('category_image'))
		{
			$data = $this->upload->data();
			$img_path = "upload_picture/category_images/$data[file_name]";

			return $img_path;
		}else
		{
			$error = $this->upload->display_errors();
		}
	}

	public function insert_category()
	{
		$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');
		
		if ($this->form_validation->run()) {

			$category_image = $this->category_image_upload();
			$this->AdminModel->insert_category_info($category_image);

			$this->session->set_flashdata('success', 'Category Insert Successfully Done..!!');
			redirect('manage-categories');
		}
		else{

			$this->add_category_page_show();
		}
	}

	public function change_category_status($category_id, $status)
	{
		$this->AdminModel->change_category_status_by_id($category_id, $status);
		redirect('manage-categories');
	}

	public function manage_categories_page_show()
	{
		$data = array();
		$data['show_categories_info'] = $this->AdminModel->show_categories_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/manage-categories', $data , true);
		$this->load->view('layouts/admin', $data);
	}

	public function edit_category_page_show($category_id)
	{
		$data = array();

		$data['edit_category_by_id'] = $this->AdminModel->edit_category_by_id($category_id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit-category', $data , true);
		$this->load->view('layouts/admin', $data);		
	}

	public function update_category()
	{
		if ($_FILES['category_image']['name'] == '') {

			$category_image = $this->input->post('old_category_image', true);

			$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');
			
			if ($this->form_validation->run()) {

				$this->AdminModel->update_category_by_id($category_image);

				$this->session->set_flashdata('success', 'Category Update Successfully Done..!!');
				redirect('manage-categories');
			}
			else{
				$category_id = $this->input->post('category_id', TRUE);
				$this->add_category_page_show($category_id);
			}
		}
		else{

			$category_image = $this->category_image_upload();
			$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');

			if ($this->form_validation->run()) {

				$this->AdminModel->update_category_by_id($category_image);

				unlink($this->input->post('old_category_image', true));
				$this->session->set_flashdata('success', 'Category Update Successfully Done..!!');
				redirect('manage-categories');
			}
			else{

				$category_id = $this->input->post('category_id', TRUE);
				$this->add_category_page_show($category_id);
			}
		}
	}

	public function delete_category($category_id)
	{
		$this->AdminModel->delete_category_info($category_id);

		$this->session->set_flashdata('success', 'Category Delete Successfully Done..!!');
		redirect('manage-categories');
	}

	public function add_brand_page_show()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('admin/pages/add-brand', '' , true);
		$this->load->view('layouts/admin', $data);
	}

	public function insert_brand()
	{
		$this->AdminModel->insert_brand_info();

		$this->session->set_flashdata('success', 'Brand Insert Successfully Done..!!');
		redirect('manage-brands');
	}

	public function change_brand_status($brand_id, $status)
	{
		$this->AdminModel->change_brand_status_by_id($brand_id, $status);
		redirect('manage-brands');
	}

	public function manage_brands_page_show()
	{
		$data = array();
		$data['show_brands_info'] = $this->AdminModel->show_brands_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/manage-brands', $data , true);
		$this->load->view('layouts/admin', $data);
	}

	public function edit_brand_page_show($brand_id)
	{
		$data = array();

		$data['edit_brand_by_id'] = $this->AdminModel->edit_brand_by_id($brand_id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit-brand', $data , true);
		$this->load->view('layouts/admin', $data);		
	}

	public function update_brand()
	{
		$this->AdminModel->update_brand_by_id();

		$this->session->set_flashdata('success', 'Brand Update Successfully Done..!!');
		redirect('manage-brands');
	}

	public function delete_brand($brand_id)
	{
		$this->AdminModel->delete_brand_info($brand_id);

		$this->session->set_flashdata('success', 'Brand Delete Successfully Done..!!');
		redirect('manage-brands');
	}

	public function add_product_page_show()
	{
		$data = array();
		$data['show_active_brands_info'] = $this->AdminModel->show_active_brands_info();
		$data['show_active_categories_info'] = $this->AdminModel->show_active_categories_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/add-product', $data , true);
		$this->load->view('layouts/admin', $data);
	}

	private function product_images_upload()
	{
		$config['upload_path']          = './upload_picture/product_image/';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('thumbnail_image'))
		{
			$data = $this->upload->data();
			$img_path = "upload_picture/product_image/$data[file_name]";

			return $img_path;
		}else
		{
			$error = $this->upload->display_errors();
		}
	}

	public function insert_product()
	{
		$thumbnail_image = $this->product_images_upload();

		$this->form_validation->set_rules('product_name', 'Item Name', 'trim|required');
		$this->form_validation->set_rules('product_price', 'Item Price', 'trim|required|numeric');

		$this->form_validation->set_rules('product_stock', 'Product Stock', 'required|alpha_numeric');
		$this->form_validation->set_message('alpha_numeric', 'The Product Stock field is required');

		$this->form_validation->set_rules('stock_quantity', 'Stock Quantity', 'trim|required|numeric');
		$this->form_validation->set_rules('product_sku', 'Product SKU', 'trim|required');

		if (empty($_FILES['thumbnail_image']['name']))
		{
			$this->form_validation->set_rules('thumbnail_image', 'Image', 'required');
		}


		if ($this->form_validation->run()) {

			$thumbnail_image = $this->product_images_upload();
			$this->AdminModel->insert_product_info($thumbnail_image);


			$this->session->set_flashdata('success', 'Product Insert Successfully Done..!!');
			redirect('manage-products');
		}
		else{

			$this->add_product_page_show();
		}
	}

	public function manage_products_page_show()
	{
		$data = array();
		$data['show_product_info'] = $this->AdminModel->show_product_info();
		$data['show_daily_deals'] = $this->AdminModel->show_daily_deals();
		$data['admin_main_content'] = $this->load->view('admin/pages/manage-products', $data , true);
		$this->load->view('layouts/admin', $data);
	}


	public function edit_product_page_show($product_id)
	{
		$data = array();
		$data['show_active_brands_info'] = $this->AdminModel->show_active_brands_info();
		$data['show_active_categories_info'] = $this->AdminModel->show_active_categories_info();
		$data['edit_product_by_id'] = $this->AdminModel->edit_product_by_id($product_id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit-product', $data , true);
		$this->load->view('layouts/admin', $data);
	}

	public function change_product_status($product_id, $status)
	{
		$this->AdminModel->change_product_status_by_id($product_id, $status);
		redirect('manage-products');
	}

	public function update_product()
	{
		if ($_FILES['thumbnail_image']['name'] == '') {

			$thumbnail_image = $this->input->post('old_thumbnail_image', true);

			$this->form_validation->set_rules('product_name', 'Product Name', 'trim|required');
			$this->form_validation->set_rules('product_price', 'Product Price', 'trim|required|numeric');

			$this->form_validation->set_rules('product_stock', 'Product Stock', 'required|alpha_numeric');
			$this->form_validation->set_message('alpha_numeric', 'The Product Stock field is required');

			$this->form_validation->set_rules('stock_quantity', 'Stock Quantity', 'trim|required|numeric');
			$this->form_validation->set_rules('product_sku', 'Product SKU', 'trim|required');


			if ($this->form_validation->run()) {

				$this->AdminModel->update_product_by_id($thumbnail_image);

				$this->session->set_flashdata('success', 'Product Update Successfully Done..!!');
				redirect('manage-products');
			}
			else{
				$product_id = $this->input->post('product_id', TRUE);
				$this->edit_product_page_show($product_id);
			}
		}
		else{

			$thumbnail_image = $this->product_images_upload();

			$this->form_validation->set_rules('product_name', 'Product Name', 'trim|required');
			$this->form_validation->set_rules('product_price', 'Product Price', 'trim|required|numeric');

			$this->form_validation->set_rules('product_stock', 'Product Stock', 'required|alpha_numeric');
			$this->form_validation->set_message('alpha_numeric', 'The Product Stock field is required');

			$this->form_validation->set_rules('stock_quantity', 'Stock Quantity', 'trim|required|numeric');
			$this->form_validation->set_rules('product_sku', 'Product SKU', 'trim|required');


			if ($this->form_validation->run()) {

				$this->AdminModel->update_product_by_id($thumbnail_image);

				unlink($this->input->post('old_thumbnail_image', true));
				$this->session->set_flashdata('success', 'Product Update Successfully Done..!!');
				redirect('manage-products');
			}
			else{

				$product_id = $this->input->post('product_id', TRUE);
				$this->edit_product_page_show($product_id);
			}
		}
	}

	public function delete_product($product_id)
	{
		$this->AdminModel->delete_product_info($product_id);

		$this->session->set_flashdata('success', 'Product Delete Successfully Done..!!');
		redirect('manage-products');
	}

	public function manage_shipping_cost_page_show()
	{
		$data = array();
		$data['show_shipping_cost_info'] = $this->AdminModel->show_shipping_cost_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/manage-shipping-cost', $data , true);
		$this->load->view('layouts/admin', $data);
	}

	public function add_shipping_method_page()
	{
		$data = array();
		$data['admin_main_content'] = $this->load->view('admin/pages/add-shipping', '', true);
		$this->load->view('layouts/admin', $data);
	}

	public function insert_shipping_cost()
	{
		$this->form_validation->set_rules('shipping_zone', 'Shipping Zone', 'required|alpha_numeric');
		$this->form_validation->set_message('alpha_numeric', 'The Shipping Zone field is required');

		$this->form_validation->set_rules('shipping_cost', 'Shipping Cost', 'trim|numeric|required');


		if ($this->form_validation->run()) {

			$this->AdminModel->insert_shipping_cost_info();

			$this->session->set_flashdata('success', 'Shipping Method Insert Successfully Done..!!');
			redirect('manage-shipping-cost');
		}
		else{

			$this->add_shipping_method_page();
		}
	}

	public function edit_shipping_cost_page($id)
	{
		$data = array();
		$data['edit_shipping_cost_by_id'] = $this->AdminModel->edit_shipping_cost_by_id($id);
		$data['admin_main_content'] = $this->load->view('admin/pages/edit-shipping-cost', $data , true);
		$this->load->view('layouts/admin', $data);
	}

	public function update_shipping_cost()
	{
		$this->form_validation->set_rules('shipping_zone', 'Shipping Zone', 'required|alpha_numeric');
		$this->form_validation->set_message('alpha_numeric', 'The Shipping Zone field is required');

		$this->form_validation->set_rules('shipping_cost', 'Shipping Cost', 'trim|numeric|required');


		if ($this->form_validation->run()) {

			$this->AdminModel->update_shipping_cost_info();

			$this->session->set_flashdata('success', 'Shipping Method Update Successfully Done..!!');
			redirect('manage-shipping-cost');
		}
		else{
			$id = $this->input->post('id', TRUE);
			$this->edit_shipping_cost_page($id);
		}
	}

	public function customers_list()
	{
		$data = array();
		$data['all_customer_information'] = $this->CustomerModel->all_customer_information();
		$data['admin_main_content'] = $this->load->view('admin/pages/customers-list', $data , true);
		$this->load->view('layouts/admin', $data);
	}

	public function orders_list()
	{
		$data = array();
		//$data['show_item_info'] = $this->AdminModel->show_item_info();
		$data['admin_main_content'] = $this->load->view('admin/pages/orders-list', $data , true);
		$this->load->view('layouts/admin', $data);
	}








}