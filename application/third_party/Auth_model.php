<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{

   // public function schedule(){
   // }

   public function all(){                     // get form db
      $result = $this->db
                  ->order_by('id','ASC')    
                  ->get('crewcalendar')
                  ->result_array();    
          // select * from car_models order by id ASC     
      return $result;                                                                                                            
  }


}


?>
 
 