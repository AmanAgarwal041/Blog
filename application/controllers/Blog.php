<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends CI_Controller
{
	var $link1 = array(
			'href' => 'assets/css/bootstrap.css',
			'rel' => 'stylesheet',
			'type' => 'text/css',
		);
	var $link2 = array(
			'href' => 'assets/css/bootstrap.min.css',
			'rel' => 'stylesheet',
			'type' => 'text/css',
		);
	var $link3 = array(
			'href' => 'assets/css/custom.css',
			'rel' => 'stylesheet',
			'type' => 'text/css',
		);
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('html','text'));
		$this->load->model(array('Blog_model','Category_model'));
	}
	public function index()
	{
		$data['blogs'] = $this->Blog_model->display('all');
		$title['title'] = 'Index Page of the BlogExpress';
		$this->load->view('header',$title);
		$this->load->view('blog_view',$data);
	}
	public function create_blogs()
		{
			$category['categories'] = $this->Category_model->get_categories();
			$title['title'] = 'Create Blogs';
			$this->load->view('header',$title);
			$this->load->view('create_blogs',$category);
		}
	public function change_blog($id)
	{
		$array['categories'] = $this->Category_model->get_categories();
		$data['blog'] = $this->Blog_model->display($id);
		$array ['blog'] = $data;
		$title['title'] ='Update blog';
		$this->load->view('header',$title);
		$this->load->view('update_blogview',$array);
	}
	public function qexecute()
	{				
		$title = $this->input->post('title');
		$category = $this->input->post('category_id');
		$body = $this->input->post('body');
		$date = date('y-m-d');
		$values = array(
			'title' => $title,
			'body' => $body,
			'poston' => $date,
			'category_id' => $category
			);
		
		
		if($this->validate() && $this->do_upload('image'))
		{
			$values['image'] = $this->upload->file_name;
			$check = $this->Blog_model->qexecute($values);
		}
		else
			$check = " False";
		
			if($check)
		{
			$er['er'] = "Your Blog has been Added and image uploaded successfully...!!";
			$title['title'] ='Blog Posted Result Page';
			$this->load->view('header' ,$title);
			$this->load->view('posted_blog',$er);
		}	
		else
		{
			$this->create_blogs();
		}
	}
	
	public function change()
	{
	
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$category = $this->input->post('category_id');
		$body = $this->input->post('body');
		$date = date('y-m-d');
			$values = array(
			'title' => $title,
			'body' => $body,
			'poston' => $date,
			'category_id' => $category
			);
		if($this->validate() && $this->input->post('image'))
		{
			if($this->do_upload('image'))
			{
				$values['image'] = $this->upload->file_name ;
				$check = $this->Blog_model->qupdate($values,$id);
			}
			else
			$check = "False";	
		}
		else
		if($this->validate())
		{
			$check = $this->Blog_model->qupdate($values,$id);
		}
		else
			$check ="False";	
				
		if($check)
			$er['er'] = "Your Blog has been Updated successfully...!!";
		else
			$er['er'] = "No changes made";
		
		$title['title'] = 'Blog Posted Result Page';
		$this->load->view('header',$title);
		$this->load->view('posted_blog',$er);
	}
	public function do_upload($arg)
	{
		$config = array(
			'upload_path' => './uploads/',
			'allowed_types' => 'gif|jpeg|jpg|png',
			'overwrite' => True,
			'max_size' => '1000'
		);
		if(!is_dir($config['upload_path'])) die('No such directory exists');
		$this->load->library('upload' , $config);
		return $this->upload->do_upload($arg);
			
	}
	public function validate()
	{
		$this->form_validation->set_rules('title' , 'Title' ,'trim|required');
		$this->form_validation->set_rules('body' , 'Description' , 'trim|required');
		return $this->form_validation->run() ;
	}
	
	public function view_category($arg)
	{
		$data['blogs'] = $this->Blog_model->display($arg);
		$title['title'] = 'Viewing By category';
		$this->load->view('header',$title);
		$this->load->view('blog_view',$data);
	}
	public function view_full_blog($arg)
	{
		$data['blogs'] = $this->Blog_model->display($arg);
		$title['title'] = 'Viewing Full Blog';
		$this->load->view('header',$title);
		$this->load->view('full_blogview.php' , $data);
	}	
}