<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductsModel
 *
 * @author skt topu
 */
class ProductsModel extends CI_Model{
    //put your code here
    function __construct()
  {
    parent::__construct(); // construct the Model class
    $this->load->database();
  }
    public function get_products(){
        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $this->load->database();
        $query = $this->db->get('products');
        return $query->result();
    }
    function get_all_category(){
      $dat=  $this->db->select('*')->from('products')->get()->result();
      return $dat;  
}
    public function insert_product($x)
    {    
        $data = array(
            'p_name' => $this->input->post('p_name'),
            'p_code' => $this->input->post('p_code'),
            'p_price' => $this->input->post('p_price'),
            'p_category' => $this->input->post('p_category'),
            'Related_product' => $this->input->post('Related_product'),
            'p_img' =>$x
        );
//        $query = $this->db->query("select * from products where p_code='p_code'");
//        if ($query>0)
//	{
//		echo json_encode(array("statusCode"=>201));
//	}
        $this->load->database();
      return $this->db->insert('products', $data);
//      $errNo=$this->db->error();
//       if(!$que){
//           print(); 
//       }
//       else{
//           ($errNo==1062){
//           print 'Duplicate';
//       }
       
           
       
//       $errNo   = $this->db->_error_number();
//       if($errNo==1062){
//           print 'Duplicate';
//       }
       
}
    
    public function update_product($p_code,$x) 
    {
        $data=array(
            'p_name' => $this->input->post('p_name'),
            'p_code' => $this->input->post('p_code'),
            'p_price' => $this->input->post('p_price'),
            'p_category' => $this->input->post('p_category'),
            'Related_product' => $this->input->post('Related_product'),
            'p_img' =>$x
        );
        if($p_code==0){
            return $this->db->insert('products',$data);
        }else{
            $this->db->where('p_code',$p_code);
            return $this->db->update('products',$data);
            
        }        
    }
}


