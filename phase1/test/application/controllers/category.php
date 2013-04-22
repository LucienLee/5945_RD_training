<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {


	public function index()
	{
		$posts = $this->CategoryModel->findAll();
		$this->load->view('post_category',array('posts'=>$posts ));
	}
}

