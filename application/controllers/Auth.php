<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Auth extends CI_Controller
    {
        public function frontend()
        {
        
            $this->load->view('frontend');
            

        }
        public function calendar()
        {
        
            $this->load->view('calendar');
            

        }
        
        
    }
    ?>
    
    
    
    
    
