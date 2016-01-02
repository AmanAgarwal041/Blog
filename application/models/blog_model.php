<?php
	class Blog_model extends CI_Model
	{
		function __contruct()
		{
			parent::__construct();
			$this->load->helper(array('form','string'));
		}
		public function qexecute($values)
		{
				$return = $this->db->insert('blog',$values);
					return $return;
		}
		public function qupdate($values,$id)
		{
			$this->db->where('id',$id);
			$return = $this->db->update('blog',$values);
			return $return;
		}
		public function display($type)
		{
			$this->db->order_by('poston' , 'desc');
			if(is_numeric($type))
			$this->db->where('id',$type);
			else
			if($type!='all')
			$this->db->where('category.category',$type);
			
			//Getting the result
			$this->db->from('blog');
			$this->db->join('category' , 'category.category_id = blog.category_id');
			$blogs = $this->db->get();
			
			/*Check if enteries for specifics exists or not*/
			
			if($blogs->num_rows()==0)
			return false;
			else
			if(is_numeric($type))
			return $blogs->row();
			else
			return $blogs->result();
		}
	}
?>	