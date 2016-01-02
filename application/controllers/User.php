<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller 
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
	}
	public function index()
	{
		$title['title'] = 'Login | Register';
		$this->load->view('header',$title);
		$this->load->view('log');
	}
	public function login()
	{
		$email = $this->input->post('email');
		if(isset($email))
		echo $email;
		else
		echo $email;
	}
}
