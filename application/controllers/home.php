<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home/include/header_view');
        $this->load->view('home/home_view');
        $this->load->view('home/include/footer_view');
    }
  //Database testing  
//    public function test()
//    {
//       //Insert into table User
//        $date=array(
//            'user_id'=>'2'
//           );
//        $this->db->insert('user',$date);
//            
//        //delete from user table
//        
//        $this->db->delete('user',['user_id'=>2]);
//        $result=$this->db->get('user');
//        print_r($result->result());
//    }
    
    
}


