<?php

class User_model extends CI_Model
{
//    function for  $data= $this->user_model->get(3);
    public function get($user_id = null){
        
        if($user_id === null){
            $q = $this->db->get('user');
        }elseif(is_array($user_id)){
            $q = $this->db->get_where('user',$user_id);            
        }
        else{
            $q = $this->db->get_where('user',['user_id' => $user_id]);
        }
        
        return $q->result_array();
    }
//    function for $result = $this->user_model->insert(['login' => 'anitha']);
    public function insert($data){
        
        $this->db->insert('user',$data);
        return $this->db->insert_id();
    }
//   function for     $result = $this->user_model->update(['user_id' => '4'     ],'anitha'); 
    public function update($data,$login){
        $this->db->where(['login' => $login]);
        $this->db->update('user',$data);
        return $this->db->affected_rows();
    }
//    $result = $this->user_model->delete(5);
    public function delete($user_id){
        
        $this->db->delete('user',['user_id' => $user_id]);
        return $this->db->affected_rows();
    }
            
    
            
}
