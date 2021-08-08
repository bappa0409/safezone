<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartModel extends CI_Model {


	public function select_product_info_by_id($product_id)
	{
		$this->db->select('*');
		$this->db->from('product_tbl');
		$this->db->where('product_id', $product_id);
		$query = $this->db->get();
		$product_info = $query->row();

		return $product_info;
	}

}