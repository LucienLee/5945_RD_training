<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
  
class Post extends CI_Controller {  
    

    public function index()  
    {  
        $posts = $this->PostModel->findAll();
        $this->load->view('index', Array( "posts" => $posts,  ));  
    }  
  
    public function new_($categoryID){
        // load 
        $this->load->helper('form');

        $category = $this->CategoryModel->find_by_categoryID($categoryID);
        $this->load->view('form', Array( 'category'=> $category, 
            'form_action'=>'post/create/'.$category->CategoryID ) );     
    }  

    public function create($categoryID){
        // load 
        $this->load->helper('form');
        $this->load->helper('date');

        $this->form_validation->set_rules('name', '名字', 'trim|required|xss_clean');
        $this->form_validation->set_rules('text', '內容', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('form');
        }
        
        
        $data = array(
            'UserName' => $this->input->post('name'),
            'UserEmail' => $this->input->post('email'),
            'Content' => $this->input->post('text'),
            'Category' => $categoryID,
            'CreateDate' => $this->current_time(),
            'ModifyDate' => $this->current_time()
        );

        $this->PostModel->new_post($data);
        redirect(site_url("post/category/$categoryID"));
        
    }

    public function edit($postID = null, $categoryID = null ){
        
        if($postID == null){
            show_404("found not post.");
            return true;
        }
        
        $post = $this->PostModel->find_by_id($postID);
        
        // if($post == null){
        //      header();
        // }
        $category = $this->CategoryModel->find_by_categoryID($categoryID);
        $this->load->view('form', Array("category" => $category,
         'form_action'=>'post/update/'.$postID ,'post' => $post) );
    
    }

    public function update($postID = null){
        // $postID = $this->input->post("postID");
        
        $this->load->helper('form');
        $this->form_validation->set_rules('name', '名字', 'trim|required|xss_clean');
        $this->form_validation->set_rules('text', '內容', 'required');
        
        if($postID == null){
            show_404("Article not found !");  
            return true;  
        }
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('edit', Array("category" => 'new', 'post' => $post) );
        }
        else{
            $this->load->helper('date');

            $data = array(
                'UserName'=> $this->input->post('name'),
                'UserEmail' => $this->input->post('email'),
                'Content'=> $this->input->post('text'),
                'ModifyDate' => $this->current_time()
            );
            $this->PostModel->update_post($postID, $data);
            $categoryID =  $this->PostModel->find_by_id( $postID )->Category;
            redirect(site_url("post/category/$categoryID"));
        }  
    }

    public function delete( $postID = null){
        if($postID == null){
            show_404("Can't delete post.");
            return true;
        }
        $categoryID =  $this->PostModel->find_by_id( $postID )->Category;
        $this->PostModel->delete_post($postID);
        redirect(site_url("post/category/$categoryID"));
    }

    function current_time(){
        return date('Y-m-d h:i:s');
    }

    function category( $categoryID = null ){
        if($categoryID == null){
            show_404("Category not found.");
            return true;
        }

        $posts = $this->PostModel->find_by_category($categoryID);
        $category = $this->CategoryModel->find_by_categoryID($categoryID);
        if( $posts == null){
            $this->load->view('index', array('posts' => $posts, 'category'=> $category ));
        }

        $this->load->view('index', array('posts' => $posts, 'category'=> $category ));


    }
}  