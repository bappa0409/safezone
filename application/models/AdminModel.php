<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {
	
	public function all_area_list()
	{
		$this->db->select('*');
		$this->db->from('area_list');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function update_admin_info($data)
	{
		$data= array();
		$data = $this->input->post();
		$_SESSION['token'];
		
		$data['admin_password'] = password_hash($this->input->post('admin_password', true), PASSWORD_DEFAULT);
		$data['confirm_password'] = password_hash($this->input->post('confirm_password', true), PASSWORD_DEFAULT);

		$this->db->where('admin_password', $_SESSION['token']);
		$this->db->update('admin_tbl', $data);
	}

	public function show_brand_logo_info()
	{
		$this->db->select('*');
		$this->db->from('brand_logo_tbl');
		$query = $this->db->get();
		$result = $query->row();

		return $result;
	}

	public function logo_update()
	{
		$data= array();
		$id = $this->input->post('id', true);

		$sdata= array();
		$error= '';
		$config['upload_path']          = './upload_picture/brand_logo/';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('header_brand_logo'))
		{
			$sdata = $this->upload->data();
			$data['header_brand_logo'] = $config['upload_path'].$sdata['file_name'];
		}else
		{
			$error = $this->upload->display_errors();
		}

		$sdata= array();
		$error= '';
		$config['upload_path']          = './upload_picture/brand_logo/';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('sticky_brand_logo'))
		{
			$sdata = $this->upload->data();
			$data['sticky_brand_logo'] = $config['upload_path'].$sdata['file_name'];
		}else
		{
			$error = $this->upload->display_errors();
		}

		$sdata= array();
		$error= '';
		$config['upload_path']          = './upload_picture/brand_logo/';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('footer_brand_logo'))
		{
			$sdata = $this->upload->data();
			$data['footer_brand_logo'] = $config['upload_path'].$sdata['file_name'];
		}else
		{
			$error = $this->upload->display_errors();
		}

		$this->db->where('id', $id);
		$this->db->update('brand_logo_tbl', $data);

	}

	public function insert_slider_info()
	{
		$data= array();
		$data['title'] = $this->input->post('title', true);
		$data['subtitle'] = $this->input->post('subtitle', true);

		$sdata= array();
		$error= '';
		$config['upload_path']          = './upload_picture/slider_image/';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('slider_image'))
		{
			$sdata = $this->upload->data();
			$data['slider_image'] = $config['upload_path'].$sdata['file_name'];
		}else
		{
			$error = $this->upload->display_errors();
		}

		$this->db->insert('slider_tbl', $data);
	}

	public function show_slider_info()
	{
		$this->db->select('*');
		$this->db->from('slider_tbl');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function edit_slider_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('slider_tbl');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$result = $query->row();

		return $result;
	}

	public function update_slider_by_id()
	{
		$data= array();
		$id = $this->input->post('id', true);
		$data['title'] = $this->input->post('title', true);
		$data['subtitle'] = $this->input->post('subtitle', true);

		$sdata= array();
		$error= '';
		$config['upload_path']          = './upload_picture/slider_image/';
		$config['allowed_types']        = 'jpeg|gif|jpg|png';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('slider_image'))
		{
			$sdata = $this->upload->data();
			$data['slider_image'] = $config['upload_path'].$sdata['file_name'];
		}else
		{
			$error = $this->upload->display_errors();
		}


		$this->db->where('id', $id);
		$this->db->update('slider_tbl', $data);
	}

	public function change_slider_status_by_id($id, $status)
	{
		$data['status'] = $status;
		$this->db->where('id', $id);
		$this->db->update('slider_tbl', $data);
	}

	public function delete_slider_info($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('slider_tbl');
	}

	public function show_promotion_images()
	{
		$this->db->select('*');
		$this->db->from('promotion_images_tbl');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function edit_promotion_images_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('promotion_images_tbl');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$result = $query->row();

		return $result;
	}

	public function update_promotion_images_info($image)
	{
		$data= array();
		$id = $this->input->post('id', true);

		$data['image'] = $image;

		$this->db->where('id', $id);
		$this->db->update('promotion_images_tbl', $data);
	}

	public function insert_category_info($category_image)
	{
		$data= array();
		$data['category_name'] = $this->input->post('category_name', true);

		$data['category_image'] = $category_image;

		$this->db->insert('categories_tbl', $data);
	}

	public function show_categories_info()
	{
		$this->db->select('*');
		$this->db->from('categories_tbl');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function show_active_categories_info()
	{
		$this->db->select('*');
		$this->db->from('categories_tbl');
		$this->db->where('status', 1);
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function edit_category_by_id($category_id)
	{
		$this->db->select('*');
		$this->db->from('categories_tbl');
		$this->db->where('category_id', $category_id);
		$query = $this->db->get();
		$result = $query->row();

		return $result;
	}

	public function update_category_by_id($category_image)
	{
		$data= array();
		$category_id = $this->input->post('category_id', true);
		$data['category_name'] = $this->input->post('category_name', true);

		$data['category_image'] = $category_image;

		$this->db->where('category_id', $category_id);
		$this->db->update('categories_tbl', $data);
	}

	public function change_category_status_by_id($category_id, $status)
	{
		$data['status'] = $status;
		$this->db->where('category_id', $category_id);
		$this->db->update('categories_tbl', $data);
	}

	public function delete_category_info($category_id)
	{
		$this->db->where('category_id', $category_id);
		$this->db->delete('categories_tbl');
	}

	public function insert_brand_info()
	{
		$data= array();
		$data['brand_name'] = $this->input->post('brand_name', true);

		$this->db->insert('brands_tbl', $data);
	}

	public function show_brands_info()
	{
		$this->db->select('*');
		$this->db->from('brands_tbl');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function show_active_brands_info()
	{
		$this->db->select('*');
		$this->db->from('brands_tbl');
		$this->db->where('status', 1);
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function edit_brand_by_id($brand_id)
	{
		$this->db->select('*');
		$this->db->from('brands_tbl');
		$this->db->where('brand_id', $brand_id);
		$query = $this->db->get();
		$result = $query->row();

		return $result;
	}

	public function update_brand_by_id()
	{
		$data= array();
		$brand_id = $this->input->post('brand_id', true);
		$data['brand_name'] = $this->input->post('brand_name', true);

		$this->db->where('brand_id', $brand_id);
		$this->db->update('brands_tbl', $data);
	}

	public function change_brand_status_by_id($brand_id, $status)
	{
		$data['status'] = $status;
		$this->db->where('brand_id', $brand_id);
		$this->db->update('brands_tbl', $data);
	}

	public function delete_brand_info($brand_id)
	{
		$this->db->where('brand_id', $brand_id);
		$this->db->delete('brands_tbl');
	}

	public function insert_product_info($thumbnail_image)
	{
		$data= array();
		$data['product_name'] = $this->input->post('product_name', true);
		$data['product_category'] = $this->input->post('product_category', true);
		$data['product_brand'] = $this->input->post('product_brand', true);
		$data['product_price'] = $this->input->post('product_price', true);
		$data['product_stock'] = $this->input->post('product_stock', true);
		$data['stock_quantity'] = $this->input->post('stock_quantity', true);
		$data['product_sku'] = $this->input->post('product_sku', true);
		$data['short_description'] = $this->input->post('short_description', true);
		$data['description'] = $this->input->post('description', true);
		

		$daily_deals = $this->input->post('daily_deals', true);

		if ($daily_deals == NULL) {
			$data['daily_deals'] = 0;
		}
		if ($daily_deals == 'on') {
			$data['daily_deals'] = 1;
		}

		$data['thumbnail_image'] = $thumbnail_image;

		$this->db->insert('product_tbl', $data);
	}
	
	public function change_product_status_by_id($product_id, $status)
	{
		$data['status'] = $status;
		$this->db->where('product_id', $product_id);
		$this->db->update('product_tbl', $data);
	}

	public function show_product_info()
	{
		$this->db->select('*');
		$this->db->from('product_tbl');
		$query = $this->db->get();
		$result = $query->result();
		
		return $result;
	}

	public function show_daily_deals()
	{
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('daily_deals', 1);
		$query = $this->db->get();
		$result = $query->result();
		
		return $result;
	}

	public function show_active_product_info()
	{
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('status', 1);
		$query = $this->db->get();
		$result = $query->result();
		
		return $result;
	}

	public function show_active_product_info_by_id($product_id)
	{

		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->join('categories_tbl', 'category_id = product_category');
		$this->db->where('product_id', $product_id);
		$query = $this->db->get();
		$product_info = $query->row();

		return $product_info;
	}

	public function categories_number_count()
	{
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_category', 1);
		$query = $this->db->get();
		$result = $query->num_rows();
		
		return $result;
	}

	public function show_product_by_category($category_id)
	{
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_category', $category_id);
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}

	public function show_product_num_rows_by_category($category_id)
	{
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_category', $category_id);
		$query = $this->db->get();
		$result = $query->num_rows();

		return $result;
	}

	public function edit_product_by_id($product_id)
	{
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_id', $product_id);
		$query = $this->db->get();
		$result = $query->row();

		return $result;
	}

	public function update_product_by_id($thumbnail_image)
	{
		$data= array();
		$product_id = $this->input->post('product_id', true);

		$data['product_name'] = $this->input->post('product_name', true);
		$data['product_category'] = $this->input->post('product_category', true);
		$data['product_brand'] = $this->input->post('product_brand', true);
		$data['product_price'] = $this->input->post('product_price', true);
		$data['product_stock'] = $this->input->post('product_stock', true);
		$data['stock_quantity'] = $this->input->post('stock_quantity', true);
		$data['product_sku'] = $this->input->post('product_sku', true);
		$data['short_description'] = $this->input->post('short_description', true);
		$data['description'] = $this->input->post('description', true);

		$daily_deals = $this->input->post('daily_deals', true);

		if ($daily_deals == NULL) {
			$data['daily_deals'] = 0;
		}
		if ($daily_deals == 'on') {
			$data['daily_deals'] = 1;
		}

		$data['thumbnail_image'] = $thumbnail_image;

		$this->db->where('product_id', $product_id);
		$this->db->update('product_tbl', $data);
	}

	public function delete_product_info($product_id)
	{
		$this->db->where('product_id', $product_id);
		$this->db->delete('product_tbl');
	}

	public function show_company_info()
	{
		$this->db->select('*');
		$this->db->from('company_info_tbl');
		$query = $this->db->get();
		$result = $query->row();

		return $result;
	}

	public function update_company_info_by_id()
	{
		$data= array();
		$id = $this->input->post('id', true);

		$data['email'] = $this->input->post('email', true);
		$data['contact'] = $this->input->post('contact', true);
		$data['address'] = $this->input->post('address', true);
		$data['fb_page_link'] = $this->input->post('fb_page_link', true);
		$data['twitter_page_link'] = $this->input->post('twitter_page_link', true);
		$data['insta_page_link'] = $this->input->post('insta_page_link', true);
		$data['youtube_page_link'] = $this->input->post('youtube_page_link', true);
		$data['linkedin_page_link'] = $this->input->post('linkedin_page_link', true);

		$this->db->where('id', $id);
		$this->db->update('company_info_tbl', $data);
	}

	public function insert_shipping_cost_info()
	{
		$data= array();
		$data['shipping_zone'] = $this->input->post('shipping_zone', true);
		$data['shipping_cost'] = $this->input->post('shipping_cost', true);

		$this->db->insert('shipping_cost_tbl', $data);
	}

	public function show_shipping_cost_info()
	{
		$this->db->select('*');
		$this->db->from('shipping_cost_tbl');
		$query = $this->db->get();
		$result = $query->result();

		return $result;
	}
	public function edit_shipping_cost_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('shipping_cost_tbl');
		$query = $this->db->get();
		$result = $query->row();

		return $result;
	}
	
	public function update_shipping_cost_info()
	{
		$data= array();
		$id = $this->input->post('id', true);

		$data['shipping_zone'] = $this->input->post('shipping_zone', true);
		$data['shipping_cost'] = $this->input->post('shipping_cost', true);

		$this->db->where('id', $id);
		$this->db->update('shipping_cost_tbl', $data);
	}
}