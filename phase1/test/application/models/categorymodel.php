<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
class CategoryModel extends CI_Model {  
    function __construct()  
    {  
        parent::__construct();  
    }

    function findAll(){
    	return $this->db->get('5945Category')->result();
    }

    function find_by_categoryID($ID){
    	$query = $this->db->get_where('5945Category', array('CategoryID'=>$ID) );
    	if($query->num_rows() <= 0){
    		return null;
    	}
    	return $query->row();

    }
}