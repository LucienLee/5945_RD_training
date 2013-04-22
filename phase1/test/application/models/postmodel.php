<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
class PostModel extends CI_Model {  
    function __construct()  
    {  
        parent::__construct();  
    }
    
    function findAll(){
    	return $this->db->get('5945Post')->result();
    }  

    function find_by_id($postID){
    	// $this->db->select("*");
    	// $this->db->from('5945Post');
    	// $this->db->where( 'PostID', $postID ); 
    	// return $this->db->get();
    	$query = $this->db->get_where('5945Post', array( 'PostID'=>$postID ) );
    	if ( $query->num_rows() <= 0){  
        	return null; 
	    }  
  
    	return $query->row();
    	
    }
	
    function find_by_category($categoryID){
    	$query = $this->db->get_where('5945Post', array( 'Category'=> $categoryID ) );
		if ( $query->num_rows() <= 0){  
        	return null; 
	    }  
    	return $query->result();
    }

	function new_post($data){
		$this->db->insert('5945Post', $data);
		return $this->db->insert_id();
	}


	function update_post($postID, $data){
		$this->db->where( 'PostID', $postID);
		$this->db->update( '5945Post',$data ); 

	}

	function delete_post($postID){
		$this->db->where( array('PostID' => $postID));
		$this->db->delete('5945Post');

	}

	
}  