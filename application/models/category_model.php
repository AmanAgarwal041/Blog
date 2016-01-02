<?php
	class Category_model extends CI_Model
	{
		public function get_categories()
		{
			$categories = $this->db->get('category');
			return $categories->result();
		}
	}
?>