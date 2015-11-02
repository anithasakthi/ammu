<?php

class Test extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
   public function test_get(){
        
        $data= $this->user_model->get(3);
        print_r($data);
        
//        $this->output->enable_profiler();  // Use to debug
                
    }
       public function test_insert(){
        $result = $this->user_model->insert([
            'login' => 'anitha'
        ]);
        
        print_r($result);
    }
           
      public function test_update(){
        $result = $this->user_model->update([
            'user_id' => '4'
        ],'anitha');
        print_r($result);
        
    }
       public function test_delete(){
        $result = $this->user_model->delete(5);
        print_r($result);
        
    }
     
}