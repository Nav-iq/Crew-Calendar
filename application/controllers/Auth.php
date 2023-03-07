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

            // if($_SERVER['REQUEST_METHOD']=='POST'){
                // $this->form_validation->set_rules('dateOne','Date One','required');
                // $this->form_validation->set_rules('dateTwo','Date Two','required');
                // $this->form_validation->set_rules('selectOne','Select One','required');
                // $this->form_validation->set_rules('selectTwo','Select Two','required');
                // $this->form_validation->set_rules('selectThree','Select Three','required');

                // if($this->form_validation->run()==TRUE){
                    $dateOne = $this->input->post('dateOne');
                    $dateTwo = $this->input->post('dateTwo');
                    $selectOne = $this->input->post('selectOne');
                    $selectTwo = $this->input->post('selectTwo');
                    $selectThree = $this->input->post('selectThree');
        
                    $filterdata['filter'] = $this->auth_model->all($dateOne,$dateTwo,$selectOne,$selectTwo,$selectThree);                   
                    $this->load->view('crew', $filterdata);
                //     if($filterdata['filter']!=false)
                //     {             
                //         $session_data = array(
                //             "dateone"=>"$dateOne",
                //             "datetwo"=>"$dateTwo",
                //             "selectone"=>"$selectOne",
                //             "selecttwo"=>"$selectTwo",
                //             "selectthree"=>"$selectThree"
                //         );
        
                //         $this->session->set_userdata($session_data);
                //         $this->load->view('crew', $filterdata);
                //     }
                //     else
                //     {
                //         $this->session->set_flashdata('error','no data given');
                //         redirect(base_url('Auth/frontend'));
                //     }
                // }
                // else
                // {
                //     $this->session->set_flashdata('error','fill all required field');
                //         redirect(base_url('Auth/frontend'));
                }                                                
            }
        // }
    // }
?>
    
    
    
    
    
