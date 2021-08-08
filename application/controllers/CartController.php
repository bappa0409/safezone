<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartController extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('CartModel');
	}

	public function add_to_cart()
	{

		$data = array();
		$data['title'] = 'Cart';

		$data['website_content'] = $this->load->view('pages/cart', $data , true);
		$this->load->view('layouts/website', $data);
		
		$product_id =$this->input->post('product_id', true);
		$product_qty = $this->input->post('product_qty', true);

		$product_info = $this->CartModel->select_product_info_by_id($product_id);

		$cart_data = array(
			'id'      => $product_info->product_id,
			'qty'     => $product_qty,
			'price'   => $product_info->product_price,
			'name'    => $product_info->product_name,
			'options' => array('image' => $product_info->thumbnail_image)
		);
		
		$this->cart->insert($cart_data);
		return redirect('cart');
	}

	public function show_cart()
	{
		$data = array();
		$data['title'] = 'Cart';
		$data['logo_details'] = $this->AdminModel->show_brand_logo_info();
		$data['company_info'] = $this->AdminModel->show_company_info();

		$data['website_content'] = $this->load->view('pages/cart', $data , true);
		$this->load->view('layouts/website', $data);
	}

	public function delete_to_cart($rowid)
	{
		$data = array(
			'rowid' => $rowid,
			'qty'   => 0
		);
		$this->cart->update($data); 
		return redirect('cart');
		
	}
	public function update_cart_product_quantity()
	{
		$cart_product_quantity= $this->input->post('product_qty', true);
		$rowid= $this->input->post('rowid', true);

		$data = array(
			'rowid' => $rowid,
			'qty'   => $cart_product_quantity
		);
		$this->cart->update($data); 
		return redirect('cart');
		
	}
}