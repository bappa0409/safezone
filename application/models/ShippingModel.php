<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShippingModel extends CI_Model {

	public function update_shipping_info()
	{
		$data= array();
		$shipping_id = $this->input->post('shipping_id', true);
		$data['shipping_zone'] = $this->input->post('shipping_zone', true);
		$data['shipping_cost'] = $this->input->post('shipping_cost', true);
		
		$this->db->where('shipping_id', $shipping_id);
		$this->db->update('shipping_cost_add_tbl', $data);

	}
	
}