<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
    {
        // public function crew()
        // {
        //     $data['show'] = $this->auth_model->show_all() ;  //get data from db and store in data array
        //     $this->load->view('crew', $data);                  //data array passed toward view
        // }

        public function crew()
        {
            $this->load->view('crew');
        }

        public function frontend()
        {
            $this->load->view('frontend'); 
        }

        public function filter(){

            $dateOne = $this->input->post('dateOne');
            $dateTwo = $this->input->post('dateTwo');
            $selectOne = $this->input->post('selectOne');
            $selectTwo = $this->input->post('selectTwo');
            $selectThree = $this->input->post('selectThree');

            $filterdata['filter'] = $this->auth_model->all($dateOne,$dateTwo,$selectOne,$selectTwo,$selectThree);                   
            $this->load->view('crew', $filterdata);
        }                                                
    }
?>
    
    
    
    
    
