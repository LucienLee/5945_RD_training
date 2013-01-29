<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
  
class Post extends CI_Controller {  
    public function index()  
    {  
        $list = $this->PostModel->findAll();
        $this->load->view('index', Array( "posts" => $list, "masthead_css" => 'list' ));  
    }  
  
    public function new_(){
        // load 
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->view('form', Array( "masthead_css" => 'new') );     
    }  

    public function create(){
        // load 
        $this->load->helper('form');
        $this->load->library('form_validation');


        $this->form_validation->set_rules('name', '名字', 'trim|required|xss_clean');
        $this->form_validation->set_rules('text', '內容', 'required');

        if($this->form_validation->run() === FALSE){

            $this->load->view('form');
        }
        else{
            $this->PostModel->set_post();
            redirect(site_url("post/index"));
        }
    }
}  