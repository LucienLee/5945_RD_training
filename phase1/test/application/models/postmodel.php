<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
class PostModel extends CI_Model {  
    function __construct()  
    {  
        parent::__construct();  
    }
    
    function findAll(){
    	return $this->db->get('5945Post')->result();
    }  
	
    function current_time(){
    	return date('Y-m-d h:i:s');
    }

	function new_post(){
		$this->load->helper('date');

		$defaultCategory = 0;

		$data = array(
			'UserName' => $this->input->post('name'),
			'UserEmail' => $this->input->post('email'),
			'Content' => $this->input->post('text'),
			'Category' => $defaultCategory,
			'CreateDate' => $this->current_time(),
			'ModifyDate' => $this->current_time()
		);


		// die(var_dump($data));
		$this->db->insert('5945Post', $data);
		return $this->db->insert_id();
	}
}  