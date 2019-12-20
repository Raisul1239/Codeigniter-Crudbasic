<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Products
 *
 * @author skt topu
 */
class Products extends CI_Controller  {
    //put your code here
    public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('ProductsModel');  
      $this->load->helper(array('form', 'url'));
   }
   public function index()
   {
       $products=new ProductsModel;
       $data['dat']=$products->get_products();
     $data['head'] = $this->load->view('header');       
       $this->load->view('list',$data);
       $this->load->view('footer');
   }
   public function create()
   {
      $this->load->view('header');
      $this->load->view('create');
      $this->load->view('footer');      
   }
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
       $config['upload_path']='uploads/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['max_size']             = 204800;
    $config['max_width']            = 6000;
    $config['max_height']           = 6000;
    $this->load->library('upload', $config);
    if ( !$this->upload->do_upload('p_img')){
                                $error = array('error' => $this->upload->display_errors());
                print_r($error);
               
                
    }   else
                {
                    $upload_data = $this->upload->data();
                   
                      $fn= $upload_data['file_name'];
//                        $data = array('upload_data' => $this->upload->data());
                  
                        $this->ProductsModel->insert_product($fn);
//                        $this->session->set_userdata('message','Product saved successfully');
                }
                  
                
       
//       
//       $products=new ProductsModel;
//       $products->insert_product();
       $data['dat']=$this->ProductsModel->get_all_category();
        $data['data'] = $this->load->view('header'); 
        $this->load->view('list',$data);
//       redirect(base_url('products'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($p_code)
   {
       $product = $this->db->get_where('products', array('p_code' => $p_code))->row();
       $this->load->view('header');
       $this->load->view('edit',array('product'=>$product));
       $this->load->view('footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($p_code)
   {
       $config['upload_path']='uploads/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['max_size']             = 204800;
    $config['max_width']            = 6000;
    $config['max_height']           = 6000;
    $this->load->library('upload', $config);
    if ( !$this->upload->do_upload('p_img')){
                                $error = array('error' => $this->upload->display_errors());
                print_r($error);
               
                
    }   else
                {
                    $upload_data = $this->upload->data();
                   
                      $fn= $upload_data['file_name'];
//                        $data = array('upload_data' => $this->upload->data());
                  
                        $this->ProductsModel->update_product($p_code,$fn);
//                        $this->session->set_userdata('message','Product saved successfully');
                }
                  
                
       
       
       $products=new ProductsModel;
//       $products->update_product($p_code,$fn);
       redirect(base_url('products/index'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($p_code)
   {
       $this->db->where('p_code', $p_code);
       $this->db->delete('products');
       redirect(base_url('products'));
   }
}

